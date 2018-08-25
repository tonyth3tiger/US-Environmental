<?php
$con=mysqli_connect("localhost","root","toor","sirishatest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
session_start();
$selectcategory = $_POST['selectcategory'];
$searchbox = $_POST['searchbox'];
//$query = "select categories_id,status_id,location_id,incident_description from incidents i,locations l where l.location_id=I.location_id and (l.location_name like '%$searchbox% or location_adddress like '%$searchbox%')";
//echo $selectcategory;
//echo $searchbox;
$query = "select i.categories_id,i.status_id,i.location_id,i.incident_description from incidents i,locations l where l.location_id=i.location_id and (l.location_name like '%$searchbox%' or l.location_address like '%$searchbox%')";
$getsearchresults= mysqli_query($con,$query);
?>
<h1 >Search Results</h1>


<div class="container">
<!--<div class="row">-->

<?php
while($row = mysqli_fetch_array($getsearchresults))
{
$location_id= $row['location_id'];
$categories_id= $row['categories_id'];
$status_id= $row['status_id'];
$incident_description=$row['incident_description'];


echo '<div class="row">';
echo '<div class="col-md-1.5">';
echo '<img class="park"  src="/images/Gilbert-Open-Space_2-1024x768.jpg" alt = "park image"></div>';
echo '<div class="col-md-7">';
$query = "select location_name from locations where location_id='$location_id'";
$getlocationname= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getlocationname))
{
$location_name= $row1['location_name'];}
echo '<u><b><a href="#" >Park Name:'.$location_name.' </b></u></a> <p> </p>';
echo '<p align="justify">'.$incident_description.'</p>';
$query = "select status_text from status where status_id='$status_id'";
$getstatus= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getstatus))
{
$status_text= $row1['status_text'];}
echo '<strong>Status of the Park: </strong>'.$status_text.' &nbsp;&nbsp;&nbsp;&nbsp';
$status_text="No status yet";
$query = "select categories_name from categories where categories_id='$categories_id'";
$getcategory= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getcategory))
{
$categories_name= $row1['categories_name'];}

echo '<strong>Category: </strong>'. $categories_name.' &nbsp;&nbsp;&nbsp;&nbsp';
$query = "select location_address from locations where location_id='$location_id'";
$getlocationaddress= mysqli_query($con,$query);
while($row1 = mysqli_fetch_array($getlocationaddress))
{
$location_address= $row1['location_address'];}
echo '<strong>Location: </strong>' . $location_address.'';
$location_address="No location found";

echo '</div>';

echo '</div>';
}
echo '</div>';

?>
