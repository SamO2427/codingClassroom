<?php
	session_start();
	require_once("connection.php");
	$sql = "SELECT progress FROM account WHERE username = '{$_SESSION['login_user']}'";	
	if($result=mysqli_query($conn,$sql))
	{
		$rowcount = mysqli_num_rows($result);
	}
	$result=mysqli_query($conn,$sql);
	$row = $result->fetch_row();
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	
		<style>
			body {
				background-image: url("125.png");
				background-repeat: no-repeat;
				background-size: cover;
			}
			a {
				text-decoration: none;
			}
			#header {
				text-align: center;
				font-size: 55px;
			}
			#menu {
				border-radius: 25px;
				width: 36%;
				height: 390px;
				border: 2px solid black;
				text-align: center;
				position:absolute;
				top:20%;
				left:32%;
				font-size: 250%;
				background-color: lightblue;
			}
			.option {
				border-radius: 25px;
				width: 36%;
				border: 1px solid black;
				position:relative;
				left: 4%;
				top: -8%;
				font-size: 80%;
				background-color: yellow;
				cursor: pointer;
				float: left;
				margin: 5%;
			}
		</style>
    	<title>Coding Classroom for Kids</title>

		<!--background music -->
		<audio id="background_audio" autoplay="autoplay" loop="loop" >
      		<source src="Design/bgm/village10.ogg" type="audio/ogg" />
      		<source src="Design/bgm/village10.mp3" type="audio/mpeg" />
    	</audio>
		
		<script>
		function bigchlock(){
			var x = <?php echo json_encode($row[0]);?>;
			if(x >= 10)
			{
				document.getElementById('button2').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button2').disabled = "true";
			}
			
			if(x >= 20)
			{
				document.getElementById('button3').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button3').disabled = "true";
			}
			
			if(x >= 30)
			{
				document.getElementById('button4').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button4').disabled = "true";
			}
			
			if(x >= 40)
			{
				document.getElementById('button5').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button5').disabled = "true";
			}
			
		}
		</script>
	</head>

	<body onload="bigchlock()">
	
		<div id="header">
			<span id="headline">Welcome to the Coding Classroom</span>
			<a href="#" class="player"><i class="fa fa-volume-up fa-3x"></i></a>
		</div>
		
		<div id="menu">
			<p>Chapters</p>
			<a href="./chapter1.php"><button id="button1" class="option">1</button></a>
			<a href="./chapter2.php"><button id="button2" class="option">2</button></a>
			<br>
			<a href="./chapter3.php"><button id="button3" class="option">3</button></a>
			<a href="./chapter4.php"><button id="button4" class="option">4</button></a>
			<br>
			<a href="./chapter5.php"><button id="button5" class="option">5</button></a>
			<a href="./usermenu.php"><button id="button6" class="option">Return</button></a>
		</div>
		

	</body>
</html>