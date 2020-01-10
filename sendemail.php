<?php
	header('Content-type: application/json');
	$status = array(
		'Тип:'=>'Выполнено',
		'Ответ:'=>'Спасибо за то что связались с нами, как можно скорее мы Вам ответим. '
	);

    $name       = @trim(stripslashes($_POST['Имя'])); 
    $email      = @trim(stripslashes($_POST['Email'])); 
    $subject    = @trim(stripslashes($_POST['Тема'])); 
    $message    = @trim(stripslashes($_POST['Описание вашей проблемы'])); 

    $email_from = $email;
    $email_to = 'stepan.fedorov.1396@mail.ru';//replace with your email

    $body = 'Имя: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Тема: ' . $subject . "\n\n" . 'Описание вашей проблемы: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;