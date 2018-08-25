<?php
session_start();
if ($_SESSION['loggeduserrole'] == 2)
{
header("Location: /registereduserhomepage.html");
}
elseif ($_SESSION['loggeduserrole'] == 3){
header("Location: /adminhomepage.html");

}
elseif ($_SESSION['loggeduserrole'] == 4){
header("Location: /casemanagerhomepage.html");

}
else
{
header("Location: /homepage1.html");
}

//echo $_SESSION['loggeduser'];

//if (!isset($_SESSION['loggeduser']))
//{
//header("Location: /homepage1.html");
//exit();
//}
?>

