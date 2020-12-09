<?php
    // Файлы phpmailer
    require 'phpmailer/PHPMailer.php';
    require 'phpmailer/SMTP.php';
    require 'phpmailer/Exception.php';

    // Переменные, которые отправляет пользователь
    $nameFeedback = $_POST['name'];
    $phoneFeedback = $_POST['phone'];
    $messageFeedback = $_POST['message'];
    // Формирование самого письма
    $titleFeedback = "Новое обращение BTP";
    $bodyFeedback = "
    <h2>Новое обращение</h2>
    <b>Имя:</b> $nameFeedback<br>
    <b>Телефон:</b> $phoneFeedback<br><br>
    <b>Сообщение:</b><br>$messageFeedback
    ";

    // Настройки PHPMailer
    $mailFeedback = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mailFeedback->isSMTP();   
        $mailFeedback->CharSet = "UTF-8";
        $mailFeedback->SMTPAuth   = true;
        //$mailFeedback->SMTPDebug = 2;
        $mailFeedback->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

        // Настройки вашей почты
        $mailFeedback->Host       = "smtp.gmail.com"; // SMTP сервера вашей почты
        $mailFeedback->Username   = 'higherdeveloper34@gmail.com'; // Логин на почте
        $mailFeedback->Password   = 'ir5kxD~f'; // Пароль на почте
        $mailFeedback->SMTPSecure = 'ssl';
        $mailFeedback->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mailFeedback->Port       = 465;
        $mailFeedback->setFrom('higherdeveloper34@gmail.com', 'higher developer'); // Адрес самой почты и имя отправителя

        // Получатель письма
        $mailFeedback->addAddress('kirmenyov@mail.ru');  

    // Отправка сообщения
    $mailFeedback->isHTML(true);
    $mailFeedback->Subject = $titleFeedback;
    $mailFeedback->Body = $bodyFeedback;    

    // Проверяем отравленность сообщения
    if ($mailFeedback->send()) {$resultFeedback = "success";} 
    else {$resultFeedback = "error";}

    } catch (Exception $e) {
        $resultFeedback = "error";
        $statusFeedback = "Сообщение не было отправлено. Причина ошибки: {$mailFeedback->ErrorInfo}";
    }

    // Отображение результата
    header('Location: thankyou.html');







    
    $subscribe = $_POST['subscribe'];
    $titleSubscribe = "Новая заявка на подписку BTP";
    $bodySubscribe  = "
    <h2>Новая заявка</h2>
    <b>Email: </b>$subscribe
    ";
    // Настройки PHPMailer
    $mailSubscribe = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mailSubscribe->isSMTP();   
        $mailSubscribe->CharSet = "UTF-8";
        $mailSubscribe->SMTPAuth   = true;
        //$mailSubscribe->SMTPDebug = 2;
        $mailSubscribe->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

        // Настройки вашей почты
        $mailSubscribe->Host       = "smtp.gmail.com"; // SMTP сервера вашей почты
        $mailSubscribe->Username   = 'higherdeveloper34@gmail.com'; // Логин на почте
        $mailSubscribe->Password   = 'ir5kxD~f'; // Пароль на почте
        $mailSubscribe->SMTPSecure = 'ssl';
        $mailSubscribe->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mailSubscribe->Port       = 465;
        $mailSubscribe->setFrom('higherdeveloper34@gmail.com', 'higher developer'); // Адрес самой почты и имя отправителя

        // Получатель письма
        $mailSubscribe->addAddress('kirmenyov@mail.ru');  

    // Отправка сообщения
    $mailSubscribe->isHTML(true);
    $mailSubscribe->Subject = $titleSubscribe;
    $mailSubscribe->Body = $bodySubscribe;    

    // Проверяем отравленность сообщения
    if ($mailSubscribe->send()) {$resultSubscribe = "success";} 
    else {$resultSubscribe = "error";}

    } catch (Exception $e) {
        $resultSubscribe = "error";
        $statusSubscribe = "Сообщение не было отправлено. Причина ошибки: {$mailSubscribe->ErrorInfo}";
    }

    header('Location: subscribe.html');
