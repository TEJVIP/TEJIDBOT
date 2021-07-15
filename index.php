<?php
/*
NEW CREATED BY @NEWTEJBOY
TELEGRAM CHANNEL @TEJVIP
# NEVER CHANGE THIS CREDITS
*/

ob_start();
ini_set("log_errors","off");
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot$BOT_TOKEN"/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));}else{
return json_decode($res);}}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$text = $message->text;
$tejvip = $message->forward_from_chat->id;
$BOT_TOKEN = $HEROKU['BOT_TOKEN'];
//////////////////NEWTEJBOY////////////////////////////NEWTEJBOY///////NEWTEJBOY///////////NEWTEJBOY////////
if($text == "/start"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
***Hello Dear

I CAN GET ANY PUBLIC AND PRIVATE CHANNEL ID

FORWARD A MESSAGE FROM YOUR CHANNEL TO GET YOUR CHANNEL ID.

FOR USER ID USE THIS COMMAND :- /id***",
 'parse_mode'=>"MarkDown",
 'reply_to_message_id'=>$message_id,
  ]);  
 }
elseif(isset($message->forward_from_chat)){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"Your CHANNEL ID is: `$tejvip`",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]); 
}
/////////NEWTEJBOY////////NEWTEJBOY///////NEWTEJBOY///////NEWTEJBOY////
if ($text == '/id')
bot ('sendMessage' ,[
'chat_id'=>$chat_id,'text'=>"This chat id is `$chat_id`",
'parse_mode'=>"MarkDown",
]);
/*
NEW CREATED BY :- @NEWTEJBOY
TELEGRAM CHANNEL :- @TEJVIP
*/
?>
