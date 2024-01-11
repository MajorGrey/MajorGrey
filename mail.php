<?php
	if (isset($_POST["name"])) {
		//Get values
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
		//Sending queies
		if (strlen($message) <= 20) {
				echo "Error";
		}else{
			$query = mail(
				"someone@mail.com", 
				"New Mail From Chuks Okwuenu Website", 
				"Name: ".ucfirst($name)."\n
				Email: ".$email."\n
				Message: ".$message) or die("Could not send mail");
			//Checking if mail send
				if ($query) {
					echo "Mail sent";
				}else{
					echo "Error sending mail";
				}
		}
		
	}
?>