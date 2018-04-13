<!DOCTPYE html>
<html>
<head>
	<title>configuration</title>
</head>

<body>


<?php
	$host="localhost";
	$username="jsao1";
	$pwd="jsao1";
	$db_name="jsao1";

	$conn=mysql_connect("$host","$username","$pwd");

	if(!$conn){

		die("Cannot connect to server");

	}else{

		mysql_select_db("$db_name");
		//echo "Connected to FaceSpace";
		print ("<br/>");
		}
?>

</body>
</html>
