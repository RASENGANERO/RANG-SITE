<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
header('Content-Type: application/json');

CModule::IncludeModule("iblock");

function sendMail() {

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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = '';
    if (strval($_POST['type']) === 'addmail') {
        $result = addMails($_POST['usermail']);
    }
    if (strval($_POST['type']) === 'sendmail') {
        $result = addMails($_POST['user']);
    }
    echo $result;
}
?>
