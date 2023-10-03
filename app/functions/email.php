<?php

// function send(array $data){
//     $to = 'paulojr.1994@hotmail.com';
//     $subject = $data->subject;
//     $message = $data->message;
//     $header = "From: {$data->email}" . "\r\n" .
//     'Reply-to: paulojr.1994@hotmail.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

//     return mail($to, $subject, $message, $header);
// }

function send(array $data) {
	$email = new PHPMailer\PHPMailer\PHPMailer;
	$email->CharSet = 'UTF-8';
	$email->SMTPSecure = 'plain';
	$email->isSMTP();
	$email->Host = 'sandbox.smtp.mailtrap.io';
	$email->Port = 465;
	$email->SMTPAuth = true;
	$email->Username = 'user';
	$email->Password = 'password';
	$email->isHTML(true);
	$email->setFrom('email@email.com');
	$email->FromName = $data['quem'];
	$email->addAddress($data['para']);
	$email->Body = $data['mensagem'];
	$email->Subject = $data['assunto'];
	$email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
	$email->MsgHTML($data['mensagem']);

	return $email->send();
}