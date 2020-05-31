<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>



<!DOCTYPE html>
 	
 	<head>
	           <title>User Home Page</title>
	</head>

	<center>


		
		 

		 	

		 		<fieldset>
		 				<h1>Welcome home! <?= $_SESSION['name']?></h1>
		 			
		 			            <a href="profile.php" >Profile</a><br>
								<a href="cPassword.php" >Change Password</a><br>
								
								
								<a href="logout.php">Logout</a>

		 		</fieldset>
		 		
		 		
		 	
			 				

	    
	</center>