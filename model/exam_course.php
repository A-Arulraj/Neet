<?php
	include_once("../includes/session.php");
	include_once("../config.php");
	if(isset($_POST["Course"]) && $_POST["Course"] =='Save')
	{	
		
		$exam_course_name=trim($_POST['exam_course_name']);
		$exam_course_duration=trim($_POST['exam_course_duration']);
		$exam_course_price=trim($_POST['exam_course_price']);		
		$exam_course_starttime=trim($_POST['exam_course_starttime']);
		$exam_course_endtime=trim($_POST['exam_course_endtime']);
		$exam_course_status=trim($_POST['exam_course_status']);
		$exam_course_description=trim($_POST['exam_course_description']);
		
		$sql = "INSERT INTO exam_course (`exam_course_name`,`exam_course_duration`,`exam_course_price`,`exam_course_starttime`,`exam_course_endtime`,`exam_course_status`,`exam_course_description`,`created_at`,`updated_at`,`createdby_id`) VALUES ('$exam_course_name','$exam_course_duration','$exam_course_price','$exam_course_starttime','$exam_course_endtime','$exam_course_status','$exam_course_description',now(),now(),'".$_SESSION['adminuser_id']."')";
		$query=mysqli_query($conn,$sql);
		if($query==TRUE)
		{
			$_SESSION['success']="New Course information Created Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-courses.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="New Course information Creation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-courses.php";</script>';
			
		}
		
	}
	
	//insert testseriesExam Category code end
	
	//Update testseriesExam Category  code start
	if(isset($_POST["Course"]) && $_POST["Course"] =='Update')
	{
		
		
		$exam_course_name=trim($_POST['exam_course_name']);
		
		$exam_course_duration=trim($_POST['exam_course_duration']);
		$exam_course_price=trim($_POST['exam_course_price']);		
		$exam_course_starttime=trim($_POST['exam_course_starttime']);		
		$exam_course_endtime=trim($_POST['exam_course_endtime']);
		$exam_course_status=trim($_POST['exam_course_status']);
		$exam_course_description=trim($_POST['exam_course_description']);
		$sno=trim($_POST['sno']);
		$sql = "Update exam_course  set `exam_course_name`='$exam_course_name',`exam_course_duration`='$exam_course_duration', `exam_course_price`='$exam_course_price',`exam_course_starttime`='$exam_course_starttime',`exam_course_endtime`='$exam_course_endtime',`exam_course_status`='$exam_course_status',`exam_course_description`='$exam_course_description',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Course information Updated Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-courses.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Course information Updation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-courses.php";</script>';
			
		}
		
	}
	if(isset($_REQUEST["Course"]) && $_REQUEST["Course"] =='Delete')
	{
		$sno=trim($_REQUEST['sno']);
		$sql = "Update exam_course  set `flog`='0',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Course information Deleted Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-courses.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Course information Deletion Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-courses.php";</script>';
			
		}
	}
?>