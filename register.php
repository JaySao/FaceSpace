<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register OK?</title>
	<link rel="stylesheet" href="./styler.css">
</head>

<body>
<?php
	include("config.php");
	 $regusername = $_POST['username'];
	 $regpassword = $_POST['password'];
	 $repassword = $_POST['repassword'];
	 $answer1 = $_POST['question-1-answers'];
	 $answer2 = $_POST['question-2-answers'];
	 $secq = $_POST['secq'];
	 $secanswer = $_POST['answer'];
	 
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
	 
	 if($regpassword!=$repassword){
		echo "Passwords Do Not Match";
		print("<br/><a href='register.html'>Return to the Register</a><br/>");
		die();
	}

	print("<br/>");
	$sql = "INSERT INTO project3 (Username, Password, Icon,Background,Status, Wall1,Wall2,Wall3,Wall4, Wall5,Wall6,Wall7,Wall8,Wall9,Wall10,question,answer) VALUES('$regusername','$regpassword','$icon','$background','null','null','null','null','null','null','null','null','null','null','null','$secq','$secanswer')";
	$sql2 = "INSERT INTO wallposts (Username,Wall1,Wall2,Wall3,Wall4, Wall5,Wall6,Wall7,Wall8,Wall9,Wall10) VALUES('$regusername','null','null','null','null','null','null','null','null','null','null')";
	if( mysql_query($sql) && mysql_query($sql2)){
		print("<br/>");
		print("WRITTEN");
		print("<br/><a href='home.html'>RETURN TO LOGIN</a><br/>");
	}else{
		print("NOT WRITTEN Username Taken");
		print("<br/><a href='register.html'>RETURN TO REGISTER</a><br/>");
	}
	
	//Testing below

		
?>
</body>
</html>