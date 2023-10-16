<?php
	include('includes/session.php');
	include('config.php');
	if(isset($_REQUEST['act']))
	{

		$sno = $_REQUEST['sno'];
		$sql1 = mysqli_query($conn,"select * from `exam_quest` where `sno` ='$sno'");
		
    $_fetch = mysqli_fetch_array($sql1);

	}	
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ADMIN PANEL</title>
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
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
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
								
								$('#chapter').html(html);
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
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                              <a href="all-question.php" class="btn btn-primary">View Question</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Question</span>
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
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Question Details</a></li>
                               
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="model/exam_question.php" method="post" autocomplete="off">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label> Cource Name </label>
                                                                      <select name="course" id="course" class="form-control custom-select-value" name="exam_course_name">
                                                                        <?php
                                                                        $sql2 = mysqli_query($conn,"select * from `exam_course` where flog=1 AND exam_course_status='Active'");
                                                                            while( $course = mysqli_fetch_array($sql2))
                                                                              {
                                                                              ?>
                                                                            <option value="<?php echo $course['sno'] ?>"> <?php echo $course['exam_course_name'] ?> </option>
                                                                            <?php
                                                                              }
                                                                              ?>       
                                                                      </select>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label> Subject Name </label>
                                                                  <select class="form-control custom-select-value" id="exam_subject_name"name="exam_subject_name">
                                                                    <?php
                                                                    $sql3 = mysqli_query($conn,"select * from `exam_subject` where flag=1 AND exam_subject_status='Active'");
                                                                    while( $subject = mysqli_fetch_array($sql3))
                                                                     {
                                                                    ?>
                                                                    <option value="<?php echo $subject['sno'] ?>"> <?php echo $subject['exam_subject_name'] ?> </option>
                                                                   <?php
                                                                     }
                                                                    ?>       
                                                                  </select>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label> Sub Subjects Name </label>
                                                                    <select class="form-control custom-select-value"  id="exam_subsubject_name" name="exam_subsubject_name">
                                                                      <?php
                                                                      $sql4 = mysqli_query($conn,"select * from `exam_subsubject` where flag=1 AND exam_subsubject_status ='Active'");
                                                                    while( $subsubject = mysqli_fetch_array($sql4))
                                                                      { 
                                                                        
                                                                      ?>
                                                                    <option value="<?php echo $subsubject['sno'] ?>"> <?php echo $subsubject['exam_subsubject_name'] ?> </option>
                                                                    <?php
                                                                      }
                                                                      ?>       
                                                                  </select>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label> Chapter Name </label>
                                                                    <select class="form-control custom-select-value" id="exam_chapter_name" name="exam_chapter_name">
                                                                        <?php
                                                                        $sql5 = mysqli_query($conn,"select * from `exam_chapter` where flag=1 AND exam_chapter_status ='Active'");
                                                                      while( $chapter = mysqli_fetch_array($sql5))
                                                                        { 
                                                                          
                                                                        ?>
                                                                      <option value="<?php echo $chapter['sno'] ?>"> <?php echo $chapter['exam_chapter_name'] ?> </option>
                                                                      <?php
                                                                        }
                                                                        ?>       
                                                                    </select>

                                                                  
                                                                </div>

                                                                <div class="form-group">
                                                                 <label for="selector1" >Question</label>
                                                                  <textarea class="form-control"  name="question" id="area2" rows="10"  ><?php if(isset($_fetch['question'])){ echo $_fetch['question'];}?></textarea>
                                                                </div>
                                                              
                                                              <div class="form-group">
                                                                <label for="selector1" class="col-sm-2 control-label">Image</label>
                                                                  <input type="file" name="image" />
                                                             
                                                              </div>
                                                              
                                                              <div class="form-group">
                                                                <label for="selector1" class="col-sm-2 control-label">Ans - A</label>
                                                              
                                                                  <textarea class="form-control"  name="answer_a" id="area2" rows="2"  ><?php if(isset($_fetch['answer_a'])){ echo $_fetch['answer_a'];}?></textarea>
                                                              
                                                                
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="selector1" class="col-sm-2 control-label">Ans - A Image</label>
                                                             
                                                                  <input type="file" name="img_a" />
                                                                  
                                                             
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="selector1" class="col-sm-2 control-label">Ans - B</label>
                                                              
                                                                  <textarea class="form-control"  name="answer_b" id="area2" rows="2"  ><?php if(isset($_fetch['answer_b'])){ echo $_fetch['answer_b'];}?></textarea>
                                                              
                                                                
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="selector1" class="col-sm-2 control-label">Ans - B Image</label>
                                                              
                                                                  <input type="file" name="img_b" />
                                                                  
                                                              
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="selector1" class="col-sm-2 control-label">Ans - C</label>
                                                              
                                                                  <textarea class="form-control"  name="answer_c" id="area2" rows="2"  ><?php if(isset($_fetch['answer_c'])){ echo $_fetch['answer_c'];}?></textarea>
                                                                
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="selector1">Ans - C Image</label>
                                                              
                                                                  <input type="file" name="img_c" />
                                                                  
                                                              
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="selector1">Ans - D</label>

                                                                  <textarea class="form-control"  name="answer_d" id="area2" rows="2"  ><?php if(isset($_fetch['answer_d'])){ echo $_fetch['answer_d'];}?></textarea>

                                                                
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="selector1">Ans - D Image</label>
                                                                
                                                                  <input type="file" name="img_d" />
                                                                  
                                                                
                                                              </div>
                                                              <div class="form-group">
                                                                      <label for="selector1">Correct Ans</label>
                                                                      
                                                                        <select name="correct_ans" class="form-control1">
                                                                          
                                                                          <option value="1" <?php if(isset($_fetch['correct_ans']) && $_fetch['correct_ans']=="1"){echo "selected"; } ?>>Ans - A</option>
                                                                          <option value="2" <?php if(isset($_fetch['correct_ans']) && $_fetch['correct_ans']=="2"){echo "selected"; } ?>>Ans - B</option>
                                                                          <option value="3" <?php if(isset($_fetch['correct_ans']) && $_fetch['correct_ans']=="3"){echo "selected"; } ?>>Ans - C</option>
                                                                          <option value="4" <?php if(isset($_fetch['correct_ans']) && $_fetch['correct_ans']=="4"){echo "selected"; } ?>>Ans - D</option>
                                                                        </select>
                                                                      
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="selector1">Explanation Video</label>
                                                                      
                                                                        <select name="exp_video" class="form-control1">
                                                                          
                                                                          <option value="No" <?php if(isset($_fetch['exp_video']) && $_fetch['exp_video']=="No"){echo "selected"; } ?>>No</option>
                                                                          <option value="Yes" <?php if(isset($_fetch['exp_video']) && $_fetch['exp_video']=="Yes"){echo "selected"; } ?>>Yes</option>
                                                                        </select>
                                                                      
                                                                      
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                      <label for="selector1">Explanation</label>
                                                                      
                                                                        <textarea class="form-control"  name="description" id="area1" rows="10"  ><?php if(isset($_fetch['description'])){ echo $_fetch['description'];}?></textarea>
                                                                      
                                                                      
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="selector1">Explanation Image</label>
                                                                      
                                                                        <input type="file" name="img_ex" />
                                                                        
                                                                      
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="selector1">Mark </label>
                                                                      
                                                                        <input type="number" name="mark"  value="<?=isset($_fetch['mark'])?$_fetch['mark']:1;?>" class="form-control1">
                                                                        
                                                                      
                                                                    </div>
                                                                    <div class="form-group">
                                                                      <label for="selector1">Mode of Question</label>
                                                                      
                                                                        <select name="mode" class="form-control1">
                                                                          
                                                                          <option value="Easy" <?php if(isset($_fetch['mode']) && $_fetch['mode']=="Easy"){echo "selected"; } ?>>Easy</option>
                                                                          <option value="Normal" <?php if(isset($_fetch['mode']) && $_fetch['mode']=="Normal"){echo "selected"; } ?>>Normal</option>
                                                                          <option value="Hard" <?php if(isset($_fetch['mode']) && $_fetch['mode']=="Hard"){echo "selected"; } ?>>Hard</option>
                                                                          
                                                                        </select>
                                                                      
                                                                    </div>
                                                                    
                                                                    <div class="form-group">
                                                                      <label for="selector1">Status</label>
                                                                     
                                                                        <select name="status" class="form-control1" required>
                                                                          <option value="">Select</option>
                                                                          <option value="Active" <?=(isset($_fetch['status']) && $_fetch['status']=="Active")?"selected":"selected";?>>Active</option>
                                                                          <option value="Deactive" <?php if(isset($_fetch['status']) && $_fetch['status']=="Deactive"){echo "selected"; } ?>>Deactive</option>
                                                                          
                                                                        </select>
                                                                     
                                                                    </div>






                                                                 <!-- <div class="form-group">
                                                                    <label> Chapter Status </label>
                                                                      <div class="form-select-list">
                                                                        <select class="form-control custom-select-value" name="exam_chapter_status">
                                                                        <option value="Active" <?php if(@$_fetch['exam_chapter_status']=="Active"){echo "selected"; } ?>>Active</option>
                                                                        <option value="De-Active" <?php if(@$_fetch['exam_chapter_status']=="De-Active"){echo "selected"; } ?>>De-Active</option>
                                                                        </select>
                                                                     </div>
                                                                  </div> -->
                                                                  <input type="hidden" name="sno" value="<?php if(isset($_fetch['sno'])){ echo $_fetch['sno'];}?>">
                                                                  <input type="hidden" name="oldimage" value="<?php if(isset($_fetch['image'])){ echo $_fetch['image'];}?>">
                                                                  
                                                                  <input type="hidden" name="oldimg_a" value="<?php if(isset($_fetch['img_a'])){ echo $_fetch['img_a'];}?>">
                                                                  <input type="hidden" name="oldimg_b" value="<?php if(isset($_fetch['img_b'])){ echo $_fetch['img_b'];}?>">
                                                                  <input type="hidden" name="oldimg_c" value="<?php if(isset($_fetch['img_c'])){ echo $_fetch['img_c'];}?>">
                                                                  <input type="hidden" name="oldimg_d" value="<?php if(isset($_fetch['img_d'])){ echo $_fetch['img_d'];}?>">
                                                                  <input type="hidden" name="oldimg_ex" value="<?php if(isset($_fetch['oldimg_ex'])){ echo $_fetch['oldimg_ex'];}?>">
                                                              </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
																	                              <input type="hidden" name="sno" value="<?=@$_fetch['sno'];?>">
									
                                                                    <button type="submit" name="exam_question" value="<?php echo @$_GET['act']=="Edit"?"Update":"Save";?>" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
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
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   
</body>

</html>