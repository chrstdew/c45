<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Ciphpmailer {
    public function __construct(){
		//parent:: __construct();
		require APPPATH.'libraries/phpmailer/src/Exception.php';
		require APPPATH.'libraries/phpmailer/src/PHPMailer.php';
		require APPPATH.'libraries/phpmailer/src/SMTP.php';
	}

    public function send_email($to,$subject,$message){
		$mail = new PHPMailer();

		$r = select2("setting_email","*","WHERE id_setting_email='1'");

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = $r['smtp_host'];
		$mail->SMTPAuth = true;
		$mail->Username = $r['smtp_user'];
		$mail->Password = $r['smtp_pass'];
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = $r['smtp_port'];

		$mail->setFrom($r['fromm'],$r['name']);
		$mail->addAddress($to);
		$mail->Subject = $subject;
		$mail->isHTML(true);
		$mail->Body = $message;

		if(!$mail->send()){
			return $mail->ErrorInfo;
		}
		else{
			return TRUE;
		}
	}
}