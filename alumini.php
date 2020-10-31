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
	
	<script type="text/javascript">

	function setColor(el, bg) 
		{
		  if (el.style) el.style.backgroundColor = bg;
		}
		
	function checkInput(form) 
		{
		  var bgBad = "#FF9999";
		  var bgGood = "#66FFCC";
		  var valid = true;
		  var errmsg="";
		  
		 /* Name Validation */ 		  
		 if (form.alumininame.value == "") {
			error_alumininame.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Your Name";
			setTimeout(function () {error_alumininame.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_alumininame.innerHTML ="";
			setColor(form.alumininame, bgGood);
		  }
			  
		  /* Department Name validation */ 		  
		 if (form.aluminideptname.value == "") {
			error_aluminideptname.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Your Department Name";
			setTimeout(function () {error_aluminideptname.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminideptname.innerHTML ="";
			setColor(form.aluminideptname, bgGood);
		  }
		  
		  /* Year Of Passing validation */ 		  
		 if (form.aluminiyearofpassing.value == "") {
			error_aluminiyearofpassing.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter Your Year Of Passing";
			setTimeout(function () {error_aluminiyearofpassing.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminiyearofpassing.innerHTML ="";
			setColor(form.aluminiyearofpassing, bgGood);
		  }
		  
		  /* Where you are Currently Working validation */ 		  
		 if (form.aluminicurrentlyworkingin.value == "") {
			error_aluminicurrentlyworkingin.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter where you are Currently Working";
			setTimeout(function () {error_aluminicurrentlyworkingin.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminicurrentlyworkingin.innerHTML ="";
			setColor(form.aluminicurrentlyworkingin, bgGood);
		  }
		  
		   /* Mobile No validation */ 		  
		 if (form.aluminimobileno.value == "") {
			error_aluminimobileno.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Mobile No";
			setTimeout(function () {error_aluminimobileno.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminimobileno.innerHTML ="";
			setColor(form.aluminimobileno, bgGood);
		  }
		  
		  /* Email Id validation */ 		  
		 if (form.aluminiemailId.value == "" ) {
			error_aluminiemailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter your Email Address";
			setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
			valid = false;
		  } else {
			error_aluminiemailId.innerHTML ="";
			setColor(form.aluminiemailId, bgGood);
		  } 
				  
		if (document.addalumini.aluminiemailId.value != " ")
		{
			var checkOK="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-@._";
			var checkStr = document.addalumini.aluminiemailId.value;
			var allValid = 'true';
			for (i = 0;  i < checkStr.length+1;  i++)
			{
	
			ch = checkStr.charAt(i);
				for (j = 0;  j < checkOK.length+1;  j++)
				{
					if (ch == checkOK.charAt(j))
					break;
					if (j == checkOK.length)
					{
						allValid = 'false';
						break;
					}
				}
			}
		}
	
		if(document.addalumini.aluminiemailId.value != "")
		{
			var val=document.addalumini.aluminiemailId.value ;
			var pass1=val.indexOf('@',0);
			if(pass1==-1)
			{
				error_aluminiemailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
				document.addalumini.aluminiemailId.value="";
				document.addalumini.aluminiemailId.focus();
				return false;
			}
		}

		if(document.addalumini.aluminiemailId.value != "")
		{
			var val=document.addalumini.aluminiemailId.value ;
			var pass2=val.indexOf('.',0);
			if(pass2==-1)
			{
				error_aluminiemailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
				document.addalumini.aluminiemailId.value="";
				document.addalumini.aluminiemailId.focus();
				return false;
			}
			if((pass2 - pass1)== 1)
			{
				error_aluminiemailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
				setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
				document.addalumini.aluminiemailId.value="";
				document.addalumini.aluminiemailId.focus();
				return false;
			}
		}

		if (!allValid)
		{
			error_emailId.innerHTML ="<img src='images/delete.gif' border='0'>&nbsp;&nbsp;Please enter valid Email Address";
			setTimeout(function () {error_aluminiemailId.innerHTML =""}, 10000);
			document.addalumini.aluminiemailId.focus();
			return false;
		}
					  
		return valid;
		}
		
		
	function isNumberKey(evt)
       {
		  var chCode = (evt.which) ? evt.which : event.keyCode
		  if (chCode != 46 && chCode > 31 
			&& (chCode < 48 || chCode > 57))
			 return false;
		  else
		  return true;
       }
		       
    function isAlpha(keyCode)
       {
         return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
       }
	   
	function save()
		{
		var b=new Boolean();	
		b=checkInput(document.addalumini);
		if (!b) 
			{
			ERROR.innerHTML ="<h4><img src='images/cross.png' border='0'>&nbsp;&nbsp;Error : Please correct the fields and try submitting again</h4>";
			setTimeout(function () {ERROR.innerHTML =""}, 12000);
			}
		else
			{
			document.addalumini.action="enq.php?msg=succalumini";
			document.addalumini.submit();			
			}
		}   
	</script>
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
                            <li>&#2350;&#2366;&#2332;&#2368; &#2357;&#2367;&#2342;&#2381;&#2351;&#2366;&#2352;&#2381;&#2341;&#2368;</li>
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
							<DIV id="ERROR" style="color:red;font-weight:bold;"></DIV>
							<form name="addalumini" method="post">
							<input type="hidden" name="action" value="alumini">
							<table border=0 style="padding-bottom: 20px;" cellpadding="5" border="0" cellspacing="0" width="80%" height="210">
									<tr>
										<td height="49" width="312"><b>*Name</b></td>
										<td height="49"><b>:</b></td>
											<td height="49" width="755">
											<DIV id="error_alumininame" style="color:red;"></DIV><br>
											<input name="alumininame" type="text" class="form-control" id="alumininame">
											</td>
										<td width="0" valign="top" height="49"></td>		
									</tr>
									
									<tr>
										<td height="49" width="312"><b>*Department Name</b></td>
										<td height="49"><b>:</b></td>
											<td height="49" width="755">
											<DIV id="error_aluminideptname" style="color:red;"></DIV><br>
											<input name="aluminideptname" type="text" class="form-control" id="aluminideptname" />
											</td>
										<td width="0" valign="top" height="49"></td>		
									</tr>
																	
									<tr>
										<td height="41" width="312"><b>*Year Of Passing</b></td>
										<td height="41"><b>:</b></td>
											<td height="41" width="755">
											<DIV id="error_aluminiyearofpassing" style="color:red;"></DIV><br>
											<input name="aluminiyearofpassing" type="text"  class="form-control" id="aluminiyearofpassing" maxlength="4"/>
											</td>
										<td width="0" valign="top" height="41"></td>		
									</tr>
									
									<tr>
										<td height="41" width="312"><b>*Currently Working In</b></td>
										<td height="41"><b>:</b></td>
											<td height="41" width="755">
											<DIV id="error_aluminicurrentlyworkingin" style="color:red;"></DIV><br>
											<input type="text" size="12" id="aluminicurrentlyworkingin" class="form-control" style="width:150px;" name="aluminicurrentlyworkingin"/></td>
										<td width="0" valign="top" height="41"></td>		
									</tr>
									
									<tr>
										<td height="49" width="312"><b>*Mobile No</b></td>
										<td height="49"><b>:</b></td>
											<td height="49" width="755">
											<DIV id="error_aluminimobileno" style="color:red;"></DIV><br>
											<input name="aluminimobileno" type="text" class="form-control" id="aluminimobileno" />
											</td>
										<td width="0" valign="top" height="49"></td>		
									</tr>
									
									<tr>
										<td height="49" width="312"><b>*Email Address</b></td>
										<td height="49"><b>:</b></td>
										<td height="49" width="755">
										<DIV id="error_aluminiemailId" style="color:red;"></DIV><br>
										<input name="aluminiemailId" type="text" class="form-control" id="aluminiemailId" />
										</td>
										<td width="0" valign="top" height="49"></td>		
									</tr>
								
									<tr>
										<td width="312"></td>
										<td></td>
										<td width="755"><a href="#" class="btn btn-primary"  onClick="save();">Submit</a></td>
										<td width="0" valign="top"></td>		
									</tr>	
								</table>
							</form>	
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