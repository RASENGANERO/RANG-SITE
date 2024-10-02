<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
header('Content-Type: application/json');

CModule::IncludeModule("iblock");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
function sendMail($val) {
    $name = htmlspecialchars($val['name']);
    $phone = htmlspecialchars($val['phone']);
    $email = htmlspecialchars($val['email']);
    $company = htmlspecialchars($val['company']);

    // Создаем экземпляр PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth   = true;
        $mail->Host = 'smtp.beget.com'; // Укажите SMTP сервер
        $mail->Username = 'adminjvas@jvas.ru'; // Ваш email
        $mail->Password = 'A&7TyWQQQS0E'; // Ваш пароль
        $mail->SMTPSecure = 'ssl'; // Используйте TLS
        $mail->Port = 465; 
        // Получатели
        $mail->setFrom('adminjvas@jvas.ru', 'jvas.ru');
        $mail->addAddress('martovskaya91@bk.ru', 'jvas.ru'); // Добавьте адрес получателя

        // Контент письма
        $mail->isHTML(true);
        $mail->Subject = 'Новая заявка с сайта';
        $mail->Body    = "<h1>Новая заявка</h1>
                          <p><strong>Имя:</strong> $name</p>
                          <p><strong>Телефон:</strong> $phone</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Компания:</strong> $company</p>";
        $mail->send();
        return json_encode(['error' => false, 'message' => 'Вы успешно отправили сообщение!'], JSON_UNESCAPED_UNICODE);
    } catch (Exception $e) {
        return json_encode(['error' => true, 'message' => 'Ошибка отправки сообщения: ' . $mail->ErrorInfo], JSON_UNESCAPED_UNICODE);
    }
}

function addMails($userMail) {
    $element = new CIBlockElement;
    $PROP = [];
    $PROP['MAIL_USER'] = $userMail;

    $IBLOCK_ID = 22;
    $countMails = CIBlock::GetElementCount($IBLOCK_ID);

    $arLoadMailsArray = Array(
        'IBLOCK_ID'      => $IBLOCK_ID,
        'PROPERTY_VALUES'=> $PROP,
        'NAME'           => 'Подписчик ' . strval($countMails+1),
        'ACTIVE'         => 'Y',         
    );
    $element->Add($arLoadMailsArray);
    return json_encode(['error' => false, 'message' => 'Вы успешно подписаны на наши новости!'], JSON_UNESCAPED_UNICODE);

}
function sendMailTarriff($val) {
    $name = htmlspecialchars($val['username']);
    $phone = htmlspecialchars($val['phone']);
    // Создаем экземпляр PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth   = true;
        $mail->Host = 'smtp.beget.com'; // Укажите SMTP сервер
        $mail->Username = 'adminjvas@jvas.ru'; // Ваш email
        $mail->Password = 'A&7TyWQQQS0E'; // Ваш пароль
        $mail->SMTPSecure = 'ssl'; // Используйте TLS
        $mail->Port = 465; 
        // Получатели
        $mail->setFrom('adminjvas@jvas.ru', 'jvas.ru');
        $mail->addAddress('martovskaya91@bk.ru', 'jvas.ru'); // Добавьте адрес получателя

        // Контент письма
        $mail->isHTML(true);
        $mail->Subject = 'Новая заявка: определение услуг';
        $mail->Body    = "<h1>Новая заявка</h1>
                          <p><strong>Имя:</strong> $name</p>
                          <p><strong>Телефон:</strong> $phone</p>";
        $mail->send();
        return json_encode(['error' => false, 'message' => 'Вы успешно отправили сообщение!'], JSON_UNESCAPED_UNICODE);
    } catch (Exception $e) {
        return json_encode(['error' => true, 'message' => 'Ошибка отправки сообщения: ' . $mail->ErrorInfo], JSON_UNESCAPED_UNICODE);
    }
}
function sendFormTarriff($value) {
    $name = htmlspecialchars($value['name']);
    $phone = htmlspecialchars($value['phone']);
    $email = htmlspecialchars($value['email']);
    $company = htmlspecialchars($value['company']);
    $data = htmlspecialchars($value['dataform']);
    
    $data = explode("\n",$data);
    $dtstr = '';
    foreach($data as $dt){
        $dtstr.='<p>'.$dt.'</p>';
    }
    // Создаем экземпляр PHPMailer
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->CharSet = "UTF-8";
        $mail->SMTPAuth   = true;
        $mail->Host = 'smtp.beget.com'; // Укажите SMTP сервер
        $mail->Username = 'adminjvas@jvas.ru'; // Ваш email
        $mail->Password = 'A&7TyWQQQS0E'; // Ваш пароль
        $mail->SMTPSecure = 'ssl'; // Используйте TLS
        $mail->Port = 465; 
        // Получатели
        $mail->setFrom('adminjvas@jvas.ru', 'jvas.ru');
        $mail->addAddress('martovskaya91@bk.ru', 'jvas.ru'); // Добавьте адрес получателя

        // Контент письма
        $mail->isHTML(true);
        $mail->Subject = 'Новая заявка: определение услуг';
        $mail->Body    = "<h1>Новая заявка</h1>
                          <p><strong>Имя:</strong> $name</p>
                          <p><strong>Телефон:</strong> $phone</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Компания:</strong> $company</p><br>
                          $dtstr";
        $mail->send();
        return json_encode(['error' => false, 'message' => 'Вы успешно отправили сообщение!'], JSON_UNESCAPED_UNICODE);
    } catch (Exception $e) {
        return json_encode(['error' => true, 'message' => 'Ошибка отправки сообщения: ' . $mail->ErrorInfo], JSON_UNESCAPED_UNICODE);
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = '';
    if (strval($_POST['type']) === 'addmail') {
        $result = addMails($_POST['usermail']);
    }
    if (strval($_POST['type']) === 'sendmail') {
        $result = sendMail($_POST);
    }
    if (strval($_POST['type']) === 'sendtarrifmail') {
        $result = sendMailTarriff($_POST);
    }
    if (strval($_POST['type']) === 'sendtarrifform') {
        $result = sendFormTarriff($_POST);
    }
    echo $result;
}
?>
