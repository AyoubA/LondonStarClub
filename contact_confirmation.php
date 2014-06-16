
<?php
	
	$name= $_POST['name'];
	$email =$_POST['email'];
	$telephone =$_POST['telephone'];
	$messege =$_POST['messege'];
	
	
	
	$Subject="customer";
	$header ="From: $name <$EmailFrom>";	
	$toEmail ="mohamed25007@gmail.com";
	
	$sent =mail($toEmail, $Subject, $messege, $header );
	
	header("Location: ContactUs.html");
	die();
	
	
	
?>

