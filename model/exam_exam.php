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
		$exam_exam_status=trim($_POST['exam_exam_status']);
		// $exam_chapter_description=trim($_POST['exam_chapter_description']);
		$exam_exam =trim($_POST['exam_exam']);
		$exam_duration =trim($_POST['exam_duration']);
		$exam_positive =trim($_POST['exam_positive_mark']);
		$exam_negative =trim($_POST['exam_negative_mark']);
		$sql = "INSERT INTO exam_exam(`exam_course_name`,`exam_subject_name`,`exam_subsubject_name`,`exam_chapter_name`,`exam_exam_status`,`exam_exam`,`exam_duration`,`exam_positive_mark`,`exam_negative_mark`,`created_at`,`updated_at`,`createdby_id`)
         VALUES ('$exam_course_name','$exam_subject_name','$exam_subsubject_name','$exam_chapter_name','$exam_exam_status','$exam_exam', '$exam_duration','$exam_positive','$exam_negative',now(),now(),'".$_SESSION['adminuser_id']."')";
         
		$query=mysqli_query($conn,$sql);
		if($query==TRUE)
		{
			$_SESSION['success']="New Exam information Created Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-exam.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="New Exam information Creation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-exam.php";</script>';
			
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
		$exam_exam_status=trim($_POST['exam_exam_status']);

		$exam_exam =trim($_POST['exam_exam']);
		$exam_duration =trim($_POST['exam_duration']);
		$exam_positive =trim($_POST['exam_positive_mark']);
		$exam_negative =trim($_POST['exam_negative_mark']);
		
		$sno=trim($_POST['sno']);
		$sql = "Update exam_exam  set `exam_exam`='$exam_course_name',`exam_subject_name`='$exam_subject_name',`exam_subsubject_name`='$exam_subsubject_name',`exam_chapter_name`='$exam_chapter_name', `exam_exam_status`='$exam_exam_status',`exam_exam`='$exam_exam',`exam_duration`='$exam_duration',`exam_positive_mark`='$exam_positive',`exam_negative_mark`='$exam_negative',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Subjects information Updated Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-exam.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Course information Updation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-exam.php";</script>';
			
		}
		
	}
	if(isset($_REQUEST["subject"]) && $_REQUEST["subject"] =='Delete')
	{
		$sno=trim($_REQUEST['sno']);
		$sql = "Update exam_exam  set `flag`='0',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Subjects information Deleted Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-exam.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Subjects information Deletion Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-exam.php";</script>';
			
		}
		
	}
?>