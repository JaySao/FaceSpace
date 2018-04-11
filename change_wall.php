<html>
<head>
	<title>Wall</title>
	<link rel="stylesheet" href="./styler.css">
</head>

<body>
<?php
	session_start();
	include("config.php");
	print("Working");
	$fname = $_SESSION['fname'];
	$wall = $_POST['wall'];
	
	$sql = "SELECT * FROM project3 WHERE Username='$fname'"; 
	
	
	$result = mysql_query($sql);
	
	if(mysql_num_rows($result)>0){
		
			while($row = mysql_fetch_assoc($result)){
				$wall1 =$row["Wall1"];
				$wall2 =$row["Wall2"];
				$wall3 =$row["Wall3"];
				$wall4 =$row["Wall4"];
				$wall5 =$row["Wall5"];
				$wall6 =$row["Wall6"];
				$wall7 =$row["Wall7"];
				$wall8 =$row["Wall8"];
				$wall9 =$row["Wall9"];
				$wall10 =$row["Wall10"];
				//Testing purposes below
				
			}
	}
	print ($wall1);
	print($wall5);
	if($wall1 =="null"){
		$sql2 = "UPDATE project3 SET Wall1='$wall' WHERE Username='$fname'";
	}else if ($wall2 =="null"){
		$sql2 = "UPDATE project3 SET Wall2='$wall' WHERE Username='$fname'";
	}else if ($wall3 =="null"){	
		$sql2 = "UPDATE project3 SET Wall3='$wall' WHERE Username='$fname'";
	}else if ($wall4 =="null"){
		$sql2 = "UPDATE project3 SET Wall4='$wall' WHERE Username='$fname'";
	}else if ($wall5 =="null"){
		$sql2 = "UPDATE project3 SET Wall5='$wall' WHERE Username='$fname'";	
	}else if ($wall6 =="null"){
		$sql2 = "UPDATE project3 SET Wall6='$wall' WHERE Username='$fname'";
	}else if ($wall7 =="null"){
		$sql2 = "UPDATE project3 SET Wall7='$wall' WHERE Username='$fname'";
	}else if ($wall8 =="null"){
		$sql2 = "UPDATE project3 SET Wall8='$wall' WHERE Username='$fname'";
	}else if ($wall9 =="null"){
		$sql2 = "UPDATE project3 SET Wall9='$wall' WHERE Username='$fname'";
	}else {
		$sql2 = "UPDATE project3 SET Wall10='$wall' WHERE Username='$fname'";
	}
	
	if( mysql_query($sql2)){
		header("Location: friend_home.php?fname=$fname");
	}else{
		print("Error");
		print("<br/><a href='user_home.php'>Return Home</a><br/>");
	}
	header();
	
?>
</body>
</html>