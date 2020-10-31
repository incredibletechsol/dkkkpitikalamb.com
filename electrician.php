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
                            <li>इलेकट्रीशिअन </li>
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
		इलेकट्रीशिअन या व्यवसायामध्ये विद्यार्थ्याला इलेक्ट्रिक संदर्भात संपूर्णपणे थ्री फेज व सिंगल फेजसंबंधी प्रात्यक्षिक तसेच जनरेशन , ट्रान्समिशन  व डिस्ट्रीबुटनसंबंधी परिपूर्ण प्रात्यक्षिकांबरोबरच दुरुस्ती शिकवली जाते. सदर तयार झालेले कुशल कारागीर महाराष्ट्र शासनाच्या वितरण  जनरेशन  तसेच या खात्यांमध्ये कायम नोकरी मिळवू शकतात. तसेच केंद्र सरकारच्या रेल्वे खाते तसेच विमान वाहतूक खाते आणि औद्योगिक वसाहतीमध्ये (M.I.D.C.)
कायम नोकऱ्या मिळवू शकतात.त्याचप्रमाणे या  व्यवसायातील प्रशिक्षणार्थी स्वतः चा  व्यवसाय दुरुस्ती,घरगुती वायरिंग,इंडस्ट्रियल वायरिंग करू शकतात. <br><br>
<div id="slider" class="swipe">
								<ul class="swipe-wrap">
									<li><img src="practicals/e.jpg" alt="blog post"></li>
									<li><img src="practicals/e.jpg" alt="blog post"></li>
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