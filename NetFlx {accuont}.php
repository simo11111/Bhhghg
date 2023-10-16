<?php

#حقوق العبودي

ob_start();
$token = "6185779176:AAE8gK4xS9SyURvXFNcEQgOZTUrgAsFhwAA"; #توكنك
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$FFF_YFF = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$FFF_YFF";
$FFF_YFF = file_get_contents($url);
return json_decode($FFF_YFF);
}
$update = json_decode(file_get_contents('php://input'));
;
$message = $update->message;
$chat_id2 = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
if(isset($update->callback_query)){

$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;
}
if($text == '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
مرحبا بك عزيزي المستخدم ✨ .

يمكنك تخمين حسابات نتفلكس عبر بوتنا 😄.
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_enCOMHDY([
'inline_keyboard'=>[
[['text'=>"تخمين حساب ↪️ .",'callback_data'=>"new" ]],
[['text'=>"مـمـول آلعبودي { 20K } 🫡🇮🇶",'url'=>"https://t.me/EM5Hsupport"]],
[['text'=>"cٍhَaّnًًel",'url'=>"https://t.me/EM5Hchanel" ]],
]
])
]);
}
$codes = ['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m'];
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$monthcode = ['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m'];
$amr10 = "$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8";
$codes = ['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m'];
$code1 = array_rand($codes,8);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$monthcode = ['q','w','e','r','t','y','u','i','o','p','a','s','d','f','g','h','j','k','l','z','x','c','v','b','n','m'];
$AMR = "$bcode1";
if($data == "new"){
bot('sendphoto',[
 'chat_id'=>$chat_id2,
'photo'=>"https://t.me/TCHv2/1211",
'caption'=>"
جبتلك حساب نتفلكس 🫡♥️ ⤵️ .

𝐞𝐦𝐚𝐢𝐥  ⏎ : $AMR@gmail.com

𝐩𝐚𝐬𝐬𝐰𝐨𝐫𝐝  ⏎ : $AMR$AMR
",
'parse_mode' =>'MARKDOWN',
'reply_to_message_id'=>$message->message_id, 
[[ 'text'=>"تخمين مره اخره ➕", 'callback_data'=>"new"]],
[['text'=>"القائمة الرئيسية 🔙",'callback_data'=>"backkk"]],
]);}
if($data == 'backkk'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
مرحبا بك عزيزي المستخدم ✨ .

يمكنك تخمين حسابات نتفلكس عبر بوتنا 😄.
",
'disable_web_page_preview'=>true,
'parse_mode'=>"markdown",
'reply_markup'=>json_enCOMHDY([
'inline_keyboard'=>[
[['text'=>"تخمين حساب ↪️ .",'callback_data'=>"new" ]],
[['text'=>"مـمـول آلعبودي { 20K } 🫡🇮🇶",'url'=>"https://t.me/EM5Hsupport"]],
[['text'=>"cٍhَaّnًًel",'url'=>"https://t.me/EM5Hchanel" ]],
]
])
]);
}