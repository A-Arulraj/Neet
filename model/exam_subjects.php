<?php
	include_once("../includes/session.php");
	include_once("../config.php");
	if(isset($_POST["subject"]) && $_POST["subject"] =='Save')
	{	

        // print_r($_POST);
        // exit;
		$exam_course_name=trim($_POST['exam_course_name']);
		$exam_subject_name=trim($_POST['exam_subject_name']);
		
		$exam_subject_status=trim($_POST['exam_subject_status']);
		$exam_subject_description=trim($_POST['exam_subject_description']);
		
		$sql = "INSERT INTO exam_subject(`exam_course_name`,`exam_subject_name`,`exam_subject_status`,`exam_subject_description`,`created_at`,`updated_at`,`createdby_id`)
         VALUES ('$exam_course_name','$exam_subject_name','$exam_subject_status','$exam_subject_description',now(),now(),'".$_SESSION['adminuser_id']."')";
         
		$query=mysqli_query($conn,$sql);
		if($query==TRUE)
		{
			$_SESSION['success']="New Subjects information Created Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-subjects.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="New Course information Creation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-subjects.php";</script>';
			
		}

    }
        //insert testseriesExam Category code end
	
	//Update testseriesExam Category  code start
	if(isset($_POST["subject"]) && $_POST["subject"] =='Update')
	{
		
		
		$exam_course_name=trim($_POST['exam_course_name']);
		$exam_subject_name=trim($_POST['exam_subject_name']);
		
		$exam_subject_status=trim($_POST['exam_subject_status']);
		$exam_subject_description=trim($_POST['exam_subject_description']);

		$sno=trim($_POST['sno']);
		$sql = "Update exam_subject  set `exam_course_name`='$exam_course_name',`exam_subject_name`='$exam_subject_name', `exam_subject_status`='$exam_subject_status',`exam_subject_description`='$exam_subject_description',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Subjects information Updated Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-subjects.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Course information Updation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-subjects.php";</script>';
		}
		
	}
	if(isset($_REQUEST["subject"]) && $_REQUEST["subject"] =='Delete')
	{
		$sno=trim($_REQUEST['sno']);
		$sql = "Update exam_subject  set `flag`='0',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Subjects information Deleted Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-subjects.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Subjects information Deletion Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-subjects.php";</script>';
			
		}
		
	}
?>