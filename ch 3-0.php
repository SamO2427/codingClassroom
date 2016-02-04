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
					font-size: 25px;
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
			<p>We may do the same things every day at different time</p>
			<p>Just like in coding, we may need to do addition at from time to time</p>
			<p>We always need to write the code a=a+1, b=b+2...</p>
			<p>To save time, we can use funtcion</p>
			<p>Also, we may need to store more than 1 value at a time, like storing value of 3 differents size of apples</p>
			<p>Other than using 3 variable, we can use array</p>
		</div>
		
		<a href="./ch 3-1.php"><button id="next">Next -></button></a>
		
		<div id="choices">
			<a href="./chapter3.php"><button class="option">Back</button></a>
			<br>
			<a href="./usermenu.php"><button class="option">Menu</button></a>
		</div>
	</body>
</html>