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

$RegID=$_POST["RegID"];


$sql= "SELECT * FROM `member` WHERE `member_id` = $RegID";
$result = mysqli_query($conn, $sql);

$rows = mysqli_fetch_assoc($result);

$name=$rows['firstname'];



$firstname = $rows['firstname'];
$lastname = $rows['lastname'];
$phone_number = $rows['phone_number'];
$email_id = $rows['email_id'];
$address = $rows['address'];
$gender = $rows['gender'];
$plan = $rows['plan'];
$HEIGHT = $rows['Height'];
$WEIGHT = $rows['Weight'];
$ARMS = $rows['Arms'];
$CHEST = $rows['Chest'];
$WAIST = $rows['Waist'];
$HIPS = $rows['Hips'];

error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
    <link rel="stylesheet" href="Membersignup.css">
</head>
<body style="background-image: url(gymbackground.jpg); background-size:100%;  background-repeat: no-repeat;">
    <div class="square">
        <div class="content">
            <a href="Memberedit.html" class="backbutton">&times;</a>
            <h1>Member Updation Form</h1>
                    <form id="myForm" action="MemberUpdateTable.php" method="POST">
                    <div class="user-container">
                        <div class="user-box" style="flex-direction: column;">
                            <br>
                            Registration number:<input type="hidden" value="<?php echo "$RegID"; ?>" name="RegID" ><?php echo $RegID;?><br><br>
                            <label>First Name:</label>
                        <input type="text" id="fname" name="fname" size="20" value="<?php echo "$firstname"; ?>"onkeydown="move(event,'lname')" required/><br><br>
                        <label>Last Name:</label>
                        <input type="text" id="lname" name="lname" size="20" value="<?php echo "$lastname"; ?>" onkeydown="move(event,'phone')" required/><br><br>
                        <label>Ph No:</label>
                        <input type="text" id="c_code" size="1" value="+91"/>
                        <input type="number" id="phone" name="phone" size="10" value="<?php echo "$phone_number"; ?>" onkeydown="move(event,'email')" required/><br><br>
                        <label>Email ID:</label>
                        <input type="email" id="email" name="email" size="20" value="<?php echo "$email_id"; ?>" onkeydown="move(event,'address')" required/>
                        <br><br>
                        <label>Address:</label>
                        <input type="text" id="address" value="<?php echo "$address"; ?>" name="address" required><br><br>
                        <label>Gender:</label>
                        <input type="radio" name="gender" value="male"<?php echo ($gender === 'male')?'checked':'';?>/>Male
                        <input type="radio" name="gender" value="female"<?php echo ($gender === 'female')?'checked':'';?>/>Female
                        <input type="radio" name="gender" value="other"<?php echo ($gender === 'other')?'checked':'';?>/>Other<br>   <br>
                        </div>
                        
                        <div class="user-box" style="flex-direction: column;">
                            <br><h3>Additional Data</h3>
                            height(cm) <input type="text" size="2" name="height"value="<?php echo "$HEIGHT"; ?>">
                            weight(kg) <input type="text" size="2" name="weight"value="<?php echo "$WEIGHT"; ?>"><br><br>
                            Arms(cm) <input type="text" size="2" name="arms"value="<?php echo "$ARMS"; ?>">
                            Chest(cm)<input type="text" size="2" name="chest"value="<?php echo "$CHEST"; ?>"><br><br>
                            Waist(cm)<input type="text" size="2" name="waist"value="<?php echo "$WAIST"; ?>">
                            Hips(cm)<input type="text" size="2" name="hips"value="<?php echo "$HIPS"; ?>"><br><br>
                            <label>Membership Plan:</label>
                            <select name="plan" id="plan" > 
                                <option value="<?php echo ($plan === 'WG')?'selected':'';?>">Weight Gain</option>
                                <option value="<?php echo ($plan === 'WL')?'selected':'';?>">Weight Loss</option>
                                <option value="AW">Aerobics Workout</option>
                                <option value="C">Cardio</option>
                                <option value="BB">Body Building</option>
                            </select><br><br>
                        </div>
                    </div>
                        <button type="submit" class="submit" name = "submit">Next</a>  
                    </form>
                
        </div>
     
    </div>
        <script>
            function move(event,inputID)
            {
              if(event.key==="Enter")
              {
                event.preventDefault();
                document.getElementById(inputID).focus();
              }
            }

        </script>

           
   
</body>
</html>