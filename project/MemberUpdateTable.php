<?php

mysqli_report(MYSQLI_REPORT_OFF);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmsproject";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
   
    $RegID=$_POST["RegID"];
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $phone_number = $_POST["phone"];
    $email_id = $_POST["email"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $plan = $_POST["plan"];
    $HEIGHT = $_POST["height"];
    $WEIGHT = $_POST["weight"];
    $ARMS = $_POST["arms"];
    $CHEST = $_POST["chest"];
    $WAIST = $_POST["waist"];
    $HIPS = $_POST["hips"];
    


    $sql = "UPDATE `member` SET `firstname` = '$firstname', `lastname` = '$lastname',`phone_number` = '$phone_number', `email_id` = '$email_id',`address` = '$address',`gender` = '$gender',`plan` = '$plan',`Height` = '$HEIGHT',`Weight` = '$WEIGHT',`Arms` = '$ARMS',`Chest` = '$CHEST',`Waist` = '$WAIST',`Hips` = '$HIPS' WHERE `member`.`member_id` = $RegID";
    
    
    

    if ($conn->query($sql) === TRUE) {
        header("Location:Memberedit.html");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>