<?php
Session_start();
?>
<!DOCTPYE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
<?php
include("config.php");
$username = $_SESSION['Username'];
print($username);
$query= "UPDATE project3 SET LoggedIn='0' WHERE Username='$username'";
$logged=mysql_query($query);

if($logged){
	print("logged");
}else{
	print("not logged");
}

$sql = "SELECT * FROM project3 WHERE Username !='$username'";
$result=mysql_query($sql);

while($rowMe = mysql_fetch_assoc($result)){
		$loggedin = $rowMe['LoggedIn'];
		$test = $rowMe['Wall1'];
}
print($loggedin);
session_destroy();
header("Location:home.html");
?>
</body>
</html>