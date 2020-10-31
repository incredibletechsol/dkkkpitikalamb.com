<?php
$pageName = basename($_SERVER['PHP_SELF']);
if($pageName == "index.php")
	{
	echo "Admin : &#2324;&#2342;&#2381;&#2351;&#2379;&#2327;&#2367;&#2325; &#2346;&#2381;&#2352;&#2358;&#2367;&#2325;&#2381;&#2359;&#2339; &#2360;&#2306;&#2360;&#2381;&#2341;&#2366;";
	}
if($pageName == "faculty.php")
	{
	echo "Faculty";
	}	
if($pageName == "gallery.php")
	{
	echo "Gallery";
	}	
if($pageName == "news.php")
	{
	echo "News";
	}
if($pageName == "alumini.php")
	{
	echo "Alumini";
	}	
?>