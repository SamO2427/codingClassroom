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
				background-image: url("125.png"
				);
				background-repeat: no-repeat;
				background-size: cover;
				}

				#notes {
					border-radius: 25px;
					padding-left: 3%;
					padding-right: 3%;
					width: 30%;
					height: 92%;
					border: 2px solid black;
					text-align: left;
					position: absolute;
					top: 3%;
					left: 15%;
					font-size: 30px;
					background-color: lightblue;
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
					color: black;
					cursor: pointer;
					float: left;
					margin: 5%;
				}
				#next {
					border-radius: 25px;
					width: 10%;
					top: 200px;
					left: 83%;
					height: 50px;
					border: 1px solid black;
					position: absolute;
					font-size: 25px;
					background-color: white;
					color: black;
					float: left;
					cursor: pointer;
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
		<div id="notes">
			<p>Other than int, char, bool..., we can create our own type</p>
			<p>The types that are creaed by us are called class</p>
			<p>When making a good game on computer, we always need to make our own type, and usually more than 1</p>
			<p>We are going to show you how to create a class</p>
		</div>
		
		<a href="./ch 5-1.php"><button id="next">Next -></button></a>
		
		<div id="choices">
			<a href="./chapter5.php"><button class="option">Back</button></a>
			<br>
			<a href="./usermenu.php"><button class="option">Menu</button></a>
		</div>
	</body>
</html>