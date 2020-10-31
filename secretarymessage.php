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
                            <li><a href="#">&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a></li>
                            <li>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</li>
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
								<div id="myTabContent1" class="tab-content clearfix">
									<div class="tab-pane fade active in" id="Popular">
									   <p align="left"><img src="images/secretary.jpg" width="325" height="400" border="0"></p>
										<p align="justify"><b>श्री.दत्तात्रय फडतरे<br>
										सचिव </b></p>
									</div>
								</div>

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
							<p align="justify">
							आजच्या स्पर्धेच्या युगात टिकण्यासाठी विद्यार्थी सर्वगुण संपन्न असला पाहिजे. आमच्या औद्योगिक प्रशिक्षण संस्थेतील विद्यार्थी हा ज्ञान, कला , क्रीडा व कृषी प्रतिष्ठान क्षेत्रात सर्वगुण संपन्न झाला पाहिजे हे आमचे मुख्य ध्येय आहे. जगाच्या पाठीवरती यासाठी आमचे व्यवस्थापन या शिक्षकवर्ग सदैव जागृत असतो. त्यामुळे या संस्थेतील विद्यार्थी हा उच्चमत गुणवतेचाच असेल याची आह्माला पूर्ण खात्री आहे.म्हणूनच आह्मी आमच्या विद्यार्थीना 100 टक्के नोकरीची हमी देतो.      
							</p>
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