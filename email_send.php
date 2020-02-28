<?php  
if (isset($_POST['send'])) {

		$to_email = 'madnesskillergr@yahoo.gr';
		$subject = htmlentities($_POST['form-Subject']);
		$message = htmlentities($_POST['form-text'].$_POST['form-email']);
		$headers = htmlentities($_POST['form-name']);
		mail($to_email,$subject,$message,$headers);

	}

	header('Location: index.php');
?>