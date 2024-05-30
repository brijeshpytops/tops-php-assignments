<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "locationdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['country_id'])) {
    $country_id = intval($_GET['country_id']);
    $sql = "SELECT id, name FROM states WHERE country_id = $country_id";
    $result = $conn->query($sql);

    $states = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $states[] = $row;
        }
    }
    echo json_encode($states);
}

$conn->close();
?>
