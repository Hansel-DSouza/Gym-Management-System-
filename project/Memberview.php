<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Information</title>
    <style>
.square
{
    border-collapse: collapse;
    padding-left: 20px;
    padding-top: 100px;
    width: 100%;
    min-height: 350px;
    justify-content: center;
    background-color: rgba(0,0,0,0.5);
    backdrop-filter: blur(2px);
    margin: 10px;
    border-radius: 10px;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align:center;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: larger;
}

table{
    width:80%;
    border: 2px solid white;
    padding: 8px;
    text-align: left;
}
td {
    margin-top: 30px;
    border: 1px solid white; 
    padding: 8px;
    background-color: rgba(50, 50, 50, 0.5);
    text-align: left;
  }
  .backbutton
  {
      color:#fff;
      font-size: 40px;
      position: absolute;
      top: 5px;
      right: 5px;
      width: 50px;
      height: 50px;
      cursor: pointer;
      background-color: transparent;
      border: 0;
      border-radius: 50%;
      transition: all 0.2s ease-in;
      text-decoration: none;
      text-align: center;
  }
  
  .backbutton:hover{
      background-color: rgba(150,150,150,0.5);
  }
  
  
body {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 50px;
    height: 100vh;
    background-repeat:no-repeat;
    font-family: 'Times New Roman', Times, serif;

}

.colorA{
    background-color: rgba(0,0,0,0.5);
}

th{
    background-color: rgba(0,0,0,0.5);
    border: 1px solid white; 
}
 </style>
</head>
<body style="background-image: url(gymbackground.jpg); background-size:100%;  background-repeat: no-repeat; position:-webkit-sticky;">
<div class="square">
<a href="Memberedit.html" class="backbutton">&times;</a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmsproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

error_reporting(error_reporting() & ~E_WARNING);
// Assuming you have an array or data source with member information
$members = "SELECT * FROM member";
$result = mysqli_query($conn, $members);
    // Add more member data as needed

echo "<table>";
echo "<tr>";
echo "<th>Member ID</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Phone Number</th>";
echo "<th>Email ID</th>";
echo "<th>Address</th>";
echo "<th>Gender</th>";
echo "<th>Plan</th>";
echo "<th>Height</th>";
echo "<th>Weight</th>";
echo "<th>Arms</th>";
echo "<th>Chest</th>";
echo "<th>Waist</th>";
echo "<th>Hips</th>";
echo "</tr>";
// Display the table

while($row = mysqli_fetch_assoc($result))
{
     echo "<tr>";
     echo "<td>". $row["member_id"] ."</td>";
     echo "<td>". $row["firstname"] ."</td>";
     echo "<td>". $row["lastname"] ."</td>";
     echo "<td>". $row["phone_number"] ."</td>";
     echo "<td>". $row["email_id"] ."</td>";
     echo "<td>". $row["address"] ."</td>";
     echo "<td>". $row["gender"] ."</td>";
     echo "<td>". $row["plan"] ."</td>";
     echo "<td>". $row["Height"] ."</td>";
     echo "<td>". $row["Weight"] ."</td>";
     echo "<td>". $row["Arms"] ."</td>";
     echo "<td>". $row["Chest"] ."</td>";
     echo "<td>". $row["Waist"] ."</td>";
     echo "<td>". $row["Hips"] ."</td>";
     echo "</tr>";
}



echo "</table>";
error_reporting(E_ALL);
?>

</div>

</body>
</html>
