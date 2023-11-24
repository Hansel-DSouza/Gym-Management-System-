<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmsproject";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$RegId = $_POST['RegID'];


$sql = "DELETE FROM trainer WHERE trainer_id = $RegId";

if ($conn->query($sql) === TRUE) {
    header("Location:Traineredit.html");
} else {
    echo "Error deleting row: " . $conn->error;
}

$conn->close();
?>
