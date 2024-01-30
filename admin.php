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
    </style>
    
</head>
<body>
    
    <div class="topnav">
            <a href="index.php">LOG OUT</a>
            
  
        </div>
    <br><br><br>
    
    <div class="footer">
  <p>Copyright COVtracker. All Rights Reserved.Call us - +91 9000 800000</p>
</div>
    
    <br>
    <form action="admin.php" method ="post">
       
       <p>Enter First Name</p><input type="text" placeholder="" name="faname">

       <p>Enter Last Name</p><input type="text" placeholder="" name="laname">
       
       <p>Enter Aadhar Number</p><input type="text" placeholder="" name="aa_no">
       
       <p>Enter Age</p><input type="text" placeholder="" name="agee">
       
        <p>Enter Gender</p><input type="text" placeholder="" name="genderr">
        
        <p>Enter Date of Vaccination</p><input type="text" placeholder="" name="date">
        
        <p>Enter Type of vaccine</p><input type="text" placeholder="" name="vac">
        <p>Enter Vaccination center city </p><input type="text" placeholder="" name="vac_city">
         <p>Enter Hospital name </p><input type="text" placeholder="" name="hospital">
        
        <br><br><br>
        <input type="submit" id="button" name="submit">
        <br><br><br>
   </form>
    <br>

</body>
</html>

<?php

$f=$_POST['faname'];
$l=$_POST['laname'];
$aaadhar=$_POST['aa_no'];
$agge=$_POST['agee'];
$gxander=$_POST['genderr'];
$datte=$_POST['date'];
$vaccine=$_POST['vac'];
$dobb=$_POST['vac_city'];
$isspital=$_POST['hospital'];



$query="insert into vaccination values('$f','$l','$aaadhar','$agge','$gxander','$datte','$vaccine','$dobb','$isspital')" ;
$data=mysqli_query($conn,$query);
if($data)
{
    echo "Data inserted into the database";
}
else
{
    echo "Data not inserted in the database";
}
?>
<br><br><br>
<br><br>

