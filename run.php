<!DOCTYPE html>
<html>
<head>
	<title>Send Mail</title>
</head>
<body>
<div class="container">
	<h1 class="text-center">Sending Emails in PHP from localhost with SMTP</h1>
	<h2 class="text-center">Part-2: Using PHP Mailer</h2>
<?php
if(isset($_POST['sendmail']))
{
	require 'PHPMailerAutoload.php';
	require 'credential.php';
	$mail = new PHPMailer;

	$mail->SMTPDebug = 4;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
	$mail->Port = 587;                                    // Set the SMTP port
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = EMAIL;                // SMTP username
	$mail->Password = PASS;                  // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

	$mail->From = EMAIL;
	$mail->FromName = 'YOUR HELPERS';
	$mail->AddAddress($_POST['email']);  // Add a recipient
	$mail->addReplyTo(EMAIL);

	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'YOUR PASSWORD!';
	$mail->Body    = 'This mail is generated automatically. <strong>Password</strong><br><br>Thanks,<br>Team, Your Helpers';
	$mail->AltBody = $_POST['message'];

	if(!$mail->Send()) 
	{
   		echo 'Message could not be sent.';
   		echo 'Mailer Error: ' . $mail->ErrorInfo;
   		exit;
	}

	echo 'Message has been sent';
}
?>
<div class="row">
	<div class="col-md-9 col-md-offset-2">
		<form role="form" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-9 form-group">
					<label for="email">To Email:</label>
					<input type="email" class="form-control" id="email" name="email" maxlength="50">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9 form-group">
					<label for="subject">Subject:</label>
					<input type="text" class="form-control" id="subject" name="subject" maxlength="50">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9 form-group">
					<label for="name">Message:</label>
					<textarea class="form-control" type="textarea" id="message" name="message" placeholder="your message here" maxlength="6000" rows="5"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9 form-group">
					<button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button>
				</div>
			</div>
		</form>
	</div>
</div>
</body>
</html>