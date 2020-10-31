<header>
  <?php
	$pageName = basename($_SERVER['PHP_SELF']);
        if($pageName == "index.php")
		{
?>
        <div id="top-info" class="clearfix" style="background-image:url('images/back.jpg')" align="center">
<?php
}
else {
?>
 <div id="top-info" class="clearfix" align="center">
<?php } ?>
        <a href="index.php"><img src="images/logo.png" class="logo"/></a>
        <!--
            <ul>
                <li><a href="" class="my-tweet"><i class="fa fa-twitter"></i></a></li>
                <li><a href="" class="my-facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="" class="my-skype"><i class="fa fa-skype"></i></a></li>
                <li><a href="" class="my-pint"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="" class="my-rss"><i class="fa fa-rss"></i></a></li>
                <li><a href="" class="my-google"><i class="fa fa-google-plus"></i></a></li>
            </ul>
            
            <span><i class="fa fa-phone"></i>&#2347;&#2379;&#2344; &#2344;&#2306; : 02118 - 253020</span>
            <span><i class="fa fa-envelope"></i>&#2312;-&#2350;&#2375;&#2354; : iti.kalamb@dkkkpitikalamb.com</span>-->
        </div>

      <!--  <div id="logo">
             <h1><a href="index.php"><img src="images/logo.png"/></a></h1>
        </div>
-->
<!--================================
            Navigation
-------------------------------------->

        <div class="navbar navbar-default navbar-static-top" role="navigation">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <div class="navbar-header visible-xs">
                    <div class="navbar-brand">Navigation Menu...</div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <ul class="nav navbar-nav">
                <?php
					
					  if($pageName == "index.php")
							{
							echo "<li class='active'><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
												
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
										echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";
							   	
							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}
					 if($pageName == "intro.php" || $pageName == "aboutdkkkp.php" || $pageName == "presidentsmessage.php" || $pageName == "secretarymessage.php" || $pageName == "ceomessage.php" || $pageName == "activities.php" || $pageName == "principalmessage.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li class='active'><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}
					if($pageName == "trades.php" || $pageName == "welder.php" || $pageName == "mechdesiel.php" || $pageName == "fitter.php" || $pageName == "electrician.php" || $pageName == "draftsmech.php" || $pageName == "paintergeneral.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li class='active'><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}	
					if($pageName == "admissions.php" || $pageName == "brochure.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li class='active'><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}	
					if($pageName == "teaching.php" || $pageName == "nonteaching.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li class='active'><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
									echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>&#2335;&#2381;&#2352;&#2366;&#2344;&#2381;&#2360;&#2346;&#2379;&#2352;&#2381;&#2335;</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}	
					if($pageName == "overview.php" || $pageName == "recruiters.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li class='active'><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}	
                    		
						if($pageName == "gallery.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li class='active'><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}	
                    		
                    		if($pageName == "alumini.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li class='active'><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}	
                    	
						if($pageName == "computerlab.php" || $pageName == "library.php" || $pageName == "boyshostel.php" || $pageName == "transport.php" || $pageName == "canteen.php" || $pageName == "guesthouse.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li class='active'><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}	
                                       		
						if($pageName == "contactus.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";

							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li class='active'><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}		
					if($pageName == "allnews.php")
							{
							echo "<li><a href='index.php'>&#2350;&#2369;&#2326;&#2381;&#2351; &#2346;&#2366;&#2344;</a></li>";
							echo "<li><a href='#'>&#2310;&#2350;&#2330;&#2381;&#2351;&#2366;&#2348;&#2342;&#2381;&#2342;&#2354;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='intro.php'><img src='images/arrow.png' border='0'>&#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;</a></li>";
									echo "<li><a href='aboutdkkkp.php'><img src='images/arrow.png' border='0'>&#2332;&#2381;&#2334;&#2366;&#2344;, &#2325;&#2354;&#2366; ,&#2325;&#2381;&#2352;&#2368;&#2337;&#2366; &#2357; &#2325;&#2371;&#2359;&#2367; &#2346;&#2381;&#2352;&#2340;&#2367;&#2359;&#2381;&#2336;&#2366;&#2344;   </a></li>";
									echo "<li><a href='presidentsmessage.php'><img src='images/arrow.png' border='0'>अध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='secretarymessage.php'><img src='images/arrow.png' border='0'>&#2360;&#2330;&#2367;&#2357;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340;</a></li>";
									echo "<li><a href='ceomessage.php'><img src='images/arrow.png' border='0'>कार्याध्यक्षांचे मनोगत</a></li>";
									echo "<li><a href='principalmessage.php'><img src='images/arrow.png' border='0'>&#2346;&#2381;&#2352;&#2366;&#2330;&#2366;&#2352;&#2381;&#2351;&#2366;&#2306;&#2330;&#2375; &#2350;&#2344;&#2379;&#2327;&#2340; </a></li>";
								echo "</ul>";
							echo "</li>";
							
								echo "<li><a href='trades.php'>&#2335;&#2381;&#2352;&#2375;&#2337;&#2360;</a>";
                                                        echo "<ul class='dropdown-menu'>";
echo "<li><a href='welder.php'><img src='images/arrow.png' border='0'>वेल्डर</a></li>"; 
echo "<li><a href='mechdesiel.php'><img src='images/arrow.png' border='0'>मेकॅनिक डिझेल</a></li>"; 
echo "<li><a href='fitter.php'><img src='images/arrow.png' border='0'>फिटर</a></li>"; 
echo "<li><a href='electrician.php'><img src='images/arrow.png' border='0'>इलेकट्रीशिअन</a></li>"; 
echo "<li><a href='draftsmech.php'><img src='images/arrow.png' border='0'>ड्राफ्ट्समन मेकॅनिकल</a></li>"; 
echo "<li><a href='paintergeneral.php'><img src='images/arrow.png' border='0'>पेंटर जनरल</a></li>"; 
                                                        echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2346;&#2381;&#2352;&#2357;&#2375;&#2358;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='admissions.php'><img src='images/arrow.png' border='0'>नियम</a></li>";
									echo "<li><a href='brochure.php'><img src='images/arrow.png' border='0'>माहितीपत्रक </a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2309;&#2343;&#2381;&#2351;&#2366;&#2346;&#2325; &#2357;&#2352;&#2381;&#2327;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='teaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325; &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
									echo "<li><a href='nonteaching.php'><img src='images/arrow.png' border='0'>&#2358;&#2367;&#2325;&#2381;&#2359;&#2325;&#2375;&#2340;&#2352;  &#2325;&#2352;&#2381;&#2350;&#2330;&#2366;&#2352;&#2368;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='#'>&#2325;&#2373;&#2350;&#2381;&#2346;&#2360; &#2311;&#2306;&#2335;&#2352;&#2357;&#2381;&#2361;&#2367;&#2319;&#2357; </a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='overview.php'><img src='images/arrow.png' border='0'>&#2340;&#2346;&#2358;&#2368;&#2354;</a></li>";
									echo "<li><a href='recruiters.php'><img src='images/arrow.png' border='0'>&#2344;&#2366;&#2350;&#2357;&#2306;&#2340; &#2325;&#2306;&#2346;&#2344;&#2381;&#2351;&#2366;</a></li>";
							   echo "</ul>";
							echo "</li>";
							
							echo "<li><a href='alumini.php'>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</a></li>";
							echo "<li><a href='#'>&#2360;&#2379;&#2351;&#2368;&#2360;&#2369;&#2357;&#2367;&#2343;&#2366;</a>";
								echo "<ul class='dropdown-menu'>";
									echo "<li><a href='computerlab.php'><img src='images/arrow.png' border='0'>&#2360;&#2306;&#2327;&#2339;&#2325; &#2354;&#2373;&#2348;</a></li>";
									echo "<li><a href='library.php'><img src='images/arrow.png' border='0'>&#2354;&#2366;&#2351;&#2348;&#2381;&#2352;&#2352;&#2368;</a></li>";
									echo "<li><a href='guesthouse.php'><img src='images/arrow.png' border='0'>&#2327;&#2375;&#2360;&#2381;&#2335; &#2361;&#2366;&#2314;&#2360;</a></li>";
										echo "<li><a href='boyshostel.php'><img src='images/arrow.png' border='0'>&#2350;&#2369;&#2354;&#2366;&#2306;&#2330;&#2375; &#2357;&#2360;&#2340;&#2367;&#2327;&#2371;&#2361;</a></li>";
									echo "<li><a href='transport.php'><img src='images/arrow.png' border='0'>बस सुविधा</a></li>";	
									echo "<li><a href='canteen.php'><img src='images/arrow.png' border='0'>&#2350;&#2375;&#2360; &#2310;&#2339;&#2367; &#2325;&#2373;&#2344;&#2381;&#2335;&#2368;&#2344;</a></li>";	
							   echo "</ul>";
							echo "</li>";
							echo "<li><a href='gallery.php'>&#2347;&#2379;&#2335;&#2379; &#2360;&#2350;&#2370;&#2361;</a></li>";
							echo "<li><a href='contactus.php'>&#2360;&#2306;&#2346;&#2352;&#2381;&#2325;</a></li>";
                    		}			
                 ?>   		
                </ul>
            </div>
        </div>