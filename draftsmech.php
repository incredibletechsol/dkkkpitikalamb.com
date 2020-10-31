<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php include('title.php'); ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">


    <link rel="stylesheet" type="text/css" href="css/switcher.css" media="screen" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!--Start Header-->
	<?php include('nav.php'); ?>
        <!--==-----------//Navigation------------>

        <div class="container page_head">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav id="breadcrumbs">
                        <ul>
                            <li>तुम्ही इथे आहात :</li>
                            <li><a href="#">&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a></li>
                            <li>ड्राफ्ट्समन मेकॅनिकल</li>
                        </ul>
                    </nav>
                </div>
            </div> <!--./row-->
        </div> <!--./Container-->
    </header>

		<section class="content left_sidebar">
			<div class="container">
				<div class="row">
					<!--Sidebar Widget-->
					<div class=" col-lg-4 col-sm-4 ">
						<div class="sidebar">
							<div class="Stylo-tab sidebar-tab">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#Popular" data-toggle="tab">News</a></li>
                                 </ul>

                                <div class="tab-content clearfix">
                                    <div class="tab-pane fade active in" id="Popular">
                                     <?php include('newsticker.php'); ?>     
                                    </div>
                                 
                                </div>
                            </div>
						</div>
					</div>
					
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
						<div class="blog_large">
		ड्राफ्ट्समन मेकॅनिकल या व्यवसायाबरोबरच मेकॅनिकल क्षेत्रामध्ये असणाऱ्या वेगवेगळ्या प्रकारच्या मोजमाप साहित्याचे रिडींग घेणे व त्या संदर्भात असणारे ड्रॉईंग यांचे वाचन करणे व जॉब ड्रॉईंगप्रमाणे  बनवणे यांचे ट्रेनिंग देऊन विद्यार्थी देशातच नव्हे तर देशाबाहेर पाठवणारी एकमेव  संस्था व त्या विद्यार्थ्यास पासपोर्ट काढून देण्यास मदत करणारी एकमेव नामांकित संस्था . या संस्थेतून ड्राफ्ट्समन  मेकॅनिकल  व  जॉब इन्स्पेक्टर पदावरती काम करणारे विद्यार्थी घडवले जातात.
<br><br>
<div id="slider" class="swipe">
								<ul class="swipe-wrap">
									<li><img src="practicals/b.jpg" alt="blog post"></li>
									<li><img src="practicals/b.jpg" alt="blog post"></li>
								</ul>
								<div class="swipe-navi">
								  <div class="swipe-left" onclick="mySwipe.prev()"><i class="fa fa-chevron-left"></i></div> 
								  <div class="swipe-right" onclick="mySwipe.next()"><i class="fa fa-chevron-right"></i></div>
								</div>
							</div>
						</div>
					</div>
						<?php include('tabslide.php'); ?>
				</div>
			</div>
		</section>
	</section>
	<!--end wrapper-->

	<?php include('footer.php'); ?>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/retina-1.1.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!-- jQuery cookie -->
    <script type="text/javascript" src="js/styleswitch.js"></script> <!-- Style Colors Switcher -->
    <script type="text/javascript" src="js/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jflickrfeed.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/swipe.js"></script>


    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
</body>
</html>