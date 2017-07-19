<?PHP
//contact
require_once('../config.php');
$_SESSION['title'] = "Contact Us";
require_once('../parts/head.php');
require_once('../parts/navbar.php');
require('PHPMailerAutoload.php');
if(isset($_POST['email']) and isset($_POST['message']) and isset($_POST['subject']) and isset($_POST['name'])){
		
	require 'PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	//Set who the message is to be sent from
	$mail->setFrom($_POST['email'], $_POST['name']);
	//Set who the message is to be sent to
	$mail->addAddress('test@test.test', 'John Doe');
	//Set the subject line
	$mail->Subject = $_POST['subject'];
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->Body = $_POST['message'];


	//send the message, check for errors
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}
}
?>
<body>
	<div class="container">
	<h1>Contact Us</h1><br />
		<form action="" method="POST" class="col-lg-6 col-md-6 col-sm-6">
		  <div class="form-group">
			<label for="email1">Email address</label>
			<input type="email" class="form-control" id="email1" placeholder="Email">
		  </div>
		  <div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" id="name" placeholder="Name">
		  </div>
		   <div class="form-group">
			<label for="subject">Subject</label>
			<input type="text" class="form-control" id="name" placeholder="Subject">
		  </div>
		   <div class="form-group">
			<label for="message">Message</label>
			<textarea type="password" class="form-control" id="name" placeholder="Message"></textarea>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</body>
