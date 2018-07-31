<?php

/* form.php */
    session_start();
    $_SESSION['message'] = '';
    
	
	$mysqli = new mysqli("localhost", "cyberbigan_input_1_dev", "Cyber@bigan", "accounts");


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //check if two passwords are equal to each other
	
    if ($_POST['password'] == $_POST['confirmpassword']) 
    {
    
         $username = $mysqli->real_escape_string($_POST['username']);
         $email =    $mysqli->real_escape_string($_POST['email']);

        //md5 hash password for security
        $password = md5($_POST['password']);

        //path were our avatar image will be stored
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
      
        if (preg_match("!image!",$_FILES['avatar']['type'])) 
     {         
         //copy image to images/ folder 
		 
         if (copy($_FILES['avatar']['tmp_name'], $avatar_path)) 
         {		
              $_SESSION['username'] = $username;
              $_SESSION['avatar'] = $avatar_path;

             //create SQL query string for inserting data into the database
			 
            $sql = "INSERT INTO users (username, email, password, avatar) "
                . "VALUES ('$username', '$email', '$password', '$avatar_path')";
             
             
             if ($mysqli->query($sql) === true)
             {
                $_SESSION[ 'message' ] = "Registration succesful! Added $username to the database!";
				//echo "Registration succesful! Added $username to the database!";
				
                //redirect the user to welcome.php
                header( "location: welcome.php" );
             }
             
             else {
                    $_SESSION['message'] = 'User could not be added to the database!';
					//echo 'User could not be added to the database!';
                }
             
              $mysqli->close(); 
             
         }
            
            else {
                $_SESSION['message'] = 'File upload failed!';
				//echo  'File upload failed!';
            }
     }
        
        {
            $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
        }

            
    }
        
        
}

?>   