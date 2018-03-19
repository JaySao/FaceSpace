<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FaceSpace</title>
	<link rel="stylesheet" href="./styler.css">
</head>

<body>
<?php
include("config.php");
$icon=$_SESSION['Icon'];
$background=$_SESSION["Background"];
$username = $_SESSION['Username'];
?>
<div class="pagewrap" style="background-image: url('<?php echo $background;?>')">
	<div id="navbar">
		<div id="profilepic">
			<a href="edit_profile.html">Edit Profile</a>
			<a href='home.html'>LOGOUT</a>
			
			
		
		<?php
		
		print("<h1>Hello ". $username." </h1>");
		//print("<h4>Your icon is: </h4>");
		//print($_SESSION['Icon']);
		//print("<h4>Your background is: </h4>")
		//print($_SESSION['Background']);
		print ("<img src='".$icon."'>");
		$sql = "SELECT * FROM project3 WHERE Username !='$username'";
		$sqlMe = "SELECT * FROM project3 WHERE Username ='$username'"; 
 
	
		$result = mysql_query($sql);
		$resultMe = mysql_query($sqlMe);
		print("<h2>Users</h2>");
		if(mysql_num_rows($result)>0){
			$i=0;
			while($row = mysql_fetch_assoc($result)){
				$friends = $row["Username"];
				print("<div id='friends'><a href='friend_home.php?fname=$friends'>$friends</a><br/> </div>");
				$ficon =$row["Icon"];
				$fbackground=$row["Background"];
				//Testing purposes below
				
			}
		}
		

		if(mysql_num_rows($resultMe)>0){
			while($rowMe = mysql_fetch_assoc($resultMe)){
				$status = $rowMe['Status'];
				$wall1 = $rowMe['Wall1'];
				$wall2 = $rowMe['Wall2'];
				$wall3 = $rowMe['Wall3'];
				$wall4 = $rowMe['Wall4'];
				$wall5 = $rowMe['Wall5'];
				$wall6 = $rowMe['Wall6'];
				$wall7 = $rowMe['Wall7'];
				$wall8 = $rowMe['Wall8'];
				$wall9 = $rowMe['Wall9'];
				$wall10 = $rowMe['Wall10'];
			}
		}
		print("<h4>Your current status is: </h4>");
		print($status);
		print('<br>');
		print('<h4>Your wall posts are: </h4>');
		//TODO: Add if statement, if(null)=>Do not print
		print('<br>');
		print($wall1);
		print('<br>');
		print($wall2);
		print('<br>');
		print($wall3);
		print('<br>');
		print($wall4);
		print('<br>');
		print($wall5);
		print('<br>');
		print($wall6);
		print('<br>');
		print($wall7);
		print('<br>');
		print($wall8);
		print('<br>');
		print($wall9);
		print('<br>');
		print($wall10);
		?>
		<form action="change_status.php" method='POST'>		
				<input type="text" placeholder="How are you feeling?" name='Status'>
				<input type="submit" value="Change Status">
		</form>
		
		</div>
	</div>
</div>

</body>
</html>