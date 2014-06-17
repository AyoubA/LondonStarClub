
<?php
	
	$name= $_POST['name'];
	$email =$_POST['email'];
	$telephone =$_POST['telephone'];
	$messege =$_POST['messege'];
	
	
	
	$Subject="customer";
	$header ="From: $name <$email>";	
	$toEmail ="julianmuk@hotmail.com";
	
	$sent =mail($toEmail, $Subject, $messege, $header );
	
$url = 'Contact.php';

$data = array('postdata' => 'message_sent');
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);

$context  = stream_context_create($options);

	header("Location: Contact.php");
	die();
	
	
	
?>

