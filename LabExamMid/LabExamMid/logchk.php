  
<?php
	session_start();
	
	if( isset($_REQUEST['submit1'])){
		$id = $_REQUEST['id'];
		$pwd=  $_REQUEST['pwd'];
		
		if(empty(trim($id)) || empty(trim($pwd))){
			echo "Null submission found!";
		}else{

			$file1=fopen('info.txt', 'r');
			while(!feof($file1)){
			$line=fgets($file1);
			$data = explode('|', $line);

			if( trim($data[0]) == $id && trim($data[1]) == $pwd){
				
                $_SESSION['id'] = $id;
				$_SESSION['pwd'] = $pwd;
			   $name=trim($data[2]);
			   $_SESSION['name']=$name;

				header("location: uHome.php");
				break;
			}else{
				echo "invalid id/password";
		
		}
			}
		}
		fclose($file1);

	}else{

		header("location: login.php");
	}
?>
	  
	  
	 