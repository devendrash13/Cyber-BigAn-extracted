<?php
session_start();
    $_SESSION['message'] = '';
	$mysqli = new mysqli("localhost", "cyberbigan_input_1_dev", "Cyber@bigan", "accounts");
    
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
		  $entered_password = $mysqli->real_escape_string($_POST['password']);
         $entered_email =    $mysqli->real_escape_string($_POST['email']);
		 $entered_password1 = md5($entered_password);
         
	
	
			
	      $sql = "SELECT * FROM users where email = '$entered_email'";
    
          $result = $mysqli->query( $sql ); 
  	      $row = $result->fetch_assoc();
		  echo $row['password'];

  
    //check if two passwords are equal to each other
	
          if ($entered_password1 == $row['password']) 
           {
			        $username = $row['username'];
					
					$_SESSION['username'] = $username;
					$_SESSION['message'] = "login siccess";
					
				   
			   header( "location: welcome.php" );
	           
           }
		   else
		   {
			 // echo $entered_password1;
				//echo $row['password'];
		   }
}

?> 

