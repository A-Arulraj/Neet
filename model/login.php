<?php
	include_once("../config.php");
	
	if(isset($_POST['adminlogin']) && ($_POST["adminlogin"]=='Verify')) 
	{
		
		
		$username = trim($_POST['username']);   
		$password = base64_encode(base64_encode($_POST['password']));
		
		
			
			
			$query = mysqli_query( $conn,"select * from `exam_adminusers` where `username`='".$username."' and `password` = '".$password."' ");
			
			$rowcount = mysqli_num_rows($query);  
			if($rowcount==1)
			{
				$log= mysqli_fetch_assoc($query);
				$_SESSION['adminuser_id'] = $log['id'];
				if($log['login_type']=='Admin')  
        		{
        			$_SESSION['login_type'] = 'Admin';
        		}
        		else
        		{
        			$_SESSION['login_type'] = 'Staff';
        		}
				echo '<script type="text/javascript">window.location.href="../dashboard.php";</script>';	
				
			}
			else
			{
				$_SESSION['login_error']="Username & Password worng. Please try again...";
				echo '<script type="text/javascript">window.location.href="../index.php";</script>';
			}
			
				
	
	
		echo '<script type="text/javascript">;window.location.href="../index.php";</script>';
		
	}
?>