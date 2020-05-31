<?php
      $errid="";
	  $errname="";
	  $errpwd="";
	  $errcpwd="";
	  $erruser="";
	  $id="";
	  $name="";
      $pwd="";
	  $cpwd="";
	  $user="";
	  
	 
		  
		
		  
		  if($_SERVER["REQUEST_METHOD"] == "POST"){
			  
			  
			  
			 
				if (empty($_POST['name'])){
					 $errname = "Name cannot be empty";
				}
				else{
					 $name=$_POST['name'];
				 }
				 
				 	if (empty($_POST['pwd'])){
					 $errpwd = "Password cannot be empty";
				}
				else{
					 $pwd=$_POST['pwd'];
				 }
				 
				 if (empty($_POST['id'])){
					 $errid= "Fill the id field";
				}
				else{
					 $id=$_POST['id'];
				 }
				 
				  if (empty($_POST['cpwd'])){
					 $errcpwd= "Confirm your password";
				}
				else{
					if($_POST['pwd']==$_POST['cpwd']){
						
					 $cpwd=$_POST['cpwd'];
					}
					else{
						$errcpwd="Password doesn't match";
					}
				 }
				 if(empty($_POST['type'])){
                 $erruser = "Please select user";
               }
                   else{
                 $user = $_POST['type'];
               }
			   
			   
				 
				 
				 
				 
			
		   }
		   
		   
        
				 



?>


	  
	 <!DOCTYPE html>
	 
	      <center>
	  
	  <?php
	         if($errid==null && $errname==null && $errpwd==null)
        {
           
			$inf1 =  $id."|".$pwd."|".$name."\r\n";

			$file2=fopen('info.txt', 'a');
			fwrite($file2, $inf1);
			fclose($file2);
        }
	  
	  
	  ?>
	  </center>
	  
	  
	  </html>

      <!DOCTYPE html>
	  
	  <head>
	           <title> Registration </title>
	         </head>
			 
			 <body>
			 <form action="regi.php" method="post">
			 
			 <center>
			
		   <h1>Registration</h1>
			 <fieldset>
			 <legend> Registration</legend>
			 
			 
			 <table border="0">
			 <tr>
			      <td>
				  Id <br/>
				  <input type="number" name="id" value="">
				  <?php echo $errid ?> 
                  
	            
				  
				  
				  </td>
			 
			 
			 </tr>
			 <tr>
			 <td>
			    Password <br/>
				<input type="password" name="pwd" value="">
				<?php echo $errpwd ?> 
			 
			 </td>
			 </tr>
			 
			 <tr>
			 <td>
			    Confirm Password <br/>
				<input type="password" name="cpwd" value="">
				<?php echo $errcpwd ?> 
				
			 
			 </td>
			 </tr>
			 
			 <tr>
			 <td>
			    Name <br/>
				
				<input type="text" name="name" value="">
				<?php echo $errname ?> 
			 
			 </td>
			 </tr>
			 
			 <tr>
			 <td>
			    
				<input type="radio" name="type" value="user">User
				<input type="radio" name="type" value="admin">Admin
			    <?php echo $erruser ?> 
			 
			 </td>
			 </tr>
			 
			 <td>
			    
				<input type="submit" name="submit2" value="Sign Up">
				<a href='login.php'>Sign in</a>
				
				 
			 
			 </td>
			 </tr>
			 
			 
			 
			 
			 </table>
			 
			 </center>
			 </fieldset>
			 </form>
			 
			 
			 
			 
			 
			 </body>
	  
	  
	  
	  
	  
	  </html>
	  
	  
	  
	  
	 