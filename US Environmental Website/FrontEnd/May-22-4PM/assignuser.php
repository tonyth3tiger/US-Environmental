<?php
$id = $_GET['id'];
echo $id;
$con=mysqli_connect("localhost","root","toor","sirishatest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//session_start();
$assignedto = $_POST['assignto'];
//echo $assignedto;
$status = $_POST['status'];
//echo $status;
//$phonenumber = $_POST['phonenum'];
//$pwd = $_POST['password'];
//$repeatpwd = $_POST['repeatpassword'];
//echo $loginemail;
//echo $loginpwd;
$sql = "select user_id from users where user_name='$assignedto'";
$result = mysqli_query($con, $sql);
$rows=mysqli_num_rows($result);
if ($rows==0) {
echo '<script language="javascript">';
echo 'alert("Invalid user ")';
echo '</script>';

}
else
{
while($row = mysqli_fetch_array($result))
{
//echo "hi";
$user_id= $row['user_id'];
//echo $user_id;
}
//echo $user_id;
//$incident_description=$row['incident_description'];
//$status_id=$row['status_id'];

$query = "select status_id from status where status_text='$status'";
$result1 = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result1))
{
//echo "hi";
$status_id= $row['status_id'];
//echo $statusid;
}
//echo $status_id;
echo $id;
$query1 = "update incidents set status_id='$status_id',assigned_user_id='$user_id' where incident_id='$id'";
mysqli_query($con,$query1);
//$query2 = "update incidents set assigned_user_id='$user_id' where incident_id='$id'";
//mysqli_query($con,$query2);
echo '<script language="javascript">';
echo 'alert("Updated Successfully")';
echo '</script>';
echo '<script language="javascript">';
echo 'window.location.replace("../casemanagerhomepage.php")';
echo '</script>';
//echo $getusername;
//$rows=mysqli_num_rows($getusername);
//if ($rows==0) {
//echo '<script language="javascript">';
//echo 'alert("Invalid user id and password")';
//echo '</script>';
}
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
session_start();

?>
