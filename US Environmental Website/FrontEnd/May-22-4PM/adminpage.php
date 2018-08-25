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
$query = "select incident_id,location_id,categories_id,incident_description,incident_date from incidents;";
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
echo '<h1 >Admin Dashboard</h1>';
echo '	<ul class="nav nav-tabs">';
echo '	<li class="active"><a data-toggle="tab" href="#mostRecent">Most Recent Issues</a></li>';
echo '<li><a data-toggle="tab" href="#menu2">Issues yet to be assigned</a></li>';
echo '	<li><a data-toggle="tab" href="#geninfo">General Information</a></li>';
echo '  </ul>';
echo '  <div class="tab-content">';
echo '		<div id="mostRecent" class="tab-pane fade in active">';
echo '          	<h3>Most Recent</h3>';
echo '                  <table id="Most Recent Issues Table" class="table table-hover">';
echo '                  	<thead>';
echo '                    		<tr>';
echo '                    			<th style width="15%">Park Name</th>';
echo '                    			<th style width="10%">Issue</th> ';
echo '                     			<th style width="40%">Issue Description</th>';
echo '                   			<th style width="10%">Date</th>';
echo '                				<th style width="40%">Delete Issue</th>';
echo '             			</tr>';
echo '             		</thead>';
echo '				<tbody>';
while($row = mysqli_fetch_array($getresults))
{
//echo "hi";
$incident_id=$row['incident_id'];
$location_id= $row['location_id'];
$incident_description=$row['incident_description'];
$incident_date=$row['incident_date'];
$categories_id=$row['categories_id'];
session_start();
echo '                <tr>';
$query = "select location_name from locations where location_id='$location_id'";
$getlocationname= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getlocationname))
{
//echo "hi";
$location_name= $row1['location_name'];}
echo '			 <td>' .$location_name. '</td>';
$query = "select categories_name from categories where categories_id='$categories_id'";
$getcategoryname= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getcategoryname))
{
//echo "hi";
$category_name= $row1['categories_name'];}$query = "select categories_name from categories where categories_id='$categories_id'";
$getcategoryname= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getcategoryname))
{
//echo "hi";
$category_name= $row1['categories_name'];}
echo '			 <td>' .$category_name. '</td>';			
echo '                   <td>' .$incident_description. '</td>';      
echo '                   <td>' .$incident_date.'</td>';?>
                   <td><a href="admindelete.php?id=<?php echo $incident_id; ?>" onclick="return  confirm('Do you want to delete Y/N')">Click here to delete issue </a></td>
<?php
echo '                 </tr>';
}
echo '             </tbody>';
echo ' 		</table>';
echo '		</div>';
$query = "select incident_id,location_id,categories_id, incident_date, incident_description from incidents where assigned_user_id IS NULL ";
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
//echo $user;
//$_SESSION['loggeduser'] = $user;
//$_SESSION['loggeduserid'] = $userid;
//$_SESSION['loggeduserrole'] = $userrole;
//}
echo ' <div id="menu2" class="tab-pane fade">';
echo ' 	<h3>Issues yet to be assigned</h3>';
echo ' 		<table id= "Issues to be assigned table" class="table table-hover">';
echo ' 			<thead>';
echo ' 				<tr>';
echo ' 					<th style width="15%">Park Name</th>';
echo ' 					<th style width="10%">Issue</th>';
echo ' 					<th style width="40%">Issue Description</th>';
echo '					<th style width="10%">Date</th>';
echo '					<th style width="40%">View Details/Delete Issue</th>';
echo '				</tr>';
echo '			</thead>';
echo '			<tbody>';
while($row = mysqli_fetch_array($getresults))
{
//echo "hi";
$incident_id=$row['incident_id'];
$location_id= $row['location_id'];
$incident_description=$row['incident_description'];
$incident_date=$row['incident_date'];
$categories_id=$row['categories_id'];
//session_start();
echo '                <tr>';
$query = "select location_name from locations where location_id='$location_id'";
$getlocationname= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getlocationname))
{
//echo "hi";
$location_name= $row1['location_name'];}

echo '				<tr>';
echo '					<td>' .$location_name. '</td>';
echo ' 					<td>' .$categories_id. '</td>';
echo '		                	<td>' .$incident_description. '</td>';
echo '          	        	<td>' .$incident_date.'</td>';
?>
<td><a href="admindelete.php?id=<?php echo $incident_id; ?>" onclick="return  confirm('Do you want to delete Y/N')">Click here to delete issue </a></td>
<?php
echo '				</tr>';
}
echo '			</tbody>';
echo '		</table>';
echo '		</div>';


$query10 = "select count(*) as totalusers from users";
$getusers= mysqli_query($con,$query10);
while($row1 = mysqli_fetch_array($getusers))
{
//echo "hi";
$getusers= $row1['totalusers'];
}
$query10 = "select count(*) as totalincidents from incidents";
$getincidents= mysqli_query($con,$query10);
while($row1 = mysqli_fetch_array($getincidents))
{
//echo "hi";
$totalincidents= $row1['totalincidents'];
}
$query10 = "select count(*) as totalclosed from incidents where status_id=4";
$getincidents= mysqli_query($con,$query10);
while($row1 = mysqli_fetch_array($getincidents))
{
//echo "hi";
$getclosedincidents= $row1['totalclosed'];
}
$query10 = "select count(*) as totalinprogress from incidents where status_id=3";
$getincidents= mysqli_query($con,$query10);
while($row1 = mysqli_fetch_array($getincidents))
{
//echo "hi";
$getinprogressincidents= $row1['totalinprogress'];
}
$query10 = "select count(*) as totalassigned from incidents where status_id=2";
$getopenincidents= mysqli_query($con,$query10);
while($row1 = mysqli_fetch_array($getopenincidents))
{
//echo "hi";
$getopenposts= $row1['totalassigned'];
}

echo ' <div id="geninfo" class="tab-pane fade">';
echo '        <h3>General Information</h3>';

echo '      <p> Total Number of Users:'.$getusers.' </p>';
echo '      <p> Total Number of posts:'.$totalincidents. '<p>';
echo '       <p> Total Number of Closed Posts: '.$getclosedincidents.'</p>';
echo ' <p> Total Number of In Progress Posts: '.$getinprogressincidents.'</p>';
echo ' <p> Total Number of Open Posts: '.$getopenposts.'</p>';
echo '        </div>';
echo '</div>';
echo '</div>';


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



