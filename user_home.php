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
	print("<h1>Hello $_SESSION['Username'] </h1>");
?>
</div>


</body>
</html>