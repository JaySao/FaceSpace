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
$_SESSION['fname'] = $_GET['fname'];
$friendname=$_SESSION['fname'];
$originaluser = $_SESSION['Username'];
$sql1 = "SELECT * FROM project3 WHERE Username ='$friendname'"; 
	
		$result1 = mysql_query($sql1);
		if(mysql_num_rows($result1)>0){
			while($row1 = mysql_fetch_assoc($result1)){
				$ficon = $row1["Icon"];
				$fbackground =$row1["Background"];
			}
		}

?>
<div class="pagewrap" style="background-image: url('<?php echo $fbackground;?>')">
	<div id="navbar">
		<div id="profilepic">
			<a href='home.html'>LOGOUT</a>
			<a href='user_home.php'>HOME</a>
		<?php
		
		print("<h1>". $friendname." </h1>");
		//print("<h4>Your icon is: </h4>");
		//print($_SESSION['Icon']);
		//print("<h4>Your background is: </h4>")
		//print($_SESSION['Background']);
		print ("<img src='".$ficon."'>");
		$sql = "SELECT * FROM project3 WHERE Username !='$friendname'"; 
	
		$result = mysql_query($sql);
		
		print("<h2>Users</h2>");
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_assoc($result)){
				$friends = $row["Username"];
				if($friends == $originaluser){
					
				}else{
				print("<div id='friends'><a href='friend_home.php?fname=$friends'>$friends</a><br/> </div>");
				}
			}
		}
		?>
		
		</div>
	</div>
</div>

</body>
</html>