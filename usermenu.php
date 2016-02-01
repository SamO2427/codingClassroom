<!--<?php
    echo "Hello World!";
?>  -->

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
				left: 8%;
				top: -8%;
				font-size: 80%;
				cursor: pointer;
				background-color: yellow;
				color: black;
				float: left;
				margin: 8%;
			}
		</style>
    	<title>Coding Classroom for Kids</title>

		<!--background music -->
		<audio id="background_audio" autoplay="autoplay" loop="loop" >
      		<source src="Design/bgm/village10.ogg" type="audio/ogg" />
      		<source src="Design/bgm/village10.mp3" type="audio/mpeg" />
    	</audio>
	</head>

	<body>
	
		<div id="header">
			<span id="headline">Welcome to the Coding Classroom</span>
			<a href="#" class="player"><i class="fa fa-volume-up fa-3x"></i></a>
		</div>
		
		<div id="menu">
			<p>Menu</p>
			<a href="./chapters.php"><button class="option">Start</button></a>
			<br>
			<button class="option">Settings</button>
			<br>
			<a href="./index.php"><button class="option">Logout</button></a>
		</div>
		

	</body>
</html>