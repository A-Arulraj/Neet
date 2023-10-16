<?php
	include('includes/session.php');
	include('config.php');
	if(isset($_REQUEST['act']))
	{
		$sno = $_REQUEST['sno'];
		$sql1 = mysqli_query($conn,"select * from `exam_student` where `sno` ='$sno'");
		$_fetch = mysqli_fetch_array($sql1);
// print_r($_fetch);
// exit;
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
                                              <a href="all-student.php" class="btn btn-primary">View Student's</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Students</span>
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
                                <li class="active"><a href="#description">Student's Details</a></li>
                               
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="model/exam_student.php" method="post" autocomplete="off">
                                                        <div class="row">
                                                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                              <div class="form-group">
                                                                  <label>Name</label>
                                                                  <input type="text" class="form-control1" value="<?php echo(isset($_fetch['name']))? $_fetch['name']:'';?>" name="name"  autocomplete="off" required  onkeyup="this.value = this.value.toUpperCase(); "/></div>
                                                               </div>
                                                              
                                                              <div class="form-group">
                                                                <label>Qualification</label>
                                                                 <input type="text" class="form-control1" value="<?php echo(isset($_fetch['education']))? $_fetch['education']:'';?>" name="education"  autocomplete="off"  onkeyup="this.value = this.value.toUpperCase(); "/></div>
                                                              </div>
                                                              
                                                                <div class="form-group">
                                                                   <label> Cource Name </label>
                                                                    <select class="form-control custom-select-value" name="exam_course_name">
                                                                      <?php
                                                                      $sql2 = mysqli_query($conn,"select * from `exam_course` where flog=1 AND exam_course_status='Active'");
                                                                      
                                                                      //  print_r($courses);
                                                                      //  exit;
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
                                                                  <select class="form-control custom-select-value" name="exam_subject_name">
                                                                    <?php
                                                                    $sql3 = mysqli_query($conn,"select * from `exam_subject` where flag=1 AND exam_subject_status='Active'");
                                                                    
                                                                    //  print_r($courses);
                                                                    //  exit;
                                                                  while( $subject = mysqli_fetch_array($sql3))
                                                                    {
                                                                      
                                                                    ?>
                                                                  <option value="<?php echo $subject['sno'] ?>"> <?php echo $subject['exam_subject_name'] ?> </option>
                                                                        
                                                                  <?php
                                                                    }
                                                                  
                                                                    ?>       
                                                                 </select>
                                                              
                                                                </div>
                                                                
                                                              <!-- <div class="form-group">
																                                <label> Sub Subjects Name </label>
                                                                    <input name="exam_subsubject_name" type="text" class="form-control" placeholder="Sub Subject Name" value="<?=@$_fetch['exam_subsubject_name'];?>">
                                                                </div> -->
                                                                

                                                                <div class="form-group">
                                                                  <label for="selector1" class="col-sm-2 control-label">Date of Birth</label>
                                                                    <input type="date" name="dob" value="<?php echo(isset($_fetch['dob']))? $_fetch['dob']:'';?>"class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" >
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                   <label for="selector1" class="col-sm-2 control-label">Student Mobile No</label>
                                                                    
                                                                    <input type="text" autocomplete="off" class="required form-control"   maxlength="10" id="phone" onkeypress="return isNumber(event)" onblur="myFunction(this.value);" name="phone" value="<?php echo(isset($_fetch['phone']))? $_fetch['phone']:'';?>"required>
                                                                    <span style="color:red;font-weight:bold;font-size: 14px;" id="mobile_info"></span>
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                  <label>Whats App No</label>
                                                                    <input type="text" autocomplete="off" class="required form-control"   maxlength="10" id="parent" onkeypress="return isNumber(event)"  name="mobile1" value="<?php echo(isset($_fetch['mobile1']))? $_fetch['mobile1']:'';?>">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="selector1" class="col-sm-2 control-label">UPI Transanction ID</label>
                                                                    <input type="text" autocomplete="off" class="required form-control" name="upiid" value="<?php echo(isset($_fetch['upiid']))? $_fetch['upiid']:'';?>">
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="selector1" class="col-sm-2 control-label">Communication Address</label>
                                                                   <textarea class="required form-control" name="com_address" id="com_address"  placeholder="Full Communication Address"><?php echo(isset($_fetch['com_address']))? $_fetch['com_address']:'';?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="selector1" class="col-sm-2 control-label">Email Id</label>
                                                                    <input type="text" autocomplete="off" class="required form-control"  name="email" id="email"   onblur="emailid(this.value);" value="<?php echo(isset($_fetch['email']))? $_fetch['email']:'';?>">
                                                                  <span style="color:red;font-weight:bold;font-size: 14px;" id="email_info" ></span></div>
                                                                  
                                                                </div>
                                                                <div class="form-group">
                                                                  <label for="selector1" class="col-sm-2 control-label">Material</label>
                                                                    <select name="matrial" class="form-control1" required>
                                                                      <option value="">Select</option>
                                                                      <option value="Yes" <?php if(isset($_fetch['matrial']) && $_fetch['matrial']=="Yes"){echo "selected"; } ?>>Yes</option>
                                                                      <option value="No" <?php if(isset($_fetch['matrial']) && $_fetch['matrial']=="No"){echo "selected"; } ?>>No</option>
                                                                      
                                                                    </select>
                                                                  </div>
                                                               
                                                               
                                                                 <div class="form-group">
																                                   <label> Student Status </label>
                                                                    <div class="form-select-list">
                                                                      <select class="form-control custom-select-value" name="exam_student_status">
                                        
                                                                        <option value="Active" <?php if(@$_fetch['exam_student_status']=="Active"){echo "selected"; } ?>>Active</option>
                                                                        <option value="De-Active" <?php if(@$_fetch['exam_student_status']=="De-Active"){echo "selected"; } ?>>De-Active</option>
                                                                        
                                                                      </select>
                                                                    </div>
                                                                 </div>
                                                                <!-- <div class="form-group">
																                                <label> Description </label>
                                                                    <textarea name="exam_subsubject_description" placeholder="Description"><?=@$_fetch['exam_subsubject_description'];?></textarea>
                                                                </div> -->
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                <label for="selector1" class="control-label">Purpose of Joined</label><br>
                                                                <?php 
                                                                  $purpose_array = array('');
                                                                  if(!Empty($_fetch['purpose']))
                                                                  {
                                                                    $purpose_array = explode(",", $_fetch['purpose']);
                                                                  }
                                                                ?>
                                                                  <input type="checkbox" name="purpose[]" value="Online Exam" <?=((isset($_GET['cl'])  && ($_GET['cl']=='oe') ) || in_array('Online Exam', $purpose_array))?'checked':'';?> > Online Exam <br>
                                                                  <input type="checkbox" name="purpose[]" value="Online Class" <?=in_array('Online Class', $purpose_array)?'checked':'';?> > Online Class <br>
                                                                  <input type="checkbox" name="purpose[]" value="Daily Test" <?=((isset($_GET['cl'])  && ($_GET['cl']=='dt') ) ||  in_array('Daily Test', $purpose_array))?'checked':'';?>> Daily Test <br>
                                                                  
                                                                <label for="selector1" class="control-label">Online Class</label><br>
                                                                                      
                                                              </div>
                                                              <input type="hidden" name="videos[]" value="0">
                                                              <div class="form-group">
                                                                <label for="selector1" class="col-sm-2 control-label">Validity From</label>
                                                                <div class="col-sm-4">											
                                                                  
                                                                  <input type="date" autocomplete="off" class="required form-control" name="validity_from" value="<?php echo(isset($_fetch['validity_from']))? $_fetch['validity_from']:'';?>">
                                                                  
                                                                </div>
                                                                
                                                              </div>
                                                              <div class="form-group">
                                                                <label for="selector1" class="col-sm-2 control-label">Validity TO</label>
                                                                <div class="col-sm-4">											
                                                                  
                                                                  <input type="date" autocomplete="off" class="required form-control" name="validity_to" value="<?php echo(isset($_fetch['validity_to']))? $_fetch['validity_to']:'';?>">
                                                                  
                                                                </div>
                                                                
                                                              </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
																	                              <input type="hidden" name="sno" value="<?=@$_fetch['sno'];?>">
									
                                                                    <button type="submit" name="Student" value="<?php echo @$_GET['act']=="Edit"?"Update":"Save";?>" class="btn btn-primary waves-effect waves-light">Submit</button>
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