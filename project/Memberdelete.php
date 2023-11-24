<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmsproject";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$RegId = $_POST['RegID1'];


$sql = "DELETE FROM member WHERE member_id = $RegId";

if ($conn->query($sql) === TRUE) {
    header("Location:Memberedit.html");
} else {
    echo "Error deleting row: " . $conn->error;
}

$conn->close();
?>
