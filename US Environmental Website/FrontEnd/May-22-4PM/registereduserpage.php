<?php
$con=mysqli_connect("localhost","root","toor","sirishatest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//session_start();
//$loginemail = $_POST['loginemail'];
//$loginpwd = $_POST['loginpwd'];
//$phonenumber = $_POST['phonenum'];
//$pwd = $_POST['password'];
//$repeatpwd = $_POST['repeatpassword'];
//echo $loginemail;
//echo $loginpwd;
session_start();
$user_id=$_SESSION['loggeduserid'];
$query = "select location_id,incident_description,incident_id,categories_id from incidents where reporting_user_id='$user_id'";
$getresults= mysqli_query($con,$query);
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
session_start();
//echo $user;
//$_SESSION['loggeduser'] = $user;
//$_SESSION['loggeduserid'] = $userid;
//$_SESSION['loggeduserrole'] = $userrole;
//}
echo '<div class="container">';
echo '<h1>My Posts</h1>';
echo '  <table id="My Posts Table" class="table table-hover">';
echo '      <thead>';
echo '       <tr>';
echo '          <th style width="10%">Issue ID</th> ';
echo '          <th style width="10%">Park Name</th>';
echo '          <th style width="12%">Issue Category</th>';
echo '         	<th style width="30%">Issue Description</th>';
echo '       </tr>';
echo '       </thead>';
echo '       <tbody>';
while($row = mysqli_fetch_array($getresults))
{
//echo "hi";
$location_id= $row['location_id'];
$incident_description=$row['incident_description'];
$incident_id=$row['incident_id'];
$categories_id=$row['categories_id'];
session_start();
echo '                <tr>';
$query = "select location_name from locations where location_id='$location_id'";
$getlocationname= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getlocationname))
{
//echo "hi";
$location_name= $row1['location_name'];}
echo '           <td>' .$incident_id. '</td> ';
echo '           <td>' .$location_name. '</td>' ;
$query = "select categories_name from categories where categories_id='$categories_id'";
$getcategoryname= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getcategoryname))
{
//echo "hi";
$category_name= $row1['categories_name'];}

echo '           <td>' .$category_name.'</td>';
echo '           <td>' .$row['incident_description']. '</td>';  

}
echo '   </tbody>';
echo '        </table>';
echo '        </div>';

//echo $_SESSION['loggeduser'];
//if ($_SESSION['loggeduserrole'] == 2)
//{
//header("Location: /registereduserhomepage.php");
//exit();
//}
//elseif ($_SESSION['loggeduserrole'] == 3){
//header("Location: /adminhomepage.html");
//exit();
//}
//elseif ($_SESSION['loggeduserrole'] == 4){
//header("Location: /casemanagerhomepage.html");
//exit();
//}
//else
//{
//header("Location: /homepage1.html");
//exit();
//}


//}
//else

//echo '<script language="javascript">';
//echo 'alert("Password and repeat password does not match")';
//echo '</script>';

?>

