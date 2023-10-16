<?php
include_once("../includes/session.php");
include_once("../config.php");
if(isset($_POST["exam_question"]) && $_POST["exam_question"] =='Save')
{
    // print_r($_POST);
    // exit;
    header('Content-Type: text/html; charset=utf-8');
    $course=$_POST['course'];
    $subject=$_POST['exam_subject_name'];
    $subsubject=$_POST['exam_subsubject_name'];
    $chapter=$_POST['exam_chapter_name'];
    // $sub_topic=$_POST['sub_topic'];

    $question=trim(str_replace("'","`",$_POST['question']));
    $answer_a=trim(str_replace("'","`",$_POST['answer_a']));
    $answer_b=trim(str_replace("'","`",$_POST['answer_b']));
    $answer_c=trim(str_replace("'","`",$_POST['answer_c']));
    $answer_d=trim(str_replace("'","`",$_POST['answer_d']));
    $correct_ans=trim($_POST['correct_ans']);
    $exp_video=trim($_POST['exp_video']);
    $description=trim(str_replace("'","`",$_POST['description']));
    $status=$_POST['status'];
    
    $mark=$_POST['mark'];
    $mode=$_POST['mode'];
    $result = mysqli_query($conn,"SHOW TABLE STATUS WHERE `Name` = 'exam_quest'");
    $data = mysqli_fetch_assoc($result);
    $la_id = $data['Auto_increment'];
    
    $image='';$img_a='';$img_b='';$img_c='';$img_d='';$img_ex='';
    
    if(!empty($_FILES['img_a']['tmp_name']))
    {
        
        $pic ='img_a'.$la_id.'.jpg';
        $pic_loc = $_FILES['img_a']['tmp_name'];
        $folder="question/";
        move_uploaded_file($pic_loc,$folder.$pic);
        $img_a='question/'.$pic;
    }
    if(!empty($_FILES['img_b']['tmp_name']))
    {
        
        $pic ='img_b'.$la_id.'.jpg';
        $pic_loc = $_FILES['img_b']['tmp_name'];
        $folder="question/";
        move_uploaded_file($pic_loc,$folder.$pic);
        $img_b='question/'.$pic;
    }
    if(!empty($_FILES['img_c']['tmp_name']))
    {
        
        $pic ='img_c'.$la_id.'.jpg';
        $pic_loc = $_FILES['img_c']['tmp_name'];
        $folder="question/";
        move_uploaded_file($pic_loc,$folder.$pic);
        $img_c='question/'.$pic;
    }
    if(!empty($_FILES['img_d']['tmp_name']))
    {
        
        $pic ='img_d'.$la_id.'.jpg';
        $pic_loc = $_FILES['img_d']['tmp_name'];
        $folder="question/";
        move_uploaded_file($pic_loc,$folder.$pic);
        $img_d='question/'.$pic;
    }
    if(!empty($_FILES['img_ex']['tmp_name']))
    {
        
        $pic ='img_ex'.$la_id.'.jpg';
        $pic_loc = $_FILES['img_ex']['tmp_name'];
        $folder="question/";
        move_uploaded_file($pic_loc,$folder.$pic);
        $img_ex='question/'.$pic;
    }
    if(!empty($_FILES['image']['tmp_name']))
    {
        
        $pic ='question'.$la_id.'.jpg';
        $pic_loc = $_FILES['image']['tmp_name'];
        $folder="question/";
        move_uploaded_file($pic_loc,$folder.$pic);
        $image='question/'.$pic;
    }
    
    $sql = "INSERT INTO `exam_quest` (
        `exam_course_name`,
        `exam_subject_name`,
        `exam_subsubject_name`,
        `exam_chapter_name`,
        
        `question`,
        `image`,
        `answer_a`,
        `answer_b`,
        `answer_c`,
        `answer_d`,
        `img_a`,
        `img_b`,
        `img_c`,
        `img_d`,
        `correct_ans`,
        `exp_video`,
        `description`,
        `img_ex`,
        `mark`,
        `mode`,
        `status`
        ) VALUES(
        '$course',
        '$subject',
        '$subsubject',
        '$chapter',
        
        '$question',
        '$image',
        '$answer_a',
        '$answer_b',
        '$answer_c',
        '$answer_d',
        '$img_a',
        '$img_b',
        '$img_c',
        '$img_d',
        '$correct_ans',
        '$exp_video',
        '$description',
        '$img_ex',
        '$mark',
        '$mode',
        '$status'
        )";
    
    $query=mysqli_query($conn,$sql);

    if($query==TRUE)
		{
			$_SESSION['success']="Question  Upload Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-question.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Question  Upload Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-question.php";</script>';
			
		}
    
 }

//insert testseries question codecode ends
	
	//Update  testseries question code Start
	
	if(isset($_POST["exam_question"])  && $_POST["exam_question"] =='Update')
	{
		
		header('Content-Type: text/html; charset=utf-8');
		
		$course=$_POST['course'];
        $subject=$_POST['exam_subject_name'];
        $subsubject=$_POST['exam_subsubject_name'];
        $chapter=$_POST['exam_chapter_name'];

		$question=trim(str_replace("'","`",$_POST['question']));
		$answer_a=trim(str_replace("'","`",$_POST['answer_a']));
		$answer_b=trim(str_replace("'","`",$_POST['answer_b']));
		$answer_c=trim(str_replace("'","`",$_POST['answer_c']));
		$answer_d=trim(str_replace("'","`",$_POST['answer_d']));
		$correct_ans=trim($_POST['correct_ans']);		
		$exp_video=trim($_POST['exp_video']);
		$description=trim(str_replace("'","`",$_POST['description']));
		$status=$_POST['status'];
		$mark=$_POST['mark'];
		$mode=$_POST['mode'];
		$sno=$_POST['sno'];
		$image='';$img_a='';$img_b='';$img_c='';$img_d='';$img_ex='';
		
		if(!empty($_FILES['img_a']['tmp_name']))
		{
			
			$pic ='img_a'.$sno.'.jpg';
			$pic_loc = $_FILES['img_a']['tmp_name'];
			$folder="question/";
			move_uploaded_file($pic_loc,$folder.$pic);
			$img_a='question/'.$pic;
		}
		else
		{
			$img_a=$_POST['oldimg_a'];
		}
		
		if(!empty($_FILES['img_b']['tmp_name']))
		{
			
			$pic ='img_b'.$sno.'.jpg';
			$pic_loc = $_FILES['img_b']['tmp_name'];
			$folder="question/";
			move_uploaded_file($pic_loc,$folder.$pic);
			$img_b='question/'.$pic;
		}
		else
		{
			$img_b=$_POST['oldimg_b'];
		}
		if(!empty($_FILES['img_c']['tmp_name']))
		{
			
			$pic ='img_c'.$sno.'.jpg';
			$pic_loc = $_FILES['img_c']['tmp_name'];
			$folder="question/";
			move_uploaded_file($pic_loc,$folder.$pic);
			$img_c='question/'.$pic;
		}
		else
		{
			$img_c=$_POST['oldimg_c'];
		}
		if(!empty($_FILES['img_d']['tmp_name']))
		{
			
			$pic ='img_d'.$sno.'.jpg';
			$pic_loc = $_FILES['img_d']['tmp_name'];
			$folder="question/";
			move_uploaded_file($pic_loc,$folder.$pic);
			$img_d='question/'.$pic;
		}
		else
		{
			$img_d=$_POST['oldimg_d'];
		}
		
		if(!empty($_FILES['img_ex']['tmp_name']))
		{
			
			$pic ='img_ex'.$sno.'.jpg';
			$pic_loc = $_FILES['img_ex']['tmp_name'];
			$folder="question/";
			move_uploaded_file($pic_loc,$folder.$pic);
			$img_ex='question/'.$pic;
		}
		else
		{
			$img_ex=$_POST['oldimg_ex'];
		}
		
		if(!empty($_FILES['image']['tmp_name']))
		{
            
			$pic ='question'.$sno.'.jpg';
			$pic_loc = $_FILES['image']['tmp_name'];
			$folder="question/";
			move_uploaded_file($pic_loc,$folder.$pic);
			$image ='question/'.$pic;
		}
		else
		{
			$image=$_POST['oldimage'];
		}
		
		
		$sql= "update `exam_quest` set 
        
        exam_course_name='$course',
        exam_subject_name='$subject',
        exam_subsubject_name='$subsubject',
        exam_chapter_name='$chapter',


        question='$question', 
        image='$image', 
        answer_a='$answer_a', 
        answer_b='$answer_b',
        answer_c='$answer_c',
        answer_d='$answer_d',
        correct_ans='$correct_ans', 
        img_a='$img_a', 
        img_b='$img_b',
        img_c='$img_c',
        img_d='$img_d',
        img_ex='$img_ex',
        exp_video='$exp_video',
        description='$description',
        mode='$mode',
        mark='$mark',
        status='$status' 
        where sno='$sno'";
		
		$query=mysqli_query($conn,$sql);
		
		if($query==TRUE)
		{
			$_SESSION['success']="Question information Updated Succssfully.";
			echo '<script type="text/javascript">window.location.href="../all-question.php";</script>';
			
		}
		else
		{
			$_SESSION['error']="Question information Updation Failed. Please try again...";
			echo '<script type="text/javascript">window.location.href="../all-question.php";</script>';
			
		}
		
	}
?>