<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    //create database connection
    $con = mysqli_connect($server, $username, $password,"studentdetails");

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }

   // mysql_select_db('database',$con) or die(mysql_error());

    // echo "Success connecting to the db";
    // Collect post variables
    $eno = $_POST['eno'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $bloodgroup = $_POST['bloodgroup'];
    $sql = "INSERT INTO `studentdetails` (`Reg.no`, `Name`, `Class`, `D.O.B`, `Age`, `Phone Number`, `Email`, `Address`, `Gender`, `Blood Group`)VALUES ('$eno','$name', '$class', '$dob', '$age','$phone','$email', '$address', '$gender', '$bloodgroup' );";
    
    if($con->query($sql) == true){
        echo "Successfully inserted";}

    else{
        echo "ERROR: $sql <br> $con->error";
    }

        $con->close();
}
?>




<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Student Details Registration</div>
    <div class="content">
      <form action="index.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Reg.nO</span>
            <input type="text" name="eno" id="eno" placeholder="Enter student reg.no" required>
          </div>
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" id="name" placeholder="Enter student name" required>
          </div>
          <div class="input-box">
            <span class="details">Class</span>
            <input type="text" name="class" id="class" placeholder="Enter student class" required>
          </div>
          <div class="input-box">
            <span class="details">D.O.B</span>
            <input type="date" name="dob" id="dob" placeholder="Enter student date of birth" required>
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" name="age" id="age" placeholder="Enter student age" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" id="phone" placeholder="Enter student number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" id="email" placeholder="Enter student email" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" id="address" placeholder="Enter student address" required>
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <input type="text" name="gender" id="gender" placeholder="Enter student gender" required>
          </div>
          <div class="input-box">
            <span class="details">Blood Group</span>
            <input type="text" name="bloodgroup" id="bloodgroup" placeholder="Enter student blood group" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
          <a href="data.php">VIEW DATA</a>
      </form>
    </div>
  </div>
  <script src="index.js"></script>

</body>
</html>
