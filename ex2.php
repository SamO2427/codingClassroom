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
	if ($row[0] < 17)
	{
		$sql = "UPDATE account SET progress=17 WHERE username = '{$_SESSION['login_user']}'";
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
				width: 20%;
				height: 390px;
				border: 2px solid black;
				text-align: center;
				position:absolute;
				top:20%;
				left:40%;
				font-size: 250%;
				background-color: lightblue;
			}
			.option {
				border-radius: 25px;
				width: 70%;
				border: 1px solid black;
				position:relative;
				top: -8%;
				font-size: 80%;
				cursor: pointer;
				background-color: yellow;
				color: black;
				margin: 8%;
			}
		</style>
    	<title>Coding Classroom for Kids</title>

		<!--background music -->
		<audio id="background_audio" autoplay="autoplay" loop="loop" >
      		<source src="Design/bgm/village10.ogg" type="audio/ogg" />
      		<source src="Design/bgm/village10.mp3" type="audio/mpeg" />
    	</audio>
		
		<script>
		function ex2lock () {
			var x = <?php echo json_encode($row[0]); ?>;
			if(x >= 18)
			{
				document.getElementById('button2').removeAttribute('disabled');
			}
			else
			{
				document.getElementById('button2').disabled = "true";
			}
		}
		</script>
	</head>

	<body onload="ex2lock()">
	
		<div id="header">
			<span id="headline">Welcome to the Coding Classroom</span>
			<a href="#" class="player"><i class="fa fa-volume-up fa-3x"></i></a>
		</div>
		
		<div id="menu">
			<p>Menu</p>
			<a href="./ex2.1.php"><button id="button1" class="option">Ex2.1</button></a>
			<br>
			<a href="./ex2.2.php"><button id="button2" class="option">Ex2.2</button></a>
			<br>
			<a href="./chapter2.php"><button id="button3" class="option">Back</button></a>
		</div>
		

	</body>
</html>