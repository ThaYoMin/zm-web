<?php

if (isset($_POST['submit'])) 
{
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];

	$mailTo = "info@zombiemeteor.org";
	$headers = "From: ".$mailFrom;
	$txt = "You hace received a mail from ".$name.".\n\n".$message;
	if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) 
	{
			# code...
	}
	else
	{
		mail($mailTo, $subject, $txt, $headers);
		header("Location: index.php?mailsend");		
	}
}