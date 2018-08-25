<?php
$con=mysqli_connect("localhost","root","toor","sirishatest");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT parkname,address FROM postissue");
$park = $_POST['park'];
echo $park;
//echo $result;
//echo "<table border='1'>
//<tr>
//<th>parkname</th>
//<th>address</th>
//</tr>";
while($row = mysqli_fetch_array($result))
{
echo $row['parkname'];
echo $row['address'];
//echo "<tr>";
//echo "<td>" . $row['parkname'] . "</td>";
//echo "<td>" . $row['address'] . "</td>";
//echo "</tr>";
}
//echo "</table>";
mysqli_close($con);
?>
