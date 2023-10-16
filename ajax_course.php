<?php
	//Include database configuration file
	
	include('config.php');
	if(isset($_POST["course"]))
	{
		//  print_r($_POST);
		// exit;
		$query1 = mysqli_query($conn,"SELECT * FROM exam_subject where 	exam_course_name ='".$_POST["course"]."'ORDER BY sno ASC ") ;
		
		//Count total number of rows
		$rowCount = mysqli_num_rows($query1);
		
		//Display cities list
		if($rowCount > 0){
				echo '<option value="">Select Subject</option>';
			while($row = mysqli_fetch_array($query1)){ 
				echo '<option value="'.$row['sno'].'">'.$row['exam_subject_name'].'</option>';
			}
			
			}else{
			echo '<option value="">Subject not available</option>';
		}
	}
	
?>

