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

			#notes {
				border-radius: 25px;
				padding-left: 3%;
				padding-right: 3%;
				width: 30%;
				height: 580px;
				border: 2px solid black;
				text-align: left;
				position: absolute;
				top: 3%;
				left: 15%;
				font-size: 20px;
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
			#question {
				border-radius: 25px;
				padding-left: 3%;
				padding-right: 3%;
				width: 25%;
				height: 430px;
				border: 2px solid black;
				text-align: left;
				position: absolute;
				top: 15%;
				left: 55%;
				font-size: 30px;
				background-color: lightgreen;
			}

			#btn1 {
				border-radius: 25px;
				width: 25%;
				border: 3px solid black;
				position: relative;
				font-size: 25px;
				background-color: #FF11FF;
				float: left;
				cursor: pointer;
				margin: 4%
			}

			#btn2 {
				border-radius: 25px;
				width: 25%;
				border: 3px solid black;
				position: relative;
				font-size: 25px;
				background-color: #FFFF55;
				float: left;
				cursor: pointer;
				margin: 4%
			}

			#btn3 {
				border-radius: 25px;
				width: 25%;
				border: 3px solid black;
				position: relative;
				font-size: 25px;
				background-color: #11FFFF;
				float: left;
				cursor: pointer;
				margin: 4%
			}

			#dbox {
				display: none;
				position: fixed;
				top: 0px;
				left: 0px;
				width: 100%;
				z-index: 10;
			}
			#dialog {
				display: none;
				border-radius: 16px;
				background-color: #00FF00;
				width: 550px;
				position: fixed;
				z-index: 10;
			}

			#dbody {
				text-align: center;
				font-size: 30px;
				padding: 20px;
			}

			#dfooter {
				text-align: right;
				padding: 10px;
			}

			#next {
				display: none;
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
		<script>
			function CustomAlert1() {
				this.render = function(words) {
					var winW = window.innerWidth;
					var winH = window.innerHeight;
					var dialog = document.getElementById('dialog');
					dialog.style.left = (winW / 2) - (550 * .5) + "px";
					dialog.style.top = (winH * 0.2) + "px";
					dialog.style.display = "block";
					dialog.style.background = "#00FF00";
					var dbody = document.getElementById('dbody');
					dbody.style.height = (winH / 4) + "px";
					var dbox = document.getElementById('dbox');
					dbox.style.height = winH + "px";
					dbox.style.display = "block";
					document.getElementById('dbody').innerHTML = words;
					document.getElementById('dfooter').innerHTML = '<button onclick="Alert1.ok()">Very Good!</button>';
				}
				this.ok = function() {
					document.getElementById('dialog').style.display = "none";
					document.getElementById('dbox').style.display = "none";
					document.getElementById('btn1').disabled = "true";
					document.getElementById('btn2').disabled = "true";
					document.getElementById('btn3').disabled = "true";
					document.getElementById('next').style.display = "block";
				}
			}

			var Alert1 = new CustomAlert1();

			function CustomAlert2() {
				this.render = function(words) {
					var winW = window.innerWidth;
					var winH = window.innerHeight;
					var dialog = document.getElementById('dialog');
					dialog.style.left = (winW / 2) - (550 * .5) + "px";
					dialog.style.top = (winH * 0.2) + "px";
					dialog.style.display = "block";
					dialog.style.background = "#FF0000";
					var dbody = document.getElementById('dbody');
					dbody.style.height = (winH / 4) + "px";
					var dbox = document.getElementById('dbox');
					dbox.style.height = winH + "px";
					dbox.style.display = "block";
					document.getElementById('dbody').innerHTML = words;
					document.getElementById('dfooter').innerHTML = '<button onclick="Alert2.ok()">Try Again</button>';
				}
				this.ok = function() {
					document.getElementById('dialog').style.display = "none";
					document.getElementById('dbox').style.display = "none";
					document.getElementById('btn2').disabled = "true";
				}
			}

			var Alert2 = new CustomAlert2();

			function CustomAlert3() {
				this.render = function(words) {
					var winW = window.innerWidth;
					var winH = window.innerHeight;
					var dialog = document.getElementById('dialog');
					dialog.style.left = (winW / 2) - (550 * .5) + "px";
					dialog.style.top = (winH * 0.2) + "px";
					dialog.style.display = "block";
					dialog.style.background = "#FF0000";
					var dbody = document.getElementById('dbody');
					dbody.style.height = (winH / 4) + "px";
					var dbox = document.getElementById('dbox');
					dbox.style.height = winH + "px";
					dbox.style.display = "block";
					document.getElementById('dbody').innerHTML = words;
					document.getElementById('dfooter').innerHTML = '<button onclick="Alert3.ok()">Try Again</button>';
				}
				this.ok = function() {
					document.getElementById('dialog').style.display = "none";
					document.getElementById('dbox').style.display = "none";
					document.getElementById('btn3').disabled = "true";
				}
			}

			var Alert3 = new CustomAlert3();
		</script>
		<title>Coding Classroom for Kids</title>

		<!--background music -->
		<audio id="background_audio" autoplay="autoplay" loop="loop" >
			<source src="Design/bgm/village10.ogg" type="audio/ogg" />
			<source src="Design/bgm/village10.mp3" type="audio/mpeg" />
		</audio>
	</head>

	<body>
		<div id="notes">
			<p>
				int add(int a, int b)
			</p>
			<p>
				{return a+b;}
			</p>
			<p>
				If we want to get back the result of the function, then we need the return statement
			</p>
			<p>
				The program above will return the result of a+b
			</p>
			<p>
				If a=1, b=2, then it will return 3
			</p>
			<p>
				The return type is before the word function and return type for above function is int
			</p>
			<p>The function will stop after the return statement</p>
			<p>If you do not want to get the result from function,you may not need return statement</p>
			<p>The return type is void if the function return nothing</p>
		</div>

		<div id="question">
			<h3 style="text-align: center">Little Quiz</h3>
			<p>char a (char k)</p>
			<p>{return k;}</p>
			<p>
				What is return type of the function above?
			</p>
			<button id="btn1" onclick="Alert1.render('Well Done! You are correct!')">
				char
			</button>
			<button id="btn2" onclick="Alert2.render('It is not correct. Try another one')">
				abc
			</button>
			<button id="btn3" onclick="Alert3.render('It is not correct. Try another one')">
				k
			</button>
		</div>
		<div id="dbox">
			<div id="dialog">
				<div id="dbody"></div>
				<div id="dfooter"></div>
			</div>
		</div>

		<a href="./ch 3-3.php">
		<button id="next">
			Next ->
		</button></a>

		<div id="choices">
			<a href="./chapter3.php">
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