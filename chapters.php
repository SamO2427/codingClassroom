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
	</head>

	<body>
	
		<div id="header">
			<span id="headline">Welcome to the Coding Classroom</span>
			<a href="#" class="player"><i class="fa fa-volume-up fa-3x"></i></a>
		</div>
		
		<div id="menu">
			<p>Chapters</p>
			<a href="./chapter1.php"><button class="option">1</button></a>
			<a href="./chapter2.php"><button class="option">2</button></a>
			<br>
			<a href="./chapter3.php"><button class="option">3</button></a>
			<a href="./chapter4.php"><button class="option">4</button></a>
			<br>
			<a href="./chapter5.php"><button class="option">5</button></a>
			<a href="./usermenu.php"><button class="option">Return</button></a>
		</div>
		

	</body>
</html>