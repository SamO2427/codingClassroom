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
	</head>

	<body>

		<div id="header">
			<span id="headline">Welcome to the Coding Classroom</span>
			<a href="#" class="player"><i class="fa fa-volume-up fa-3x"></i></a>
		</div>

		<div id="menu">
			<p>
				Chapter 2: Control Flow
			</p>
			<a href="./ch 2-0.php">
			<button class="options">
				2-0
			</button></a>
			<a href="./ch 2-1.php">
			<button class="options">
				2-1
			</button></a>
			<br>
			<a href="./ch 2-2.php">
			<button class="options">
				2-2
			</button></a>
			<a href="./ch 2-3.php">
			<button class="options">
				2-3
			</button></a>
			<br>
			<a href="./ch 2-4.php">
			<button class="options">
				2-4
			</button></a>
			<a href="./ch 2-5.php">
			<button class="options">
				2-5
			</button></a>
			<br>
			<a href="./ch 2-6.php">
			<button class="options">
				2-6
			</button></a>
			<a href="./ex2.php">
			<button class="options">
				Ex2
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