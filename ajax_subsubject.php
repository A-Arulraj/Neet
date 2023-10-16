<?php
	//Include database configuration file
	include_once('config.php');
	if(isset($_POST["subject"]))
	{
		$query1 = mysqli_query($conn,"SELECT * FROM exam_chapter where `exam_course_name`='".$_POST["course"]."' and `exam_subject_name`='".$_POST["subject"]."' and  `exam_subsubject_name`='".$_POST["subsubject"]."' ORDER BY sno ASC ") ;
		
		//Count total number of rows
		$rowCount = mysqli_num_rows($query1);
		
		//Display cities list
		if($rowCount > 0){
				echo '<option value="">Select Chapter</option>';
			while($row = mysqli_fetch_array($query1)){ 
				echo '<option value="'.$row['sno'].'">'.$row['exam_chapter_name'].'</option>';
			}
			
			}else{
			echo '<option value="">Chapter not available</option>';
		}
	}
	
?>

