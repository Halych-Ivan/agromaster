<?php

include 'config.php';


$request = file_get_contents("php://input");
$input = json_decode($request, true);
put_log_in($request);


$type = $input['message']['type'];          //type of message received (text/picture)
$text = $input['message']['text'];          //actual message the user has sent
$sender_id = $input['sender']['id'];        //unique viber id of user who sent the message
$sender_name = $input['sender']['name'];    //name of the user who sent the message
$sender_avatar = $input['sender']['avatar'];  //avatar of the user who sent the message


if($input['event'] == 'webhook')
{
  $webhook_response['status'] = 0;
  $webhook_response['status_message'] = "ok";
  $webhook_response['event_types'] = 'delivered';
  echo json_encode($webhook_response);
  die;
}


if($input['event'] == "subscribed")
{
  sendMsg($sender_id, "Спасибо, что подписались на нас!");
}


if($input['event'] == "conversation_started")
{
  sendMsg($sender_id, "Беседа началась!");
}


if($input['event'] == "message")
{

    $txt = 'Бот працює в тестовому режимі та відповідає на ваші повідомлення.
    1 - отримаєте контакти працівників деканату
    2 - інструкція отримання довідки про місце навчання
    3 - інструкція отримання довідки для військомату
    4 - реквізити оплати контракту

    0 - отримати ключ для активації з`єднання бота із нашим онлайн сервісом';

///////////////////////////////////////////////////////////////////////////////////////////////

    if($text == '0') {
        $txt = 'Вітаю Вас '.$sender_name.'. Для підтвердження вашого номеру телефону, даний ключ доступу слід переслати адміністратору онлайн сервісу';
        sendMsg($sender_id, $sender_id, 'text');
        sendMsg($sender_id, $txt, 'url');
        exit;
    }

///////////////////////////////////////////////////////////////////////////////////////////////

    if($text == 1) {
        $txt = 'Отримати контакт наберіть слово:
    Декан
    Методист
    Фахівець';
    }

    if($text == 'Декан') {$txt = 'Бредихін Вадим Вікторович, 0952455789';}
    if($text == 'Методист') {$txt = 'Маймуліна Олена Миколаївна, 0972668675';}
    if($text == 'Фахівець') {$txt = 'Мішанов Юрій Вікторович, 0965288220';}

///////////////////////////////////////////////////////////////////////////////////////////////

    if($text == 2) {$txt = 'Для отримання довідки про місце навчання необхідно звернутися до методиста факультету і повідомити назву організації куди буде пред`являтися дана довідка';}

///////////////////////////////////////////////////////////////////////////////////////////////

    if($text == 3) {$txt = 'Для отримання довідки до територіального центру комплектації необхідно звернутися до керівника військово-облікового відділу. Плахотіна Анна Вікторівна, 0996090005';}


///////////////////////////////////////////////////////////////////////////////////////////////
    if($text == 4) {$txt = '
Реквізити для оплати контракту:
Одержувач ДЕРЖАВНИЙ БІОТЕХНОЛОГІЧНИЙ УНІВЕРСИТЕТ
61002, м. Харків, вул. Алчевських,44 код згідно з ЄДРПОУ 44234755
р/р UA 328201720313211001201130739 Банк ДКСУ м. Київ МФО 820172
Призначення платежу: оплата за навчання, денне, Прізвище Ім`я По батькові, спеціальність
фото квитанції потрібно вислати на пошту agro.master.ua@gmail.com';}
///////////////////////////////////////////////////////////////////////////////////////////////

    sendMsg($sender_id, $txt, $type);
}


?>
