<?php
//provide your hostname, username and dbname
$host="127.0.0.1"; 
$username="sqlro";  
$password="orlqs";
$db_name="us_environmental"; 
//$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");
$con=mysql_connect("$host", "$username", "$password");
mysql_select_db("$db_name");
$book_name = $_POST['incidents'];
$sql = "select * from incidents ";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
echo "<p>".$row['incidents']."</p>";
}
?>

