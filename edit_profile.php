<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit profile</title>
	<link rel="stylesheet" href="./styler.css">
</head>

<body>
<?php
	include("config.php");
	 $answer1 = $_POST['question-1-answers'];
	 $answer2 = $_POST['question-2-answers'];
	 if ($answer1 == "A") { $icon="./bird.png"; }
		else if ($answer1 == "B") { $icon="./snail.png"; }
		else if ($answer1 == "C") { $icon="./rabbit.png"; }
		else if ($answer1 == "D") { $icon="./fish.png"; }
		else if ($answer1 == "E") { $icon="./lobster.png"; }
		else { $icon="./turtle.png"; }
	if ($answer2 == "A") { $background="./black.jpg"; }
		else if ($answer2 == "B") { $background="./blue.jpg"; }
		else if ($answer2 == "C") { $background="./slate.jpg"; }
		else if ($answer2 == "D") { $background="./purple.jpg"; }
		else{ $background="./wood.jpg"; }
	print("<br/>");
	$username = $_SESSION['Username'];
	print("Hello ".$username);
	print("<br/>");
	$sql = "UPDATE project3 SET Icon='$icon',Background='$background' WHERE Username='$username'";
	if( mysql_query($sql)){
		print("<br/>");
		print("Updated");
		print("<br/><a href='home.html'>Please Login for changes to take effect</a><br/>");
	}else{
		print("Error");
		print("<br/><a href='user_home.php'>Return Home</a><br/>");
	}
?>
</body>
</html>