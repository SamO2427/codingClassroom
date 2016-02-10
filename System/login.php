<?php    
	//reference: http://www.formget.com/login-form-in-php/
	//remark: make mysql column case sensitive by setting it binary type ! 	
	session_start();
	
	// this variable should only exist in index.php
	if(isset($_SESSION['show_message']))
	{
		unset($_SESSION['show_message']);
	}
	
	if(isset($_POST['submit1']) && $_POST['submit1']=="login") 
	{
		//connect to DB
		require_once("connection.php");
		
		// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($conn,$username);
		$password = mysqli_real_escape_string($conn,$password);
		
		//encrypt the password in md5 (hash length:32)
		$password = md5($password);
		
		$sql = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
		
		if($result=mysqli_query($conn,$sql))
		{
			$rowcount = mysqli_num_rows($result);
		}
		
		//if there is only 1 id match
		if($rowcount == 1)
		{
			$_SESSION['login_user'] = $username;
			header('Location: /codingClassroom/usermenu.php');  //redirect to menu page to load personal config
		}
		else
		{ //wrong user or password
			header('Location: /codingClassroom/index.php?code=1');
		}
		
		//Close connection
		mysqli_close($conn);
	} 
	else if (isset($_POST['submit2']) && $_POST['submit2']=="register") 
	{
		if (isset($_POST['password1']) && isset($_POST['password2']))
		{
			if($_POST['password1'] != $_POST['password2'])
			{
				//Password mismatch!
				header('Location: /codingClassroom/index.php?code=2');
			}
			else 
			{
				//load database config & connect to DB
				require_once("connection.php");
				
				// set variables
				$username=$_POST['username'];
				$password=$_POST['password1'];
			
				
				// To protect MySQL injection for Security purpose
				$username = stripslashes($username);
				$password = stripslashes($password);		
				$username = mysqli_real_escape_string($conn,$username);
				$password = mysqli_real_escape_string($conn,$password);
				
				
				//encrypt the password in md5 (hash length:32)
				$password = md5($password);
				
				$sql = "SELECT * FROM account WHERE username = '$username'";
		
				if($result=mysqli_query($conn,$sql))
				{
					$rowcount = mysqli_num_rows($result);
				}
				
				//if there is >=1 match, not unique
				if($rowcount != 0)
				{
					//This username has been used!
					header('Location: /codingClassroom/index.php?code=3');
				}
				else 
				{
					$sql = "INSERT INTO account (username, password, progress, ac_type)
						VALUES ('$username', '$password', '0', '0')";
						
					if (!mysqli_query($conn,$sql))
				  	{
				  		die('Error: ' . mysql_error());
				  	}	
					else 
					{
						//register successfully
						header('Location: /codingClassroom/index.php?code=4');
					}	
					
				}
					
				//Close connection
				mysqli_close($conn);
			}
		}
		
		
	}
	
	
	

?>