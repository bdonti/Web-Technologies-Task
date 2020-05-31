 <form method="POST" action=Gender.php>
	    Gender </br>
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> 
		value="male">Male
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> 
		value="female">Female
		<input type="radio" name="gender" <?php if (isset($gender) && $gender=="others") echo "checked";?> 
		value="others">Others <br>
		<input type="submit" name="submit" value="Submit" <br>
        
	 </form>
	 
	 
	 
	      <?php 
		       $gender="";
			    $genderErr="";
		     if(empty($_POST["gender"])){
				 
				 $genderErr="Gender is required";
			 }
			 
			 else {
          $gender = test_input($_POST["gender"]);
          }
		  
		  function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
}

     

?>

  <?php
	  
echo "<h2>Your Input:</h2>";

echo $gender;
?>


	 
	 
	 
	 
	 
	        