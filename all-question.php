<?php
	include('includes/session.php');
	include('config.php');
?>
<!doctype html>
<html class="no-js" lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>All Question </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		<!-- Google Fonts
		============================================ -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
		<!-- Bootstrap CSS
		============================================ -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Bootstrap CSS
		============================================ -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
		<!-- animate CSS
		============================================ -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- normalize CSS
		============================================ -->
		<link rel="stylesheet" href="css/normalize.css">
		<!-- meanmenu icon CSS
		============================================ -->
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- main CSS
		============================================ -->
		<link rel="stylesheet" href="css/main.css">
		<!-- educate icon CSS
		============================================ -->
		<link rel="stylesheet" href="css/educate-custon-icon.css">
		<!-- morrisjs CSS
		============================================ -->
		<link rel="stylesheet" href="css/morrisjs/morris.css">
		<!-- mCustomScrollbar CSS
		============================================ -->
		<link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
		<!-- metisMenu CSS
		============================================ -->
		<link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
		<link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
		<!-- calendar CSS
		============================================ -->
		<link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
		<link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
		<!-- x-editor CSS
		============================================ -->
		<link rel="stylesheet" href="css/editor/select2.css">
		<link rel="stylesheet" href="css/editor/datetimepicker.css">
		<link rel="stylesheet" href="css/editor/bootstrap-editable.css">
		<link rel="stylesheet" href="css/editor/x-editor-style.css">
		<!-- normalize CSS
		============================================ -->
		<link rel="stylesheet" href="css/data-table/bootstrap-table.css">
		<link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
		<!-- style CSS
		============================================ -->
		<link rel="stylesheet" href="css/modals.css">
		<link rel="stylesheet" href="style.css">
		<!-- responsive CSS
		============================================ -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr JS
		============================================ -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>



		<script type="text/javascript" src="nicEdit.js"></script>
		<script type="text/javascript">
			bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
		</script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script type="text/javascript">
			$(document).ready(function(){
				$('#course').on('change',function(){
					var course = $(this).val();
					 console.log(course);
					if((course=='Select' ))
					{
						alert('Course Not Selected');
					}
					else
					{
						
						$.ajax({
							type:'POST',
							url:'ajax_course.php',
							data:{course:$("#course").val()},
							success:function(html){
								// console.log(html);
								 $('#exam_subject_name').html(html);
							}
						}); 
						
					}
					
				});
			});
			
	</script>



<script type="text/javascript">
			$(document).ready(function(){
				$('#exam_subject_name').on('change',function(){
					var subject = $(this).val();
					var course= $("#course").val();
					console.log(course);
					if((subject =='Select' ))
					{
						alert('Subject Not Selected');
					}
					else
					{
						
						$.ajax({
							type:'POST',
							url:'ajax_subject.php',
							data:{course:$("#course").val(),subject:$("#exam_subject_name").val()},
							success:function(html){
								//console.log(html);
								$('#exam_subsubject_name').html(html);
							}
						}); 
						
					}
					
				});
			});
			
		</script>


<script type="text/javascript">
			$(document).ready(function(){
				$('#exam_subsubject_name').on('change',function(){
					var subsubject = $(this).val();
          var subject= $("#exam_subject_name").val();
					var course= $("#course").val();
					console.log(course);
					if((subject =='Select' ))
					{
						alert('SubSubject Not Selected');
					}
					else
					{
						
						$.ajax({
							type:'POST',
							url:'ajax_subsubject.php',
							data:{course:$("#course").val(),subject:$("#exam_subject_name").val(),subsubject:$("#exam_subsubject_name").val()},
							success:function(html){
								console.log(html);
								$('#exam_chapter_name').html(html);
							}
						}); 
						
					}
					
				});
			});
			
		</script>
	</head>
	
	<body>
		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<!-- Start Left menu area -->
		<?php include('includes/sidemenu.php'); ?>
		<!-- End Left menu area -->
		<!-- Start Welcome area -->
		<div class="all-content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="logo-pro">
							<a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			<div class="header-advance-area">
				<!-- Mobile Menu start -->
				<?php include('includes/header.php'); ?>
				<!-- Mobile Menu start -->
				<?php include('includes/mobile_menu.php'); ?>
				<!-- Mobile Menu end -->
				<div class="breadcome-area">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="breadcome-list">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="breadcome-heading">
												<a href="add-question.php" class="btn btn-primary">Add Question</a>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<ul class="breadcome-menu">
												<li><a href="#">Home</a> <span class="bread-slash">/</span>
												</li>
												<li><span class="bread-blod">All Question</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="courses-area">
				<!-- Static Table Start -->
				<div class="data-table-area mg-b-15">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="sparkline13-list">
									<div class="sparkline13-hd">
										<div class="main-sparkline13-hd">
											<?php 
												if(isset($_SESSION['success']))
												{ ?>
												
												<div class="alert alert-success alert-mg-b">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
													<strong>Success!</strong> <?=$_SESSION['success'];?>
												</div>
												<?php
													
													unset($_SESSION["success"]);
												}  
												if(isset($_SESSION['error']))
												{ ?>
												
												<div class="alert alert-danger alert-mg-b">
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
													<strong>Warnings!</strong> <?=$_SESSION['error'];?>
												</div>
												<?php
													
													unset($_SESSION["error"]);
												} ?>
												<h1>Exam Question</h1>
										</div>
									</div>
									<div class="sparkline13-graph">
										<div class="datatable-dashv1-list custom-datatable-overright">
											<div id="toolbar">
												<select class="form-control dt-tb">
													<option value="">Export Basic</option>
													<option value="all">Export All</option>
													<option value="selected">Export Selected</option>
												</select>
											</div>

											<form action="" method="GET" >
												<div class="row">
													<div class="col-sm-4 form-group">
														<center><h3 class="blank1">View  Questions <a href="add_question.php" class="btn btn-primary" style="color:white;">+New</a> </h3></center>
														
													</div>
													</div>
													<div class="row">
													<div class="col-sm-3 form-group">
														<label for="selector1" class="col-sm-4 control-label">Course</label>
														<div class="col-sm-8">
															<select name="course" id="course" class="form-control1" required>
																<option value="All">All</option>
																<?php 
																	$sql = mysqli_query($conn,"select sno,exam_course_name from `exam_course` where flog=1 AND exam_course_status ='Active'");
																	// print_r($sql);
																	// exit;
																	while($row = mysqli_fetch_array($sql))
																	{
																	?>
																	<option value="<?php echo $row['sno']; ?>" <?php if(isset($_GET['course'])){if($row['exam_course_name']==$_GET['course']){ echo 'Selected';}}?>><?php echo $row['exam_course_name']; ?></option>
																	<?php }
																	
																?>
															</select>
														</div>
													</div>
													<div class="col-sm-3 form-group">
														<div class="form-group">
															<label for="selector1" class="col-sm-4 control-label">Subject</label>
															<div class="col-sm-8">
																<select  class="form-control1" id="exam_subject_name"name="exam_subject_name" required>
																	<option value="">Select Subject First</option>
																	<?php if(isset($_GET['exam_subject_name'])){ echo '<option value="'.$_GET['exam_subject_name'].'" selected>'.$_GET['exam_subject_name'].'</option>';}?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-sm-3 form-group">
														<label for="selector1" class="col-sm-4 control-label">Sub Subjects</label>
														<div class="col-sm-8">
															<select id="exam_subsubject_name" name="exam_subsubject_name" class="form-control1" required>
																<?php if(isset($_GET['exam_subsubject_name']))
																{ echo '<option>'.$_GET['exam_subsubject_name'].'</option>'; }?>
																<option value=""> Select Subsubject First</option>
															</select>
														</div>
													</div>

													<div class="col-sm-3 form-group">
														<label for="selector1" class="col-sm-4 control-label">Chapter</label>
														<div class="col-sm-8">
															<select id="exam_chapter_name" name="exam_chapter_name" class="form-control1" required>
																<?php if(isset($_GET['exam_chapter_name"']))
																{ echo '<option>'.$_GET['exam_chapter_name"'].'</option>'; }?>
																<option value=""> Select Chapter First</option>
															</select>
														</div>
													</div>



													<div class="col-sm-2 form-group">
														<input type="submit" value="Submit" name="Submit" class="btn-success btn">
													</div>
												</div>
											</form><br><br>
											
											<table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
											data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
												<thead>
													<tr>
														
														<th data-field="id">ID</th>
														<th data-field="name">Question</th>
														<th data-field="subjectname">Answer A</th>
														<th data-field="subsubjectname">Answer B</th>
														<th data-field="chapter">Answer C</th>

														<th data-field="description">Answer D</th>
														<th data-field="status">Correct <br> Answer</th>
														<th data-field="action">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php 

														$i=0;$qry1='';$qry2='';$qry3=''; $qry4='';

														if(isset($_GET['Submit']))
														{
															$qry1=($_GET['course']!='All')?"where exam_course_name='".$_GET['course']."'":"" ;
															
															$qry2=($_GET['course']!='All')?"and exam_subject_name='".$_GET['exam_subject_name']."'":'';
													
															$qry3=($_GET['course']!='All')?"and exam_subsubject_name='".$_GET['exam_subsubject_name']."'":'';
															$qry4=($_GET['course']!='All')?"and exam_chapter_name='".$_GET['exam_chapter_name']."'":'';
															$limit='';
														}
														else
														{
															$limit='limit 20';
														}

														

														$sqll=mysqli_query($conn,"select * from exam_quest $qry1 $qry2 $qry3 order by sno desc $limit") or  die('Error: ' . mysqli_error($conn));

														while($row=mysqli_fetch_array($sqll))
														{
															
																$i++;
																$question=str_replace('admin/','',$row["image"]); 
																$img_a=str_replace('admin/','',$row["img_a"]); 
																$img_b=str_replace('admin/','',$row["img_b"]); 
																$img_c=str_replace('admin/','',$row["img_c"]); 
																$img_d=str_replace('admin/','',$row["img_d"]); 
																echo ' <tr>';
															echo '<td>'.$i.'</td>'; ?>
															<td><?=($row['question']!='')?$row['question']:'<img src="'.$question.'">';?></td>
															<td><?=($row['answer_a']!='')?$row['answer_a']:'<img src="'.$img_a.'">';?></td>
															<td><?=($row['answer_b']!='')?$row['answer_b']:'<img src="'.$img_b.'">';?></td>
															<td><?=($row['answer_c']!='')?$row['answer_c']:'<img src="'.$img_c.'">';?></td>
															<td><?=($row['answer_d']!='')?$row['answer_d']:'<img src="'.$img_d.'">';?></td>
															<?php
																echo '<td>'.$row['correct_ans'].'</td>';			
																echo '<td style="width:90px;">
																		<a class="btn btn-warning" href="#" data-toggle="modal" data-target="#WarningModalalert" onclick="seturlpath('.$row['sno'].', \'edit\')"><i class="fa fa-edit"></i></a>
																		<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#DangerModalalert" onclick="seturlpath('.$row['sno'].', \'delete\')"><i class="fa fa-trash-o"></i></a>
																	</td>';

																echo ' </tr>';
	
															}	
															
													?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="WarningModalalert" class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-close-area modal-close-df">
							<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
						</div>
						<div class="modal-body">
							<span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>
							<h2>Warning!</h2>
							<p>Are You Confirm to Update course Information`s</p>
						</div>
						<div class="modal-footer warning-md">
							<a data-dismiss="modal" href="#">Cancel</a>
							<a id="editurl" href="#">Proceed</a>
						</div>
					</div>
				</div>
			</div>
			<div id="DangerModalalert" class="modal modal-edu-general FullColor-popup-DangerModal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-close-area modal-close-df">
							<a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
						</div>
						<div class="modal-body">
							<span class="educate-icon educate-danger modal-check-pro information-icon-pro"></span>
							<h2>Warning!</h2>
							<p>Are You Confirm to Delete course Information`s.<br> If you deleted course Information`s could not  be recovered </p>
						</div>
						<div class="modal-footer danger-md">
							<a data-dismiss="modal" href="#">Cancel</a>
							<a id="deleteurl" href="#">Proceed</a>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="footer-copyright-area">
			<?php include('includes/footer.php'); ?>
		</div>
	</div>
	
    <!-- jquery
	============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
	============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
	============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
	============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
	============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
	============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
	============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
	============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
	============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
	============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
	============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
	============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
	============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
	============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
	============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
	============================================ -->
    <script src="js/main.js"></script>
	<script>
		function seturlpath(id,act)
		{
			if(act=='edit')
			{
				var editurl = "add-question.php?act=Edit&sno="+id;
				$('#editurl').attr('href', editurl);
			}
			else
			{
				var deleteurl = "model/exam_question.php?subject=Delete&sno="+id;
				$('#deleteurl').attr('href', deleteurl);
			}
		}
	</script>
</body>

</html>