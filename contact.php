<!doctype html>
<html>
<?php $title = "Contact | YouthCorp"; include 'head.php'; ?>

<body>
<?php 

include_once("analyticstracking.php");
include 'nav.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST['cf_email'] == true) {
		
		$field_email = $_POST['cf_email'];
		$field_name = $_POST['cf_name'];
		$field_message = $_POST['cf_message'];
		
		$mail_to = 'joinus@theyouthcorp.org';
		$subject = 'Message From: ' . $field_name . '!';
		
		$body_message .= 'Name: '.$field_name."\n";
		$body_message .= 'E-mail: '.$field_email."\n";
		$body_message .= 'Message: '.$field_message."\n";
		
		$headers = 'From: '.$field_email."\r\n";
		$headers .= 'Reply-To: '.$field_email."\r\n";
		
		$mail_status = mail($mail_to, $subject, $body_message, $headers);
		
		if ($mail_status) { ?>
			<script language="javascript" type="text/javascript">
				alert('Thanks for the message!');
				window.location = 'contact.php';
			</script>
		<?php
		}
		else { ?>
			<script language="javascript" type="text/javascript">
				alert('Message failure. Did you enter an email?');
				window.location = 'contact.php';
			</script>
		<?php
		}
	}
}
?>
<div style="width:100%;height:110px;"></div>
<h1 class="contacttitle">Contact us!</h1>
<form action="contact.php" method="post">
	<input id="contactname" type="text" spellcheck="false" name="cf_name" placeholder="Name">
    <input id="contactemail" type="text" spellcheck="false" name="cf_email" placeholder="Email">
    <textarea id="contacttext" spellcheck="false" name="cf_message" placeholder="Message"></textarea>
    <input id="contactsubmit" type="submit">
</form>
<?php include 'footer.php' ?>
</body>
</html>