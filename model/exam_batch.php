<?php
	include_once("../includes/session.php");
	include_once("../config.php");
	if(isset($_POST["batch"]) && $_POST["batch"] =='Save')
	{	

        // print_r($_POST);
        // exit;
		$batch_course_name=trim($_POST['batch_course_name']);
		// $batch_subject_name=trim($_POST['batch_subject_name']);

		$batch_name=trim($_POST['batch_name']);
		$batch_startdate=trim($_POST['batch_startdate']);
		$duration=trim($_POST['batch_duration']);
		$batch_students=trim($_POST['batch_students']);
		
		$batch_status=trim($_POST['batch_status']);
		$description=trim($_POST['batch_description']);
		
		$sql = "INSERT INTO exam_bathes(`batch_course_name`,`batch_name`,`batch_startdate`,`duration`,`batch_students`,`batch_status`,`batch_description`,`created_at`,`updated_at`,`createdby_id`)
         VALUES ('$batch_course_name', '$batch_name', '$batch_startdate','$duration','$batch_students','$batch_status','$batch_description',now(),now(),'".$_SESSION['adminuser_id']."')";
         
		$query=mysqli_query($conn,$sql);
		if($query==TRUE)
		{
			$_SESSION['success']="New batchs information Created Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-batches.php";</script>';
		}
		else
		{
			$_SESSION['error']="New Course information Creation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-batches.php";</script>';
		}

    }
        //insert testseriesExam Category code end
	
	//Update testseriesExam Category  code start
	if(isset($_POST["batch"]) && $_POST["batch"] =='Update')
	{
		
		
		$batch_course_name=trim($_POST['batch_course_name']);
		// $batch_subject_name=trim($_POST['batch_subject_name']);

		$batch_name=trim($_POST['batch_name']);
		$batch_startdate=trim($_POST['batch_startdate']);
		$batch_duration=trim($_POST['batch_duration']);
		
		$batch_status=trim($_POST['batch_status']);
		$batch_description=trim($_POST['batch_description']);
		$batch_students =trim($_POST['batch_students']);
		$sno=trim($_POST['sno']);
		$sql = "Update exam_bathes  set `batch_course_name`='$batch_course_name',`batch_name`='$batch_name',`batch_startdate`='$batch_startdate',`duration`='$batch_duration',`batch_students`='$batch_students', `batch_status`='$batch_status',`batch_description`='$batch_description',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		// exit;
		if($query==TRUE)
		{
			$_SESSION['success']="batches information Updated Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-batches.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Course information Updation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-batches.php";</script>';
		}
		
	}
	if(isset($_REQUEST["batch"]) && $_REQUEST["batch"] =='Delete')
	{
		$sno=trim($_REQUEST['sno']);
		$sql = "Update exam_bathes  set `flag`='0',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="batches information Deleted Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-batches.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="batches information Deletion Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-batches.php";</script>';
			
		}
		
	}
?>