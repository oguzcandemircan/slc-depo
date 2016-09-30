<?php

		
	
		include 'class.phpmailer.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'host';
		$mail->Port = 587;
		//$mail->SMTPSecure = 'ssl';
		$mail->Username = 'username';
		$mail->Password = 'password';
		$mail->SetFrom($mail->Username, 'test_user');
		$mail->AddAddress("mail","test_");
		$mail->CharSet = 'UTF-8';
		$mail->Subject = "title";
		$content ="content";
		$mail->MsgHTML($content);
		if($mail->Send()) {
			
			echo '<div class="alert alert-success">E-posta başarıyla gönderildi</div>';
		} else {
			
			echo '<div class="alert alert-success">'.$mail->ErrorInfo.'</div>';
		}
		
?>