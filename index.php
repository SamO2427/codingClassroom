<!--<?php
    echo "Hello World!";
?>  -->

<!DOCTYPE html>
<html>	
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    	
    	<title>Coding Classroom for Kids</title>

    	<!-- link to Bootstrap -->
    	<link href="Design/css/bootstrap.min.css" rel="stylesheet">
    	<!--link to use Awesome Font -->
		<link rel="stylesheet" href="Design/font-awesome-4.4.0/css/font-awesome.min.css">
		<!-- link to google font-->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
		<!-- link to own stylesheet-->
 		<link href="Design/css/stylesheet.css" rel="stylesheet" type="text/css">
 		<!--use favicon -->
 		<link rel="shortcut icon" href="Design/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="Design/img/favicon.ico" type="image/x-icon">
	</head>

	<body>
	
		<div id="header">
			<span id="headline">Coding Classroom for Kids</span>
			<i class="fa fa-paint-brush fa-4x"></i>
		</div>
		<!--Bootstrap tab-->
		<div id="menu">
			<div class="container">
			  <h2><i>Menu Pill</i></h2>
			  <ul class="nav nav-pills">
			    <li class="active"><a data-toggle="pill" href="#login">Login</a></li>
			    <li><a data-toggle="pill" href="#register">Register</a></li>
			    <li><a data-toggle="pill" href="#setting">Setting</a></li>
			    <li><a data-toggle="pill" href="#credit">Credit</a></li>
			  </ul>
		
			  <div class="tab-content">
			  	<div id="login" class="tab-pane fade in active">
			    	<h3>Hello!</h3>
			      	<p>New player please enroll first, have fun
			      		<i class="fa fa-smile-o fa-2x"></i>
			      	</p>
			      	<!--Login form -->
					<!--<form role="form" action="account/login.php" method="post">  -->
					<form role="form" action="" method="post">
						
						<div class="form-group">
							<div class="form_size">
								<label for="username">Username:</label>
								<input type="text" class="form-control" id="username" name="username" required placeholder="Enter userName">
							</div>
						</div>
					
						<div class="form-group">
							<div class="form_size">
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">
							</div>
						</div>
						
						<button type="submit" class="btn btn-default">Play</button>
					</form>
			      	
			    </div>
			    
			    <div id="register" class="tab-pane fade">
			      	<h3>Menu 1</h3>
			      	<p>nothing</p>
			    </div>
			    
			    <div id="setting" class="tab-pane fade">
			      	<h3>Menu 2</h3>
			      	<p>nothing</p>
			    </div>
			    
			    <div id="credit" class="tab-pane fade">
			      	<h3>Menu 3</h3>
			      	<p>nothing</p>
			    </div>
			  </div> 
			</div>
		</div>
		
		<div id="footer">
			<div id="footer_text">
				<b>Footer</b> &nbsp; &nbsp;
				<i class="fa fa-chrome fa-1g"></i>
			</div>
			
			    
				
		</div>
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="Design/js/bootstrap.min.js"></script>
	</body>
</html>