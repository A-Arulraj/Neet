<?php
	
include_once("../includes/session.php");
include_once("../config.php");
ini_set('memory_limit', '1024M');
ini_set('max_execution_time', '0');

//insert testseriesExam Category code Start
if(isset($_POST["Student"]) && $_POST["Student"] =='Save')
{

    // print_r($_POST);
    // exit;
    $result = mysqli_query($conn,"SHOW TABLE STATUS WHERE `Name` = 'exam_student'");
    $data = mysqli_fetch_assoc($result);
    $username ="OEOC".$data['Auto_increment'];
    //$sno=trim($_POST['sno']);

    $name=trim($_POST['name']);
    
    $education=trim($_POST['education']);
    $exam_course_name=trim($_POST['exam_course_name']);
	$exam_subject_name=trim($_POST['exam_subject_name']);

    $dob=date("Y-m-d", strtotime($_POST['dob']));
    $phone=trim($_POST['phone']);
    $mobile1=trim($_POST['mobile1']);
    $email=trim($_POST['email']);		
    $matrial=trim($_POST['matrial']);
    
    $validity_from=trim($_POST['validity_from']);
    $validity_to=trim($_POST['validity_to']);	
    $com_address=trim($_POST['com_address']);
        
    $purpose=isset($_POST['purpose'])?implode(',',$_POST['purpose']):'';
    

    $videos=isset($_POST['videos'])?implode(',',$_POST['videos']):'';
        
    $upiid=trim($_POST['upiid']);
    $status=trim($_POST['exam_student_status']);
    $x= array("0","1","2","3","4","5","6","7","8","9");
    
    $otp="";
    
    for($i=0;$i<=5;$i++){
        $otp=$otp.$x[rand(0,count($x)-1)];
    }
    $password=$otp;
    
    $sql="insert into exam_student
    (`name`,`education`,`exam_course_name`,`exam_subject_name`,`email`,`phone`,`mobile1`,`dob`,`com_address`,`upiid`,`username`,`password`,`validity_from`,`validity_to`,`purpose`,`matrial`,`otp`,`image`,`regdate`,`status`,`login_status`,`videos`,`created_at`,`updated_at`,`createdby_id`)
    values('$name','$education','$exam_course_name','$exam_subject_name','$email','$phone','$mobile1','$dob','$com_address','$upiid','$username','$password','$validity_from','$validity_to','$purpose','$matrial','$otp','',Now(), '$status','0','$videos', now(), now(), '".$_SESSION['adminuser_id']."')";
    // print_r($sql);
    // exit;
    
        $query=mysqli_query($conn,$sql);
        if($query==TRUE)
        {	
        
            $_SESSION['success']="Student Created Successfully";
        
        echo '<script type="text/javascript">window.location.href="../all-student.php";</script>';
            
        }
        else
        {
        
            $_SESSION['error']="Student  Created Failed";
        
        echo '<script type="text/javascript"> window.location.href="../all-student.php";</script>';
            
        }
    
} 

//insert testseriesExam Category code Start
if(isset($_POST["Student"]) && $_POST["Student"] =='Update')
{
    $sno=trim($_POST['sno']);
    $name=trim($_POST['name']);
    $education=trim($_POST['education']);
    $exam_course_name=trim($_POST['exam_course_name']);
	$exam_subject_name=trim($_POST['exam_subject_name']);

    $dob=date("Y-m-d", strtotime($_POST['dob']));
    $phone=trim($_POST['phone']);
    $mobile1=trim($_POST['mobile1']);
    $email=trim($_POST['email']);		
    $matrial=trim($_POST['matrial']);
    $validity_from=trim($_POST['validity_from']);
    $validity_to=trim($_POST['validity_to']);
    $com_address=trim($_POST['com_address']);
        
    $purpose=isset($_POST['purpose'])?implode(',',$_POST['purpose']):'';
    

    $videos=isset($_POST['videos'])?implode(',',$_POST['videos']):'';
        
    $upiid=trim($_POST['upiid']);
    $status=trim($_POST['exam_student_status']);
    $sql = "Update `exam_student` set `name`='$name',`education`='$education',`exam_course_name`='$exam_course_name',`exam_subject_name`='$exam_subject_name',`dob`='$dob',`phone`='$phone',`mobile1`='$mobile1',`upiid`='$upiid',`email`='$email',`matrial`= '$matrial',`com_address`= '$com_address',`purpose`= '$purpose',`validity_from`= '$validity_from',`validity_to`= '$validity_to',`videos`= '$videos',`status`= '$status' where `sno`='$sno'";
        $query=mysqli_query($conn,$sql);
        // print_r($query);
        // exit;

        if($query==TRUE)
        {	
            $_SESSION['success']="Student  Updated Successfully";
        
        echo '<script type="text/javascript">window.location.href="../all-student.php";</script>';
            
        }
        else
        {
            $_SESSION['error']="Student  Updated Failed";
        
        echo '<script type="text/javascript"> window.location.href="../all-student.php";</script>';
            
        }
    
}

if(isset($_REQUEST["student"]) && $_REQUEST["student"] =='Delete')
	{
		$sno=trim($_REQUEST['sno']);
		$sql = "Update exam_student  set `flag`='0',`updated_at`=now(),`createdby_id`='".$_SESSION['adminuser_id']."' where `sno`='$sno'";
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Subjects information Deleted Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-student.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Subjects information Deletion Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-student.php";</script>';
			
		}
		
	}
?>