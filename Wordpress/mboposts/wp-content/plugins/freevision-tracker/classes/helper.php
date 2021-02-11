<?php
class Freevision_Tracker_myHelper{
	function __construct() {
		//TO DO
	}

	function sendMail($receiver_email = "", $text = "", $subject = "", $file_to_attach = '', $html_title = 'Sample Title') {
		require_once('vendor/phpmail/PHPMailer.php');
		require_once('vendor/phpmail/Exception.php');

		$admin_email = esc_attr(get_option("admin_email"));

		$email = new PHPMailer\PHPMailer\PHPMailer();
		$email->SetFrom( $admin_email, $admin_email );
		$email->Subject   = $subject;
		$email->Body      = $text;
		$email->AddAddress( $receiver_email );

		$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );

		return $email->Send();		
	}
}
?>