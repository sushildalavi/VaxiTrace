<?php
$servername= "localhost";
$username="root";
$password="";
$dbname="covtracker";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "connection ok";
}
else
{
    echo "connection failed".mysqli_connect_error();
}
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <style>
        .topnav  a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding:14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav {
  background-color: #000000;
  overflow: hidden;
  position: fixed;
  top: 0;
  width: 100%;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:black;
  color: white;
  text-align: center;
}
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
    
</head>
<body>
    
    <div class="topnav">
            <a href="index.html">Welcome</a>
            
  
        </div>
    <br><br><br>
    
    <div class="footer">
  <p>Copyright COVtracker. All Rights Reserved.Call us - +91 9000 800000</p>
</div>
    <h1>REGISTRATION FORM</h1>
    <br>
    <form action="registration.php" method ="post">
       
       <p>Enter First Name</p><input type="text" placeholder="" name="fname">

       <p>Enter Last Name</p><input type="text" placeholder="" name="lname">
       
       <p>Enter Aadhar Number</p><input type="text" placeholder="" name="a_no">
       
       <p>Enter Address</p><input type="text" placeholder="" name="a">
       
       
        <p>Enter City</p><input type="text" placeholder="" name="city">
       
        <p>Enter Gender</p><input type="text" placeholder="" name="gender">
        
        <p>Enter Age</p><input type="text" placeholder="" name="age">
        
        <p>Enter DOB</p><input type="text" placeholder="" name="dob">
        <p>Enter email address </p><input type="text" placeholder="" name="email">
        
        <br><br><br>
        <input type="submit" id="button" name="submit">
        <br><br><br>
   </form>
    
    
    <h2>Select Your nearest locality/hospital</h2>

<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="mumbaii.html">Mumbai</a>
    <a href="pune.html">Pune</a>
    <a href="nagpur.html">Nagpur</a>
  </div>
  <br><br><br><br><br>

</body>
</html>

<?php

$first=$_POST['fname'];
$last=$_POST['lname'];
$aa=$_POST['a_no'];
$address=$_POST['a'];
$citi=$_POST['city'];
$geder=$_POST['gender'];
$a=$_POST['age'];
$dobb=$_POST['dob'];
$emaill=$_POST['email'];



$query="insert into registration values('$first','$last','$aa','$address','$citi','$geder','$a','$dobb','$emaill')" ;
$data=mysqli_query($conn,$query);
if($data)
{
//    echo "Data inserted into the database";
}
else
{
    echo "Data not inserted in the database";
}
?>
<br><br><br>
<br><br>

