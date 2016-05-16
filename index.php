<?php
include 'function.php';

render('userForm.php');
if (isset($_POST['register'])) {
	if (isset($_POST["password"])&&trim($_POST["password"]) != "") {
		$password= trim($_POST["password"]);
		$password= md5(htmlspecialchars("$password")) ;
		
	}
	if (isset($_POST["email"])&&trim($_POST["email"]) != "") {
		$email= trim($_POST["email"]);
		$email= htmlspecialchars("$email");
		
	}
	if (isset($_POST["rePassword"])&&trim($_POST["rePassword"]) != "") {
		$rePassword= trim($_POST["rePassword"]);
		$rePassword= md5(htmlspecialchars("$rePassword"));
		
	} 
	
	if (strlen($password)>0&&strlen($email)>0) {
		if ($password==$rePassword) {
				$user= array("email" =>"$email","password" =>"$password" );
				   $fp = fopen('results.json', 'w');
						fwrite($fp, json_encode($user));
						fclose($fp);
		}
	
	} 

	
}
if (isset($_POST['mailSend'])) {
	if (isset($_POST["sendMail"])&&trim($_POST["sendMail"]) != "") {
		$sendMail= trim($_POST["sendMail"]);
		$sendMail= htmlspecialchars("$sendMail");
		$newPass=randomPssword();
		
	     $to = "$sendMail";
         $subject = "New password";
         $message = "Your new password: $newPass";
         
         $header = "From:abc@abv.bg \r\n";
         $header .= "Cc:admin@abv.bg \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
		
	}
}





