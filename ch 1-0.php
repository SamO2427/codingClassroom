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
					font-size: 35px;
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

		<!--background music and voice-->
		<audio id="background_audio" autoplay="autoplay" loop="loop" >
      		<source src="Design/bgm/village10.ogg" type="audio/ogg" />
      		<source src="Design/bgm/village10.mp3" type="audio/mpeg" />
    	</audio>
	</head>

	<body>	
		<div id="notes">
			<p>Have you ever played any computer games or mobile game?</p>
			<p>Do you want to try to make your own game in the future?</p>
			<p>If yes, then learn coding NOW!!</p>
		</div>
		
		<a href="./ch 1-1.php"><button id="next">Next -></button></a>
		
		<div id="choices">
			<a href="./chapter1.php"><button class="option">Back</button></a>
			<br>
			<a href="./usermenu.php"><button class="option">Menu</button></a>
		</div>
	</body>
</html>