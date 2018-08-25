<?php
$con=mysqli_connect("localhost","root","toor","us_environmental");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM incidents");
echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['incident_id'] . "</td>";
echo "<td>" . $row['incident_description'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
