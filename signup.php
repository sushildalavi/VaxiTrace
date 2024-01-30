<?php

$servername= "localhost";
$username="root";
$password="";
$dbname="COVtracker";

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
            <a href="index.php">Welcome</a>
            
  
        </div>
    
    <div class="footer">
  <p>Copyright COVtracker. All Rights Reserved.Call us - +91 9000 800000</p>
</div>
    
    <br><br>
    <h1>SIGN UP</h1>
    <form action="signup.php" method ="post">
       
       <p>Enter Aadhar card number</p><input type="text" placeholder="" name="a_id">

       <p>Enter Password</p><input type="text" placeholder="" name="pass">
       <p>Enter Confirm Password</p><input type="text" placeholder="" name="cpass" >
       <p>Enter otp</p><input type="text" placeholder="" name="o">
       <br><br><br>
       <button onclick="myFunction()">Generate otp</button>
      <input type="submit" id="button" name="submit">
       <a href="home.html">SUBMIT</a>
        <br><br><br>
   </form>
    <br><br><br>
    
    
     <?php
    
     

$aid=$_POST['a_id'];
$passs=$_POST['pass'];
$cpasss=$_POST['cpass'];





$query="insert into signup values('$aid','$passs','$cpasss')" ;
$data=mysqli_query($conn,$query);
     
if($data)
{
    //echo "Data inserted into the database";
}
else
{
    echo "Data not inserted in the database";
}
?>
    <script type="text/javascript">
function myFunction() {
  alert("Your OTP is 4862. Please enter this to verify your  aadhar card number.")
}

</script>
    
</body>
</html>
