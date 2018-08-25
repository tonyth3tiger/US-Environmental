<?php
$id = $_GET['id'];
//echo $id;
$con=mysqli_connect("localhost","root","toor","sirishatest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//session_start();
//$assignedto = $_POST['assignto'];
//echo $assignedto;
//$status = $_POST['status'];
//echo $status;
//$phonenumber = $_POST['phonenum'];
//$pwd = $_POST['password'];
//$repeatpwd = $_POST['repeatpassword'];
//echo $loginemail;
//echo $loginpwd;
$sql = "delete from incidents where incident_id = $id";
mysqli_query($con, $sql);

//echo $user_id;
//$incident_description=$row['incident_description'];
//$status_id=$row['status_id'];


echo '<script language="javascript">';
echo 'alert("Deleted Successfully")';
echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../adminhomepage.php")';
echo '</script>';
//echo $getusername;
//$rows=mysqli_num_rows($getusername);
//if ($rows==0) {
//echo '<script language="javascript">';
//echo 'alert("Invalid user id and password")';
//echo '</script>';

//}
//else
//{
//while($row = mysqli_fetch_array($getresults))
//{
//echo "hi";
//$location_id= $row['location_id'];
//$incident_description=$row['incident_description'];
//$status_id=$row['status_id'];
//$incident_date=$row['incident_date'];
//$assigned_user_id=$row['assigned_user_id'];
//session_start();

?>
