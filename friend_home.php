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
				$friendstat = $row1["Status"];
				$fwall1 = $row1['Wall1'];
				$fwall2 = $row1['Wall2'];
				$fwall3 = $row1['Wall3'];
				$fwall4 = $row1['Wall4'];
				$fwall5 = $row1['Wall5'];
				$fwall6 = $row1['Wall6'];
				$fwall7 = $row1['Wall7'];
				$fwall8 = $row1['Wall8'];
				$fwall9 = $row1['Wall9'];
				$fwall10 = $row1['Wall10'];
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
		print ("<img id='icon' src='".$ficon."'>");
		$sql = "SELECT * FROM project3 WHERE Username !='$friendname'"; 
	
		$result = mysql_query($sql);
		
print("<div class='row'>");
	print("<div class='column left'>");
		print("<h4>Their current status is: </h4>");
		print("<h2>$friendstat</h2>");
		print('<br>');
		print("<h2>FRIENDS</h2>");
		
		if(mysql_num_rows($result)>0){
			while($row = mysql_fetch_assoc($result)){
				$friends = $row["Username"];
				if($friends == $originaluser){
					
				}else{
				print("<div id='friends'><a href='friend_home.php?fname=$friends'>$friends</a><br/> </div>");
				}
			}
		}
				

		
	
	
		
	print("</div>");
	
	print("<div class='column right'>");
		print("<form action='change_wall.php' method='POST'>		
				<input type='text' placeholder='Write on Wall' name='wall'>
				<input type='submit' value='Write!'>
		</form>");	
		print('<h4>Wall posts are: </h4>');
		//TODO: Add if statement, if(null)=>Do not print
		print('<br>');
		if($fwall1 !="null"){
		print("<h3>$fwall1</h3>");
		}
		print('<br>');
		if($fwall2 !="null"){
		print("<h3>$fwall2</h3>");
		}
		print('<br>');
		if($fwall3 !="null"){
		print("<h3>$fwall3</h3>");
		}
		print('<br>');
		if($fwall4 !="null"){
		print("<h3>$fwall4</h3>");
		}
		print('<br>');
		if($fwall5 !="null"){
		print("<h3>$fwall5</h3>");
		}
		print('<br>');
		if($fwall6 !="null"){
		print("<h3>$fwall6</h3>");
		}
		print('<br>');
		if($fwall7 !="null"){
		print("<h3>$fwall7</h3>");
		}
		print('<br>');
		if($fwall8 !="null"){
		print("<h3>$fwall8</h3>");
		}
		print('<br>');
		if($fwall9 !="null"){
		print("<h3>$fwall9</h3>");
		}
		print('<br>');
		if($fwall10 !="null"){
		print("<h3>$fwall10</h3>");
		}
	print("</div>");
print("</div>");	
		?>
		
		</div>
	</div>
</div>

</body>
</html>