
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
$logged=$_SESSION['LoggedIn'];
?>
<div class="pagewrap" style="background-image: url('<?php echo $background;?>')">
	<div id="navbar">
		<div id="profilepic">
			<a href="edit_profile.html">Edit Profile</a>
			<a href='logout.php'>LOGOUT</a>
			
		
		<?php
		print($logged);
		print("<h1>Hello ". $username." </h1>");
		//print("<h4>Your icon is: </h4>");
		//print($_SESSION['Icon']);
		//print("<h4>Your background is: </h4>")
		//print($_SESSION['Background']);
		print ("<img id='icon' src='".$icon."'>");
		$sql = "SELECT * FROM project3 WHERE Username !='$username'";
		$sqlMe = "SELECT * FROM project3 WHERE Username ='$username'"; 
 
	
		$result = mysql_query($sql);
		$resultMe = mysql_query($sqlMe);
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

		
print("<div class='row'>");
	print("<div class='column left'>");
		print("<form action='change_status.php' method='POST'>		
				<input type='text' placeholder='How are you feeling?' name='Status'>
				<input type='submit' value='Change Status'>
		</form>");
		print("<h4>Your current status is: </h4>");
		print("<h2>$status</h2>");
		print('<br>');
		print("<h2>FRIENDS</h2>");
		if(mysql_num_rows($result)>0){
			$i=0;
			print('<div id="frdiv">');
			while($row = mysql_fetch_assoc($result)){
				$friends = $row["Username"];
				$friendLogged = $row["LoggedIn"];
				print("<div id='friends'><a href='friend_home.php?fname=$friends'>$friends</a>");
					if($friendLogged==0){
						print("<img style='height:20px; width:20px;' id='logicon' src='./offline.png'><br/> </div>");
					}else{
						print("<img style='height:20px; width:20px;' id='logicon' src='./online.png'><br/> </div>");
					}
				$ficon =$row["Icon"];
				$fbackground=$row["Background"];
				//Testing purposes below
				
			}
			print('</div>');
		}
	
	
		
	print("</div>");
	
	print("<div class='column right'>");	
		print('<h4>Your wall posts are: </h4>');
		//TODO: Add if statement, if(null)=>Do not print
		print('<br>');
		if($wall1 !="null"){
		print("<h3>$wall1</h3>");
		}
		print('<br>');
		if($wall2 !="null"){
		print("<h3>$wall2</h3>");
		}
		print('<br>');
		if($wall3 !="null"){
		print("<h3>$wall3</h3>");
		}
		print('<br>');
		if($wall4 !="null"){
		print("<h3>$wall4</h3>");
		}
		print('<br>');
		if($wall5 !="null"){
		print("<h3>$wall5</h3>");
		}
		print('<br>');
		if($wall6 !="null"){
		print("<h3>$wall6</h3>");
		}
		print('<br>');
		if($wall7 !="null"){
		print("<h3>$wall7</h3>");
		}
		print('<br>');
		if($wall8 !="null"){
		print("<h3>$wall8</h3>");
		}
		print('<br>');
		if($wall9 !="null"){
		print("<h3>$wall9</h3>");
		}
		print('<br>');
		if($wall10 !="null"){
		print("<h3>$wall10</h3>");
		}
	print("</div>");
print("</div>");	
		?>
		
		
		</div>
	</div>
</div>

</body>

</html>