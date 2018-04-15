<!DOCTPYE html>
<html>
<head>
	<title>configuration</title>
</head>

<body>


<?php
	$host="localhost";
	$username="abaskara1";
	$pwd="abaskara1";
	$db_name="abaskara1";

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
