<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="./styler.css">
</head>

<body>
<div id="navbar">
<?php
	include("config.php");
	print("<a href='home.html'>LOGOUT</a>");
	print("<h1>Hello ".$_SESSION['Username']."</h1>");
	//print("<h4>Your icon is: </h4>");
	//print($_SESSION['Icon']);
	//print("<h4>Your background is: </h4>")
	//print($_SESSION['Background']);
?>
</div>
<a href="edit_profile.html">Edit Profile</a>

<form action="change_status.php">
	<input type="text" placeholder="How are you feeling?">
	<input type="button" value="Change Status">
</form>


</body>
</html>