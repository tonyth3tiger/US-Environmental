<?php
$con=mysqli_connect("localhost","root","toor","sirishatest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
session_start();
$email = $_POST['email'];
$city = $_POST['City'];
$phonenumber = $_POST['phonenum'];
$pwd = $_POST['password'];
$repeatpwd = $_POST['repeatpassword'];

if ($pwd==$repeatpwd){
$query = "insert into users(user_first_name,user_name,user_last_name,user_password,user_email,user_phone_number,user_role)VALUES('$city','$city','$city','$pwd','$email','$phonenumber','2')";
  mysqli_query($con,$query);
}
else
{
echo '<script language="javascript">';
echo 'alert("Password and repeat password does not match")';
echo '</script>';
}
echo '<script type="text/javascript">';
//echo 'alert("Password and repeat password does not match")';
echo '<script>window.location.href="/homepage1.html";';
echo '</script>';
?>
