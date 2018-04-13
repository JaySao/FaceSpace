<html>
<head>
	<title>Status</title>
	<link rel="stylesheet" href="./styler.css">
</head>

<body>
<?php
	session_start();
	include("config.php");
	print("Working");
	$username = $_SESSION['Username'];
	$status = $_POST['Status'];
	print($username);
	$sql = "UPDATE project3 SET Status='$status' WHERE Username='$username'";
	if( mysql_query($sql)){
		print("<br/>");
		print("Updated");
		print("You updated your status to: ");
		print($status);
		header('Location: user_home.php');
	}else{
		print("Error");
		print("<br/><a href='user_home.php'>Return Home</a><br/>");
	}
	header();
?>
</body>
</html>