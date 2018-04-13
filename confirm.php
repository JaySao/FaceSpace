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
	$answer=$_POST['answer'];

	$username = $_SESSION['username'];



	$sql = "SELECT * FROM project3 WHERE Username='$username'"; 
	
	$result = mysql_query($sql);

	if(mysql_num_rows($result)>0){
		while($row = mysql_fetch_assoc($result)){
			$secq=$row["question"];
			$secanswer =$row["answer"];
			$password = $row["Password"];
			//Testing purposes below
		if($answer==$secanswer){
			echo("Password is:".$password);
		}else{
			echo("Incorrect answer!");
		}

	}
	}else{
		echo("User not found");
	}

	


?>
</body>
</html>