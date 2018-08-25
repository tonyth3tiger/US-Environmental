<?php
$con=mysqli_connect("localhost","root","toor","sirishatest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//$result = mysqli_query($con,"SELECT parkname,address FROM postissue");
$park = $_POST['park'];
$desc = $_POST['comment'];
$issue = $_POST['issue'];
$dir="/images/";
session_start();
$userid=$_SESSION['loggeduserid'];
$image=basename($_FILES['photo']['name']);
$filepath =$_SERVER['DOCUMENT_ROOT'].$dir.$image;
$databasefilepath =$dir.$image;
$temp_name = $_FILES['photo']['tmp_name'];
$imageFileType = strtolower(pathinfo($databasefilepath,PATHINFO_EXTENSION));
//$extensions_allowed = array("jpg","jpeg","png");
//if(in_array($imageFileType,$extensions_allowed) ){
move_uploaded_file($temp_name, $filepath); 

$getcategoryid = mysqli_query($con,"select categories_id from categories where categories_name = '$issue'");
while($row = mysqli_fetch_array($getcategoryid))
{
$categoryid= $row['categories_id'];
}
mysqli_query($con,"insert into locations(location_name)VALUES('$park')");
$getlocationid = mysqli_query($con,"select location_id from locations where location_name = '$park'");

while($row = mysqli_fetch_array($getlocationid))
{
echo $row['location_id'];
$locationid= $row['location_id'];
}

//$getcategoryid = mysqli_query($con,"select categories_id from categories where categories_name = '$issue'");
//echo $getcategoryid;
$query = "insert into incidents(incident_date,incident_description,incident_photo_full_link,location_id,categories_id,reporting_user_id,status_id) values(NOW(),'$desc','$databasefilepath','$locationid','$categoryid','$userid','1')";
$result= mysqli_query($con,$query);
if($result){
echo '<script language="javascript">';
echo 'alert("Posted Successfully")';
echo '</script>';
}
else
{
echo '<script language="javascript">';
echo 'alert("Issue has not been Posted. Please enter valid data")';
echo '</script>';
}
//echo 'alert("Acceptable file types are .jpg,.jpeg,.png.Please change the file type and save again")';
// }
//else
//{
//echo '<script language="javascript">';
//echo 'alert("Acceptable file types are .jpg,.jpeg,.png.Please change the file type and save again")';
//echo '</script>';
//}
//echo '<img src="'.$filepath.'"/>';
//echo '<img src="'.$filepath.'" alt="Cover">;
//echo '<img src=" ' .$dir.$image.' "/>';

if ($_SESSION['loggeduserrole'] == 2)
{
echo '<script language="javascript">';
echo 'window.location.replace("../registereduserhomepage.php")';
echo '</script>';

//header("Location: /registereduserhomepage.html");
}
elseif ($_SESSION['loggeduserrole'] == 3){
echo '<script language="javascript">';
echo 'window.location.replace("../adminhomepage.html")';
echo '</script>';


//header("Location: /adminhomepage.html");

}
elseif ($_SESSION['loggeduserrole'] == 4){
echo '<script language="javascript">';
echo 'window.location.replace("../casemanagerhomepage.html")';
echo '</script>';



//header("Location: /casemanagerhomepage.html");

}
else
{
header("Location: /homepage1.html");
}





//echo '<script language="javascript">';
//echo 'window.location.replace("../registereduserhomepage.php")';
//echo '</script>';
//header("Location:/registereduserreportissue.php");
//exit();
mysqli_close($con);
//header("Location:/Report_Issue.html");
//exit;
?>

