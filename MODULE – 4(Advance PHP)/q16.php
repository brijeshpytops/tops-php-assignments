<!-- Consider the exercise11and add a edit link near delete link e.g. Clicking up on edit 
button a particular row should be open in editing mode  
e.g. on the Particular row there should be filled text box with data and on the option 
column there should be a confirm button clicking upon it arrow should be updated.  -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tops_2_16";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];

    $sql = "UPDATE users SET name='$name', age=$age WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$sql = "SELECT id, name, age FROM users";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Row in Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <table id="data-table">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Options</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr data-id='".$row['id']."'>
                    <td>".$row['name']."</td>
                    <td>".$row['age']."</td>
                    <td>
                        <button onclick='editRow(this)'>Edit</button>
                        <button onclick='deleteRow(this)'>Delete</button>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }
        ?>
    </table>

    <script>
        function editRow(button) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");
            var id = row.getAttribute('data-id');
            var name = cells[0].innerHTML;
            var age = cells[1].innerHTML;

            cells[0].innerHTML = '<input type="text" value="' + name + '">';
            cells[1].innerHTML = '<input type="number" value="' + age + '">';
            cells[2].innerHTML = '<button onclick="confirmEdit(this, ' + id + ')">Confirm</button>';
        }

        function confirmEdit(button, id) {
            var row = button.parentNode.parentNode;
            var cells = row.getElementsByTagName("td");
            var name = cells[0].getElementsByTagName("input")[0].value;
            var age = cells[1].getElementsByTagName("input")[0].value;

            var formData = new FormData();
            formData.append('id', id);
            formData.append('name', name);
            formData.append('age', age);

            fetch('index.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                cells[0].innerHTML = name;
                cells[1].innerHTML = age;
                cells[2].innerHTML = '<button onclick="editRow(this)">Edit</button> <button onclick="deleteRow(this)">Delete</button>';
                console.log(data);
            });
        }

        function deleteRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>
