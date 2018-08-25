<?php
$con=mysqli_connect("localhost","root","toor","sirishatest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//session_start();
$loginemail = $_POST['loginemail'];
$loginpwd = $_POST['loginpwd'];
//$phonenumber = $_POST['phonenum'];
//$pwd = $_POST['password'];
//$repeatpwd = $_POST['repeatpassword'];
echo $loginemail;
echo $loginpwd;
$query = "select user_id,user_name,user_role from users where user_email='$loginemail' and user_password='$loginpwd'";
$getusername= mysqli_query($con,$query);
//echo $getusername;
$rows=mysqli_num_rows($getusername);
if ($rows==0) {
echo '<script language="javascript">';
echo 'alert("Invalid user id and password")';
echo '</script>';

}
else
{
while($row = mysqli_fetch_array($getusername))
{
echo "hi";
$user= $row['user_name'];
$userid=$row['user_id'];
$userrole=$row['user_role'];
session_start();
//echo $user;
$_SESSION['loggeduser'] = $user;
$_SESSION['loggeduserid'] = $userid;
$_SESSION['loggeduserrole'] = $userrole;
}
//echo $_SESSION['loggeduser'];
if ($_SESSION['loggeduserrole'] == 2)
{
header("Location: /registereduserhomepage.php");
exit();
}
elseif ($_SESSION['loggeduserrole'] == 3){
header("Location: /adminhomepage.html");
exit();
}
elseif ($_SESSION['loggeduserrole'] == 4){
header("Location: /casemanagerhomepage.html");
exit();
}
else
{
header("Location: /homepage1.html");
exit();
}


}
//else

//echo '<script language="javascript">';
//echo 'alert("Password and repeat password does not match")';
//echo '</script>';

?>

