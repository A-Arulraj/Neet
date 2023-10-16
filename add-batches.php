<?php
	include('includes/session.php');
	include('config.php');
	if(isset($_REQUEST['act']))
	{
		$sno = $_REQUEST['sno'];
		$sql1 = mysqli_query($conn,"select * from `exam_bathes` where `sno` ='$sno'");
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
                                              <a href="all-subsubject.php" class="btn btn-primary">View Batches</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Add Batches</span>
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
                                <li class="active"><a href="#description">Batches Details</a></li>
                               
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="model/exam_batch.php" method="post" autocomplete="off">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                              
																                                <label> Cource Name </label>
                                                                   
                                                                  <select class="form-control custom-select-value" name="batch_course_name">
                                                                       
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




                                                                <!-- <div class="form-group">                                                              
                                                              <label> Subject Name </label>                                                                 
                                                                <select class="form-control custom-select-value" name="exam_subject_name">
                                                                  <?php
                                                                   $sql3 = mysqli_query($conn,"select * from `exam_subject` where flag=1 AND exam_subject_status='Active'");                                                                  
                                                                 while( $subject = mysqli_fetch_array($sql3))
                                                                  {                                                                    
                                                                  ?>
                                                                 <option value="<?php echo $subject['sno'] ?>"> <?php echo $subject['batch_subject_name'] ?> </option>
                                                                <?php
                                                                  }                                                                 
                                                                  ?>       
                                                              </select>                                                              
                                                              </div> -->
                                                                
                                                                <div class="form-group">
																                                <label> Batch Name </label>
                                                                    <input name="batch_name" type="text" class="form-control" placeholder="Batch Name" value="<?=@$_fetch['batch_name'];?>">
                                                                </div>

                                                                <div class="form-group">
																                                <label> Start Date </label>
                                                                    <input name="batch_startdate" type="date" class="form-control" placeholder="Exam Name" value="<?=@$_fetch['batch_startdate'];?>">
                                                                </div>

                                                                <div class="form-group">
																                                <label> Duration </label>
                                                                    <input name="batch_duration" type="number" class="form-control" placeholder="Batch Duration" value="<?=@$_fetch['batch_duration'];?>">
                                                                </div>

                                                                <div class="form-group">
																                                <label> No.of. Students </label>
                                                                    <input name="batch_students" type="number" class="form-control" placeholder="No of Students" value="<?=@$_fetch['batch_students'];?>">
                                                                </div>

                                                                 <div class="form-group">
																                                   <label> Sub Subjects Status </label>
                                                                    <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" name="batch_status">
                                                                  <option value="Active" <?php if(@$_fetch['batch_status']=="Active"){echo "selected"; } ?>>Active</option>
                                                                  <option value="De-Active" <?php if(@$_fetch['batch_status']=="De-Active"){echo "selected"; } ?>>De-Active</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div class="form-group">
																                                <label> Description </label>
                                                                    <textarea name="batch_description" placeholder="Description"><?=@$_fetch['batch_description'];?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
																	                              <input type="hidden" name="sno" value="<?=@$_fetch['sno'];?>">
									
                                                                    <button type="submit" name="batch" value="<?php echo @$_GET['act']=="Edit"?"Update":"Save";?>" class="btn btn-primary waves-effect waves-light">Submit</button>
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