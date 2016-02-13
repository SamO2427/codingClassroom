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
	if ($row[0] < 18)
	{
		$sql = "UPDATE account SET progress=18 WHERE username = '{$_SESSION['login_user']}'";
	}
	$result = $conn->query($sql);
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
				background-image: url("125.png"
				);
				background-repeat: no-repeat;
				background-size: cover;
			}

			a {
				text-decoration: none;
			}

			#menu {
				border-radius: 25px;
				width: 40%;
				height: 580px;
				border: 2px solid black;
				text-align: center;
				position: absolute;
				top: 10px;
				left: 30%;
				font-size: 250%;
				background-color: lightblue;
			}

			#menu1 {
				font-size: 20px;
				text-align: left;
				position: relative;
				left: 10%;
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
			
			#a1, #a2, #a3, #a4, #a5, #a6 {
				border-radius: 10px;
				width:25%;
				height:30px;
				text-align:center;
			}
			
			#a1, #a2, #a3 {
				border: 1px solid black;
				position: relative;
				left: 10%;
				top: -10px;
			}
			
			#a4, #a5, #a6 {
				position: relative;
				left: 60%;
				top: -40px;
			}
			#b4 {
				border-radius: 10px;
				width: 100%;
				position: relative;
				font-size: 25px;
				background-color: #FF11FF;
				cursor: pointer;
			}

			#b5 {
				border-radius: 10px;
				width: 100%;
				position: relative;
				font-size: 25px;
				background-color: #FFFF55;
				cursor: pointer;
			}

			#b6 {
				border-radius: 10px;
				width: 100%;
				position: relative;
				font-size: 25px;
				background-color: #11FFFF;
				cursor: pointer;
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
				cursor: pointer;
				margin: 5%;
			}
			
		</style>

		<script>
			function allowDrop(ev) {
				ev.preventDefault();
			}

			function drag(ev) {
				ev.dataTransfer.setData("src", ev.target.id);
			}

			function drop(ev) {
				ev.preventDefault();
				var src = document.getElementById(ev.dataTransfer.getData("src"));
				var srcParent = src.parentNode;
				var tgt = ev.currentTarget.firstElementChild;

				ev.currentTarget.replaceChild(src, tgt);
				srcParent.appendChild(tgt);
			}
		</script>

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
					document.getElementById('dfooter').innerHTML = '<button onclick="Alert.ok()">Very Good!</button>';
				}
				this.ok = function() {
					document.getElementById('dialog').style.display = "none";
					document.getElementById('dbox').style.display = "none";
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
					document.getElementById('dfooter').innerHTML = '<button onclick="Alert.ok()">Try Again</button>';
				}
				this.ok = function() {
					document.getElementById('dialog').style.display = "none";
					document.getElementById('dbox').style.display = "none";
				}
			}

			var Alert2 = new CustomAlert2();
			var Alert = Alert2;

			function correct() {
				var a = document.getElementById("b4");
				var c = document.getElementById("a1").contains(a);
				var b = document.getElementById("b6");
				var d = document.getElementById("a2").contains(b);
				var e = document.getElementById("b5");
				var f = document.getElementById("a3").contains(e);
				if (c == true && d == true && f == true) {
					Alert1.render('Well Done! You are correct! <br> Chapter 2 is completed!<br> You can now move on to Chapter 3!<br>Congratulations!!');
					document.getElementById('next').style.display = "block";
				} else {
					Alert2.render('It is not correct. Try Again');
				}
			}
		</script>
		<title>Coding Classroom for Kids</title>

	</head>

	<body>

		<div id="menu">
			<p>
				Q2.2
			</p>
			<p style="font-size: 25px">
				Move the blocks to correct blank
			</p>
			<p style="font-size: 20px">for(int k=5; k>0; k=k-1){...}</p>
			
			<div id="menu1">
				<p>Start condition:</p>
				<div id = "a1" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div id="b1" draggable="true" ondragstart="drag(event)">
					</div>
				</div>
				<div id = "a4" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div id="b4" draggable="true" ondragstart="drag(event)">
						int k=5
					</div>
				</div></p>
				<p>Condition for looping:</p>
				<div id = "a2" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div id="b2" draggable="true" ondragstart="drag(event)">
					</div>
				</div>
				<div id = "a5" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div id="b5" draggable="true" ondragstart="drag(event)">
						k=k-1
					</div>
				</div>
				
				<p>The code that run in every loop:</p>
				<div id = "a3" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div id="b3" draggable="true" ondragstart="drag(event)">
					</div>
				</div>
				<div id = "a6" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div id="b6" draggable="true" ondragstart="drag(event)">
						k>0
					</div>
				</div>
				
			</div>
			<button onclick="correct()" style="position: relative; top: -50px">
				Submit
			</button>
		</div>

		<div id="dbox">
			<div id="dialog">
				<div id="dbody"></div>
				<div id="dfooter"></div>
			</div>
		</div>
		
		<div id="choices">
			<a href="./ex2.php">
			<button class="option">
				Back
			</button></a>
			<br>
			<a href="./usermenu.php">
			<button class="option">
				Menu
			</button></a>
		</div>

		<a href="./chapter3.php">
		<button id="next">
			Next ->
		</button></a>
	</body>
</html>