<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locationdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name FROM countries";
$result = $conn->query($sql);
$countries = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $countries[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Country and State Selection</title>
</head>
<body>
    <label for="country">Select Country:</label>
    <select id="country" name="country" onchange="fetchStates()">
        <option value="">Select Country</option>
        <?php foreach ($countries as $country) { ?>
            <option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
        <?php } ?>
    </select>

    <label for="state">Select State:</label>
    <select id="state" name="state">
        <option value="">Select State</option>
    </select>

    <script>
        function fetchStates() {
            var countrySelect = document.getElementById('country');
            var countryId = countrySelect.value;
            var stateSelect = document.getElementById('state');

            if (countryId) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'get_states.php?country_id=' + countryId, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        var states = JSON.parse(xhr.responseText);
                        stateSelect.innerHTML = '<option value="">Select State</option>';
                        states.forEach(function (state) {
                            var option = document.createElement('option');
                            option.value = state.id;
                            option.text = state.name;
                            stateSelect.appendChild(option);
                        });
                    }
                };
                xhr.send();
            } else {
                stateSelect.innerHTML = '<option value="">Select State</option>';
            }
        }
    </script>
</body>
</html>
