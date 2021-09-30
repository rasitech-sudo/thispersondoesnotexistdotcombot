<?php
$content = file_get_contents("php://input");
$token = '2003841692:AAHrXxDiL63L-MkoD_RuB-MtN3pYc5JBUjQ';
$apiLink = "https://api.telegram.org/bot$token/"; 
$update = json_decode($content, true);
if(!@$update["message"]) $val = $update['callback_query'];
else $val = $update;
$chat_id = $val['message']['chat']['id'];
$text = $val['message']['text'];
$update_id = $val['update_id'];
$sender = $val['message']['from'];

if ($text == "/start") {
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Kamu bisa membuat sudoku dengan format PDF. Ketik /generate untuk membuat Sudoku.");
    return false;
} else if ($text == "/donasi") {
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Untuk donasi developer, silahkan kunjungi: https://saweria.co/rasitech");
    return false;
} else if ($text == "/about") {
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Bot ini dibuat oleh @RasiTechChannel2. Bot ini diintegrasikan dengan API SimSimi langsung.");
    return false;
} else if ($text == "/versi") {
    file_get_contents($apiLink . "sendmessage?chat_id=$chat_id&text=Bot ini versi 1.0.0");
    return false;
} else if ($text == "/generate") {
    file_get_contents($apiLink . "sendDocument?chat_id=$chat_id&photo=https://thispersondoesnotexist.com/image&caption=Join%20@RasiTechChannel2");
    return false;
}
