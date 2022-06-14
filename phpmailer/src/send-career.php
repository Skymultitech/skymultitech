<?php
	require_once('phpmailer/src/class.phpmailer.php');
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	error_reporting(1);	
	if(isset($_POST['email'])) {
	$email_to = "pankaj.acet.1994@gmail.com";
	$email_subject = "Apply for Job";
	//Errors to show if there is a problem in form fields.
	function died($error) {
		echo "We are sorry that we can procceed your request due to error(s)";
		echo "Below is the error(s) list <br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	// print_r($_POST['name']);
	// echo "$_POST['emaila']";
	// echo "$_POST['phone']";
	// echo "$_POST['web']";
	// echo "$_POST['message']";
	// validation expected data exists
	if(!isset($_POST['name']) ||
	!isset($_POST['email']) ||
	!isset($_POST['contact_no']) ||
	!isset($_POST['jobs']) ||
	!isset($_FILES['resume'])) {
		died('We are sorry to proceed your request due to error within form entries');   
	}

	$name = $_POST['name']; // required
	$email = $_POST['email']; // required
	$contact_no = $_POST['contact_no']; //  required
	$jobs = $_POST['jobs'];
	$resume = $_FILES['resume']; // required 
	$error_message = "";


	// $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A- -z]{2,4}$/';
	// if(!preg_match($email_exp,$email)) {
		
	// 	$error_message .= 'You entered an invalid email<br />';
	// }else{
		print_r($resume);
		echo $name."<br/>";
		echo $email."<br/>";
		echo $contact_no."<br/>";
		echo $jobs."<br/>";

		$f_tmp_name    = $_FILES['resume']['tmp_name']; // get the temporary file name of the file on the server 
    	$f_name        = $_FILES['resume']['name'];  // get the name of the file 
    	$f_size        = $_FILES['resume']['size'];  // get size of the file for size validation 
    	$f_type        = $_FILES['resume']['type'];  // get type of the file 
    	$f_error       = $_FILES['resume']['error']; // get the error (if any) 

		$email = new PHPMailer();
		$email->SetFrom('kanil3727@gmail.com', 'Anil kumar'); //Name is optional
		$email->Subject   = 'Message Subject';
		$email->Body      = "Test Mail";
		$email->AddAddress( 'pankaj.acet.1994@gmail.com' );

		$file_to_attach = $_FILES['resume']['temp_name'];

		$email->AddAttachment( $f_tmp_name , $f_name );

		return $email->Send();

		// $v = mail($email,"Mail From Website", $resume);
	// }
	if($v){
		echo "Yo";
	}else{
		echo "YoYi";

	}
}
