<?php
//  سورس تايم - SOURCE TIME
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);
date_default_timezone_set('Asia/alriyadh');
$API_KEY = "737514013:AAECRmtf32gzpuayTZksa0uud5mArFgZKc0*/
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);

// 1522971415
$channel_ids = ['-1001746402507', '-1001920650342', '-1001920650342', '-1001920650342'];

// 1497373149
$admin_ids = ['874820580', '987654321'];

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }
    else
    {
        return json_decode($res);
    }
}

$url_info = file_get_contents("https://api.telegram.org/bot$token/getMe");
$json_info = json_decode($url_info,true);
$usernamebot = $json_info['result']['username'];
$bot_id = $json_info['result']['id'];
@$token = API_KEY;
$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$chat_id = $message->chat->id;
@$chat_id2 = $update->callback_query->message->chat->id;
@$message_id = $message->message_id;


if (in_array($from_id, $admin_ids)) {
    if (isset($message->photo)) {
        $photo = end($message->photo);
        $caption = $message->caption ?? '';
        foreach ($channel_ids as $channel_id) {
            bot('sendPhoto',[
                'chat_id' => $channel_id,
                'photo' => $photo->file_id,
                'caption' => $caption,
      'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
          [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
    ]
    ])
            ]);
        }
    } elseif (isset($message->video)) {
        $video = $message->video;
        $caption = $message->caption ?? '';
        foreach ($channel_ids as $channel_id) {
            bot('sendVideo',[
                'chat_id' => $channel_id,
                'video' => $video->file_id,
                'caption' => $caption,
      'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
          [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
    ]
    ])
            ]);
        }
    } elseif (isset($message->document)) {
        $document = $message->document;
        $caption = $message->caption ?? '';
        foreach ($channel_ids as $channel_id) {
            bot('sendDocument',[
                'chat_id' => $channel_id,
                'document' => $document->file_id,
                'caption' => $caption,
      'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
          [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
    ]
    ])
            ]);
        }
    } elseif (isset($message->audio)) {
        $caption = $message->caption;
        $audio_id = $message->audio->file_id;
        $sendAudio = bot('sendAudio', [
            'chat_id' => $channel_id,
            'audio' => $audio_id,
            'caption' => $caption,
      'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
          [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
    ]
    ])
        ]);
    } elseif (isset($message->document)) {
        $caption = $message->caption;
        $document_id = $message->document->file_id;
        $sendDocument = bot('sendDocument', [
            'chat_id' => $channel_id,
            'document' => $document_id,
            'caption' => $caption,
      'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
          [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
    ]
    ])
        ]);
    }
}

if (in_array($from_id, $admin_ids)) {
    $message_text = $message->text;
    foreach ($channel_ids as $channel_id) {
        bot('sendMessage',[
            'chat_id' => $channel_id,
            'text' => $message_text,
      'reply_markup'=>json_encode(['inline_keyboard'=>[
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
          [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
        [['text'=>"botton",'url'=>"https://t.me/yousef_labban1"]],
    ]
    ])
        ]);
    }
}

// سورس تايم - SOURCE TIME