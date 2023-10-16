<?php
	include_once("../includes/session.php");
	include_once("../config.php");
	if(isset($_POST["subject"]) && $_POST["subject"] =='Save')
	{	

        // print_r($_POST);
        // exit;
		$exam_course_name=trim($_POST['exam_course_name']);
		$exam_subject_name=trim($_POST['exam_subject_name']);
		$exam_subsubject_name=trim($_POST['exam_subsubject_name']);
		$exam_chapter_name=trim($_POST['exam_chapter_name']);
		$exam_chapter_status=trim($_POST['exam_chapter_status']);
		$exam_chapter_description=trim($_POST['exam_chapter_description']);
		
		$sql = "INSERT INTO exam_chapter(`exam_course_name`,`exam_subject_name`,`exam_subsubject_name`,`exam_chapter_name`,`exam_chapter_status`,`exam_chapter_description`,`created_at`,`updated_at`,`createdby_id`)
         VALUES ('$exam_course_name','$exam_subject_name','$exam_subsubject_name','$exam_chapter_name','$exam_chapter_status','$exam_chapter_description',now(),now(),'".$_SESSION['adminuser_id']."')";
         
		$query=mysqli_query($conn,$sql);
		if($query==TRUE)
		{
			$_SESSION['success']="New Subjects information Created Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-chapter.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="New Course information Creation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-chapter.php";</script>';
			
		}

    }
        //insert testseriesExam Category code end
	
	//Update testseriesExam Category  code start
	if(isset($_POST["subject"]) && $_POST["subject"] =='Update')
	{
		
		
		$exam_course_name=trim($_POST['exam_course_name']);
		$exam_subject_name=trim($_POST['exam_subject_name']);
		$exam_subsubject_name=trim($_POST['exam_subsubject_name']);
		$exam_chapter_name=trim($_POST['exam_chapter_name']);
		$exam_chapter_status=trim($_POST['exam_chapter_status']);
		$exam_chapter_description=trim($_POST['exam_chapter_description']);

		$sno=trim($_POST['sno']);
		$sql = "Update exam_chapter  set `exam_course_name`='$exam_course_name',`exam_subject_name`='$exam_subject_name',`exam_subsubject_name`='$exam_subsubject_name',`exam_chapter_name`='$exam_chapter_name', `exam_chapter_status`='$exam_chapter_status',`exam_chapter_description`='$exam_chapter_description',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Subjects information Updated Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-chapter.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Course information Updation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-chapter.php";</script>';
			
		}
		
	}
	if(isset($_REQUEST["subject"]) && $_REQUEST["subject"] =='Delete')
	{
		$sno=trim($_REQUEST['sno']);
		$sql = "Update exam_chapter  set `flag`='0',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Subjects information Deleted Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-chapter.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Subjects information Deletion Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-chapter.php";</script>';
			
		}
		
	}
?>