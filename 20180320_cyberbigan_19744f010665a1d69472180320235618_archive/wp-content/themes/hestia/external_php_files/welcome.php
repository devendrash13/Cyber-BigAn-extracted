<link rel="stylesheet" href="form.css">
<?php 
/* welcome.php */

//$_SESSION variables become available on this page
session_start(); 

?>


<?php
	$uname =  $_SESSION['username'] ;
    $_SESSION['message'] = '';
    
	$server = "cyberbigan-input-1.csyeqetcnrk2.ap-south-1.rds.amazonaws.com";
	$user_name="cy_input_1_dev";
	$pass="cyberbigan";
	$db="accounts";
	
	$mysqli = new mysqli($server, $user_name, $pass, $db);
    $sql = "SELECT * FROM users where username = '$uname'";
    //$result = mysqli_result object
    $result = $mysqli->query( $sql ); 
    
    //returns associative array of fetched row
					
		
	 $row = $result->fetch_assoc();
        
    
	
?> 

<div style="color:red;font-size:50px;font-weight:bold;text-align: center;padding-top:50px;padding-bottom:20px;"  > WELCOME TO HEALTH STATISTICS   PROVIDER </div>
<div class="body content">
<div class="welcome">
<!--<div class="alert alert-success"><?= $_SESSION['message']; ?></div> --!>

<div>
    <div style="color:#66d8fc;font-size:25px;font-weight:bold;text-align:left;padding-left:20px;margin-left:50px;padding-bottom:20px;"  > PROFILE PICTURE </div>
	
		
	<img  src="<?= $_SESSION['avatar'] ?>" style="width:230px;height:300px;margin-left:50px;padding-left:20px;" align="middle"><br />

		
    <div align="center"  > <h2 style="color:#66d8fc; padding-bottom:20px"> YOUR DETAILS  </h2></div>



   
  
  <div align="center"><br>
       
	  <div style="color:#66d8fc;font-size:20px;font-weight:bold">NAME : <span style="color:red;font-size:35px"><?php  echo $row['username'];?> </span></div>  
 <br> <div style="color:#66d8fc;font-size:20px;font-weight:bold">EMAIL : <span style="color:red;font-size:35px"><?php  echo $row['email'];?> </span></div>  
 <br> <div style="color:#66d8fc;font-size:20px;font-weight:bold">PASSWORD : <span style="color:red;font-size:35px"><?php  echo $row['password'];?> </span></div>  
 <br> <div style="color:#66d8fc;font-size:20px;font-weight:bold">PASSWORD : <span style="color:red;font-size:35px"><?php  echo $row['avatar'];?> </span></div> 
 <br> <img  src="<?= $row['avatar'] ?>" style="width:80px;height:100px;" align="middle"><br />
 
  </div>	
    <div id='registered'>
    <span style="padding-left:20px">Now Your Are A Registered User Of HEALTH STATISTICS PROVIDER TEAM.</span>
	<br><br><br><br><br>

</div>
</div>
</div>
