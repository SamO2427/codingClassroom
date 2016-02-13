<?php
//load login script
include('System/login.php');

//if the user has already login, redirect to usermenu
if(isset($_SESSION['login_user']) && $_SESSION['login_user']!="" ){
//header("location: /codingClassroom/usermenu.php");
}

//remove code message when user refreshes the page
if (isset($_GET['code']))
{
	if(empty($_SESSION['show_message']))
	{
		$_SESSION['show_message'] = 1;
	}
	else 
	{
		unset($_SESSION['show_message']);
		//header('Location: /codingClassroom/index.php');	
	}
}

?>
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
		
		<!--background music -->
		<audio id="background_audio" autoplay="autoplay" loop="loop" >
      		<source id="b1" src="Design/bgm/village10.ogg" type="audio/ogg" />
      		<source id="b2" src="Design/bgm/village10.mp3" type="audio/mpeg" />
    	</audio>
	</head>

	<body onload="startTime()">
	
		<div id="header">
			<span id="headline">Coding Classroom for Kids</span>
			<i class="fa fa-paint-brush fa-4x"></i>
			<a href="#" class="player"><i class="fa fa-volume-up fa-3x"></i></a>
		</div>
		<!--Bootstrap tab-->
		<div id="menu">
			<div id="wrapper">
			  <h2><i>Welcome</i></h2>
			  <ul class="nav nav-pills">
			    <li class="active"><a data-toggle="pill" href="#login"><b>Login</b></a></li>
			    <li><a data-toggle="pill" href="#register">Register</a></li>
			    <li><a data-toggle="pill" href="#about">About</a></li>
			    <li><a data-toggle="pill" href="#credit">Credit</a></li>
			  </ul>
		
			  <div class="tab-content" style="width:750px;">
			  	<div id="login" class="tab-pane fade in active">
			  		
			  		
			  		<div id="box1" style="height:320px;width:400px;background-color: #567892; position:relative;margin-top: -60px; float: right;" >
			  			picture or animation to fill in this box
			  		</div>
			  		
			  		
			  		
			    	<h3>Hello!</h3>
			      	<p>New player please enroll first, have fun
			      		<i class="fa fa-smile-o fa-2x"></i>
			      	</p>
		      	<!--Login form -->
					<form role="form" action="System/login.php" method="post">
						
						<div class="form-group">
							<div class="form_size">
								<label for="username">Username:</label> 
								<input type="text" class="form-control" id="username" name="username" maxlength="20" placeholder="Enter userName">
							</div>
						</div>
					
						<div class="form-group">
							<div class="form_size">
								<label for="password">Password:</label>
								<input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">
							</div>
						</div>
						
						<button type="submit" name="submit1" value="login" class="btn btn-default">Play</button>
						<button type="reset" class="btn btn-default">Clear</button>
						<span style="color: #FA5858;">
							 <br /><i>
				               <?php
				                 $code_id = isset($_GET['code']) ? (int)$_GET['code'] : 0;
				                  if ($code_id == 1) {
				                  echo "Invalid username or password!";
				                } ?>
				                </i></span>
					</form>
<!--					<div style="position: relative; top:-45px; left:130px; height:50px; width: 600px;padding-top: 5px; background-color: ">
						<div class="alert alert-danger alert-dismissible" role="alert" >
  							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  							<strong>Warning!</strong> Wrong username or password.
						</div> 
					</div>
		-->	    </div>
			    
			    <div id="register" class="tab-pane fade">
			    	<div id="box2" style="height:320px;width:400px;background-color: #567892; position:relative;margin-top: -40px; float: right;" >
			  			picture or animation to fill in this box
			  		</div>
			      	
			      	
			      	<!--Register form -->
					<form role="form" action="System/login.php" method="post">
						
						<div class="form-group">
							<div class="form_size">
								<label for="username">Username:</label>
								<input type="text" class="form-control" id="username" name="username" required placeholder="Enter userName">
							</div>
						</div>
					
						<div class="form-group">
							<div class="form_size">
								<label for="password1">Password:</label>
								<input type="password" class="form-control" id="password1" name="password1" required placeholder="Enter password">
							</div>
						</div>
						
						<div class="form-group">
							<div class="form_size">
								<label for="password2">Re-enter Password:</label>
								<input type="password" class="form-control" id="password2" name="password2" required placeholder="Enter password again">
							</div>
						</div>
						
						<button type="submit" name="submit2" value="register" class="btn btn-default">Register</button>
						<button type="reset" class="btn btn-default">Clear</button>
						<span id="success">
							 <br /><i>
							 	
				               <?php 
				                  $code_id = isset($_GET['code']) ? (int)$_GET['code'] : 0;
								  //change to red color
								  echo '<style type="text/css">
									        #success {color:#FA5858;}
									    </style>';
				                  if ($code_id == 2) {
				                    echo "Password mismatch!";
				                  }
				                  else if ($code_id == 3) {
				                    echo "This username has been used!";
				                  }
								  else if ($code_id == 4) {
								  	//change to green color for success
								  	echo '<style type="text/css">
									        #success {
									            color:#1aff1a; 
									        }
									        </style>';
								  	echo "Register Successfully!";
								  }
				                ?>
				                </i></span>
					</form>
			      	
			      	
			      	
			      	
			    </div>
			    <!--stat -->
			    <div id="about" class="tab-pane fade">
			    	<div id="box3" style="height:320px;width:400px;background-color: #567892; position:relative;margin-top: -60px; float: right;" >
			  			picture or animation to fill in this box
			  		</div>
			      	<h3>Menu 2</h3>
			      	<p>nothing</p>
			    </div>
			    
			    <div id="credit" class="tab-pane fade">
			    	
			    	<div class="panel">
			    		<h3>Menu 3</h3>
			      		<p>nothing</p>
			      		
			      		
			    	</div>
			      	
			      	
		      	
			      	
			    </div>
			  </div> 
			</div>
		</div>
		
		<div id="footer">
			<div id="footer_text">
				HKUST CS SC1 <i class="fa fa-copyright"></i> &nbsp; 2016
				<i class="fa fa-internet-explorer fa-1g"></i>
				<i class="fa fa-firefox fa-1g"></i>
				<i class="fa fa-chrome fa-1g"></i>
				
				<span id="time"style="float:right; margin-right: 20px;"></span>
			</div>
			
			    
				
		</div>
		
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="Design/js/bootstrap.min.js"></script>
    	<script src="Design/js/clock.js"></script>
    	<script src="Design/js/volume_button.js"></script>
    	<script src="Design/js/last_pill.js"></script>
	</body>
</html>