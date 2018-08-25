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
$query = "select incident_id,location_id,incident_description,status_id,incident_date,assigned_user_id from incidents";
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
echo '<h1 >City Manager Dashboard</h1>';
echo '<div class="container">';
echo  '<div class="tab-content">';
echo  '<div id="mostRecent" class="tab-pane fade in active">';
echo '       <h3>Issues</h3>';
echo '       <table class="table table-hover">';
echo '          <thead>';
echo '                 <tr>';
echo '                   <th style width="10%">Park Name</th>';
echo '                     <th style width="15%">Issue</th>';
echo '                     <th style width="10%">Status</th>';
echo '                     <th style width="10%">Date</th>';
echo '                     <th style width="12%">Assigned to</th>';
echo '                     <th style width="20%">Click here to assign/change status</th>';
echo '                 </tr>';
echo '             </thead>';
echo '             <tbody>';
while($row = mysqli_fetch_array($getresults))
{
//echo "hi";
$incident_id=$row['incident_id'];
$location_id= $row['location_id'];
$status_id=$row['status_id'];
$incident_description=$row['incident_description'];
$status_id=$row['status_id'];
$incident_date=$row['incident_date'];
$assigned_user_id=$row['assigned_user_id'];
session_start();
echo '                <tr>';
$query1 = "select location_name from locations where location_id='$location_id'";
$getlocationname= mysqli_query($con,$query1);
while($row1 = mysqli_fetch_array($getlocationname))
{
//echo "hi";
$location_name= $row1['location_name'];}
echo '                    <td>' .$location_name. '</td>' ;
echo '                    <td>' .$row['incident_description']. '</td>';
$query4 = "select status_text from status where status_id='$status_id'";
$getstatustext= mysqli_query($con,$query4);
while($row4 = mysqli_fetch_array($getstatustext))
{
//echo "hi";
$status_text= $row4['status_text'];}
      
echo '                    <td>' .$status_text. '</td>';
$status_text="No Status Assigned yet";
echo '                    <td>' .$row['incident_date'].'</td>';
$query2 = "select user_name from users where user_id='$assigned_user_id'";
$getusernames= mysqli_query($con,$query2);
while($row2 = mysqli_fetch_array($getusernames))
{
//echo "hi";
$user_name= $row2['user_name'];}
echo '                    <td>' .$user_name.'</td>';
$user_name="No user assigned yet";
//echo '            <form name="form2" action="" method="post">';
//echo '                    <td><input type="text" name="'.$incident_id.'" placeholder="Enter Name"></td>';
//echo '                   </form>';
?>
<td><a href="editcasemanager.php?id=<?php echo $incident_id; ?>&value=<?php echo $user_name?>">Click here to assign/change status</a></td>

<?php
//echo '<td><button name="'.$incident_id.'"  class="btn btn-primary">Save Changes</button></td>';
echo '                </tr>';
}
echo '   </tbody>';
echo '        </table>';
echo '        </div>';
echo '        </div>';
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

