<?php
if(isset($_POST['action']))
{
	$action=$_POST['action'];
	include('conn.php');
	if($action=="enquiry")
	{
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mobno=$_POST['contact'];
		$message=$_POST['message'];
		
		$query="insert into tbl_enquiry(name,email,contact,message) values('$name','$email','$mobno','$message')";


		echo "<script> window.location='contactus.php?msg=succenquiry'</script>";
	
	}
	
	if($action=="alumini")
	{
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$alumininame = $_POST['alumininame'];
		$aluminideptname = $_POST['aluminideptname'];
		$aluminiyearofpassing = $_POST['aluminiyearofpassing'];
		$aluminicurrentlyworkingin = $_POST['aluminicurrentlyworkingin'];
		$aluminimobileno = $_POST['aluminimobileno'];
		$aluminiemailId = $_POST['aluminiemailId'];
		
		$query="insert into tbl_alumini(alumininame,aluminideptname,aluminiyearofpassing,aluminicurrentlyworkingin,aluminimobileno,aluminiemailId) values('$alumininame','$aluminideptname','$aluminiyearofpassing','$aluminicurrentlyworkingin','$aluminimobileno','$aluminiemailId')";

		mysqli_query($conn,$query)  or die('Not Executed');

		echo "<script> window.location='contactus.php?msg=succalumini'</script>";

	}
}

		
?>