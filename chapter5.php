<?php
	session_start();
	require_once("connection.php");
	$sql = "SELECT progress FROM account WHERE username = '{$_SESSION['login_user']}'";	
	if($result=mysqli_query($conn,$sql))
	{
		$rowcount = mysqli_num_rows($result);
	}
	$result = mysqli_query($conn,$sql);
	$row = $result->fetch_row();
	if ($row[0] < 40)
	{
		$sql = "UPDATE account SET progress=40 WHERE username = '{$_SESSION['login_user']}'";
	}
	$result = $conn->query($sql);
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
				height: 450px;
				border: 2px solid black;
				text-align: center;
				position: absolute;
				top: 20%;
				left: 32%;
				font-size: 250%;
				background-color: lightblue;
			}
			.options {
				border-radius: 25px;
				width: 36%;
				border: 1px solid black;
				position: relative;
				left: 4%;
				top: -8%;
				font-size: 80%;
				background-color: yellow;
				cursor: pointer;
				float: left;
				margin: 5%;
			}
			#choices {
				width: 10%;
				height: 10%;
				position: absolute;
				text-align: center;
				top: 80%;
				left: 88%;
			}

			.option {
				border-radius: 25px;
				width: 100%;
				border: 1px solid black;
				position: relative;
				font-size: 25px;
				background-color: yellow;
				cursor: pointer;
				color: black;
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
		function ch5lock () {
			var x = <?php echo json_encode($row[0]); ?>;
			if(x >= 41)
			{
				document.getElementById('button2').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button2').disabled = "true";
			}
			
			if(x >= 42)
			{
				document.getElementById('button3').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button3').disabled = "true";
			}
			
			if(x >= 43)
			{
				document.getElementById('button4').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button4').disabled = "true";
			}
			
			if(x >= 44)
			{
				document.getElementById('button5').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button5').disabled = "true";
			}
			
			if(x >= 45)
			{
				document.getElementById('button6').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button6').disabled = "true";
			}
			
			if(x >= 46)
			{
				document.getElementById('button7').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button7').disabled = "true";
			}
			
			if(x >= 47)
			{
				document.getElementById('button8').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button8').disabled = "true";
			}
		}
		</script>
	</head>

	<body onload = "ch5lock()">

		<div id="header">
			<span id="headline">Welcome to the Coding Classroom</span>
			<a href="#" class="player"><i class="fa fa-volume-up fa-3x"></i></a>
		</div>

		<div id="menu">
			<p>
				Chapter 5: Class
			</p>
			<a href="./ch 5-0.php">
			<button id="button1" class="options">
				5-0
			</button></a>
			<a href="./ch 5-1.php">
			<button id="button2" class="options">
				5-1
			</button></a>
			<br>
			<a href="./ch 5-2.php">
			<button id="button3" class="options">
				5-2
			</button></a>
			<a href="./ch 5-3.php">
			<button id="button4" class="options">
				5-3
			</button></a>
			<br>
			<a href="./ch 5-4.php">
			<button id="button5" class="options">
				5-4
			</button></a>
			<a href="./ch 5-5.php">
			<button id="button6" class="options">
				5-5
			</button></a>
			<br>
			<a href="./ch 5-6.php">
			<button id="button7" class="options">
				5-6
			</button></a>
			<a href="./ex5.php">
			<button id="button8" class="options">
				Ex5
			</button></a>
		</div>

		<div id="choices">
			<a href="./chapters.php">
			<button class="option">
				Back
			</button></a>
			<br>
			<a href="./usermenu.php">
			<button class="option">
				Menu
			</button></a>
		</div>
	</body>
</html>