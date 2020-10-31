<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php include('title.php'); ?></title>

	<meta name="description" content="">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" data-name="skins">
	<script type="text/javascript" src="js/customalert.js"></script>
	<link rel="stylesheet" type="text/css" href="css/customalert.css" />
    <link rel="stylesheet" href="css/font-awesome.css">
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
							<li><a href="#">&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>
                            <li>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</li>
                        </ul>
                    </nav>
                </div>
            </div> <!--./row-->
        </div> <!--./Container-->
    </header>
	<!--start wrapper-->
	<section class="wrapper">
		<section class="content contact">
			<div class="container">
				
			<?php
			if(isset($_GET['msg']))
				{
					$param=$_GET['msg'];
					if($param=="succenquiry")
					 {
					 echo "<script>createCustomAlert('Thank You for Contacting Us..','','SUCCESS');</script>";
					 }
					if($param=="succalumini")
					 {
					 echo "<script>createCustomAlert('Thank You for Registering Us..','','SUCCESS');</script>";
					 } 
				}	 
			
			?>
			
				<div class="row sub_content">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="maps">
						<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA9G59lf61IxMTCcf8ZVJYckht_JbDJmVo'></script><div style='overflow:hidden;height:440px;width:950px;'><div id='gmap_canvas' style='height:440px;width:950px;'></div><div><small><a href="http://www.embedgooglemaps.com">Generate your Google map here, quick and easy!</a></small></div><div><small><a href="http://freedirectorysubmissionsites.com/">Find all web directories here!</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(18.024795035690495,74.78167785180666),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(18.024795035690495,74.78167785180666)});infowindow = new google.maps.InfoWindow({content:'<strong>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</strong><br>कळंब ,वालचंदनगर <br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
						</div>
					</div>
				</div>

				<div class="row sub_content">
					<div class="col-lg-4 col-md-4 col-sm-4 ">
	                    <div class="contact-widget">
                            <span>
                                <i class="fa fa-map-marker"></i>
                            </span>
                            <div class="dividerHeading">
                                <h4>पत्ता</h4>
                            </div>
                            <p>कळंब - वालचंदनगर ,ता.इंदापूर,जिल्हा पुणे,महाराष्ट्र.</p>
	                    </div>
					</div>
                    <div class="col-lg-4 col-md-4 col-sm-4 ">
                        <div class="contact-widget">
                            <span>
                                <i class="fa fa-phone"></i>
                            </span>
                            <div class="dividerHeading">
                                <h4>&#2347;&#2379;&#2344; &#2344;&#2306;</h4>
                            </div>
                            <p>02118 - 253020</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 ">
                        <div class="contact-widget">
                            <span>
                                <i class="fa fa-envelope-o"></i>
                            </span>
                            <div class="dividerHeading">
                                <h4>&#2312;-&#2350;&#2375;&#2354;</h4>
                            </div>
                            <p>iti932walchandnagar@yahoo.co.in</p>
                        </div>
                    </div>
				</div>
           
		</section>
	</section>
	<!--end wrapper-->

	<?php include('footer.php'); ?>
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
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


    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/view.contact.js"></script>
    <script type="text/javascript" src="js/jquery.gmap.js"></script>

    <script src="js/main.js"></script>

    <!-- Start Style Switcher -->
    <div class="switcher"></div>
    <!-- End Style Switcher -->
</body>
</html>
