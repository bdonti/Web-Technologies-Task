   <form method="POST" action=degree.php>
	    Degree </br>
		<input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="hsc") echo "checked";?> 
		value="hsc">HSC
		<input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="ssc") echo "checked";?> 
		value="ssc">SSC
		<input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="bsc") echo "checked";?> 
		value="bsc">BSC
		<input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="msc") echo "checked";?> 
		value="msc">MSC<br>
		<input type="submit" name="submit" value="Submit" <br>
        
	 </form>
	 
	  
    <?php
	$degree="";
	 $degreeErr="";
	
	






    if(empty($_POST["degree"])){
				 
				 $degreeErr="Degree is required";
			 }
			 
			 else {
          $degree = test_input($_POST["degree"]);
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

echo $degree;


?>


	  
  

 
		
		 
		 
		 
		  
	 
	 
	 