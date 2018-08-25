<?php
session_start();
//echo $_SESSION['loggeduser'];

if (isset($_SESSION['loggeduser']))
{
header("Location: /auth.php");
exit();
}
else
{
header("Location: /unregistereduserreportissue.php");
exit();
?>
