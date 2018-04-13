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
	$username=$_POST['username'];
	$_SESSION['username'] = $username;


	$sql = "SELECT * FROM project3 WHERE Username='$username'"; 
	
	$result = mysql_query($sql);

	if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_assoc($result)){
			$secq=$row["question"];
			$secanswer =$row["answer"];
			//Testing purposes below
		if($secq=='q1'){
			echo("What is your favorite color");
		}else if($secq=='q2'){
			echo("What is the university you attend");
		}


	}
	}else{
		echo(" Username not found");
	}

	


?>
<form id="checkanswer" action="confirm.php" method="post">
			<br/>Answer:<input type="text" name="answer"><br/>
			<button type="submit">Submit</button>
</form>

</body>
</html>