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
	
	<header>
		<h1>My FaceSpace</h1>
	</header>


	<div id="navbar">
		<div id="profilepic">
			<a href="edit_profile.html">Edit Profile</a>
			<a href='home.html'>LOGOUT</a>
			<form action="change_status.php">		
				<input type="text" placeholder="How are you feeling?">
				<input type="button" value="Change Status">
			</form>
		
		<?php
		
		print("<h1>Hello". $username." </h1>");
		//print("<h4>Your icon is: </h4>");
		//print($_SESSION['Icon']);
		//print("<h4>Your background is: </h4>")
		//print($_SESSION['Background']);
		print ("<img src='".$icon."'>");
		$sql = "SELECT * FROM project3 WHERE Username !='$username'"; 
	
		$result = mysql_query($sql);
		
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
		?>
		
		</div>
	</div>
</div>

</body>
</html>