<?php
$API_KEY = "7599722024:AAHA37yy4Amgh9x3jWDf-YD8HbarxbqDBro" ;
$admin = 156010378

define('API_KEY',$API_KEY);
define("IDBot", explode(":", $API_KEY)[0]);


function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $options = [
        'http' => [
            'method'  => 'POST',
            'content' => http_build_query($datas),
            'header'  => 'Content-Type: application/x-www-form-urlencoded\r\n',
        ],
    ];
    $context  = stream_context_create($options);
    $res = file_get_contents($url, false, $context);

    if ($res === FALSE) {
        return json_encode(['error' => 'Request failed']);
    } else {
        return json_decode($res);
    }
}


$usrbot = bot("getme")->result->username;
$emoji = "➡️
🎟️
↪️
🔘
🏠";

$emoji = explode("\n", $emoji);
$b = $emoji[rand(0, 4)];
$NamesBACK = "رجوع $b";

define("USR_BOT", $usrbot);
mkdir("UploadEr");

function SETJSON($INPUT)
{
    if ($INPUT != NULL || $INPUT != "") {
        $F = "UploadEr/UploadEr.json";
        $N = json_encode($INPUT, JSON_PRETTY_PRINT);

        file_put_contents($F, $N);
    }
}


$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}
echo "تـم تـشـغـيـل الـبـوت ✅️";
$update = json_decode(file_get_contents('php://input'));
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$a = strtolower($text);
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$msg = file_get_contents("msg.php");

$users = explode("\n",file_get_contents("BEDO/arslan.json"));

if($message){
if(!in_array($from_id,$users)){
file_put_contents("BEDO/arslan.json",$from_id."\n",FILE_APPEND);}}

$tc = $message->chat->type;
$arslan09 = json_decode(file_get_contents("BEDO/arslan09.json"),true);
$suodo = $arslan09['sudoarr'];
$al = $arslan09['addmessage'];
$ab = $arslan09['messagee'];
$xll = $al + $ab;
if($message and $from_id !== $admin){
$arslan09['messagee'] = $arslan09['messagee']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}
if($message and $from_id == $admin){
$arslan09['addmessage'] = $arslan09['addmessage']+1;
file_put_contents("BEDO/arslan09.json",json_encode($arslan09,32|128|265));
}

$all = count($users)-1;

$sudo = array("7599722024:AAHA37yy4Amgh9x3jWDf-YD8HbarxbqDBro");

$get_ban=file_get_contents('sudo/ban.txt');
$ban =explode("\n",$get_ban);

$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban);

if($message  and in_array($from_id,$ban)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"• تـم حـظـرك مـن الـبـوت 🚷
",
]);return false;}

$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 

if($countban<=0){
$countban="مـفـيـش حـد مـحـظـور ⚕️";
}
function sendwataw($chat_id,$message_id){

$infosudo = json_decode(file_get_contents("sudo.json"),true);
$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$member = explode("\n",file_get_contents("sudo/member.txt"));
$cunte = count($member)-1;
$ban = explode("\n",file_get_contents("sudo/ban.txt"));
$countban = count($ban)-1;
if($countban<=0){
$countban="مـفـيـش حـد مـحـظـور ⚕️";
}
}

@$infosudo = json_decode(file_get_contents("sudo.json"),true);
$sudoamr= $infosudo["info"]["amr"];
if($data == "start"){
$infosudo["info"]["amr"]="start";
file_put_contents("sudo.json", json_encode($infosudo));
}

$usrbot = bot("getme")->result->username;
$emoji = "➡️
🎟️
↪️
🔘
🏠";

$emoji = explode("\n", $emoji);
$b = $emoji[rand(0, 4)];
$NamesBACK = "رجوع $b";

define("USR_BOT", $usrbot);
mkdir("Host");
mkdir("BEDO");
mkdir("sudo");


$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$UploadEr = json_decode(file_get_contents("UploadEr/UploadEr.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

	
$update = json_decode(file_get_contents('php://input'));

if ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $username = $message->from->username;
    $chat_id = $message->chat->id;
    $title = $message->chat->title;
    $text = $message->text;
    $user = $message->from->username;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$Host = json_decode(file_get_contents("Host/Host.json"), true);


if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $title = $update->callback_query->message->chat->title;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $user = $update->callback_query->message->chat->username;
    $from_id = $update->callback_query->from->id;
}

//——————————————————//
$MTAWR = "nhad899";  
$admin = "156010378"; 
//——————————————————//

if($Host['hui'] == null) {
$hui ="لا يـوجـد";
}else{
$hui = $Host['hui'];
}

//دخول الاعضاء//
$mem = explode("\n",file_get_contents("mem.txt"));
$je = file_get_contents("mem.txt");
$count = explode("\n",$je);
$SAl = count($count) -1;
if($username != null){
$sf = "@$username";
}else
if($username == null){
$sf = "لا يـوجـد مـعـرف";
}
if($message and !in_array($from_id,$mem)){
file_put_contents("mem.txt",$from_id . "\n" ,FILE_APPEND);
$SAl = $SAl + 1;
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
*• تـم دخـول شـخـص جـديـد الـى الـبـوت 💀*
    •–––––––––––––––––––––––––––––––•

• مـعـلـومـات الـشـخـص 📜 :

- 𝑵𝒂𝒎𝒆 : [$name](tg://user?id=$from_id)
- 𝑼𝒔𝒆𝒓 : $sf
- 𝑰𝒅 : [$from_id](tg://user?id=$from_id)

    •–––––––––––––––––––––––––––––––•
• عـدد الاعـضـاء الڪلي :* $SAl 📊*
",
'parse_mode'=>"Markdown",
]);
}
$ck1 = "@D3_Tito"; 
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ck1."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ck1))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ck1);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'⚠️ : مـعـلـش يـ حـب 💝🫶🏼
✔: اشـتـرك فـي قـنـاتـي الاول 💝🫶🏼
✔: اشـتـرك و بـعـد كـده ابـعـت /start 
 — — — — — — — — —
'.$ck1,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}

$ck1 = "@I_PX9";
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$ck1."&user_id=".$from_id);
$getch2 = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=".$ck1))->result;
$Namech2 = $getch2->title;
$getch2li = str_replace("@","",$ck1);
if($message && (strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'⚠️ : عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
 — — — — — — — — —
'.$ck1,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$Namech2,'url'=>"https://t.me/$getch2li"]],
]])
]);return false;}
//تشغيل وايقاف البوت//
$madey = json_decode(file_get_contents("madey.json"),true);
if(!$madey['bot']){
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($madey['bot'] == "on"){
$xm = "الـبـوت يـعـمـل ✅️";
}else{
$xm = "الـبـوت مـتـوقـف ❌️";
}
if($message and $madey['bot'] == "off" and $from_id != $admin){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
• البوت تحت الصيانة 🛠 •
",
'parse_mode'=>'markdown',
]);return false;
}
if($data == "on"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم تشغيل البوت بنجاح ✅️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجـوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "on";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}
if($data == "off"){
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"

• تم ايقاف البوت بنجاح ❌️
",
'parse_mode'=>"markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"رجـوع ➡️ ",'callback_data'=>"Thkom" ]],
]])
]);
$madey['bot'] = "off";
file_put_contents("madey.json",json_encode($madey,32|128|265));
}

//لوحة الادمن//
if($text == "/admin" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
⎋ اهلا بك في لوحة الادمن الخاصه بالبوت ⚙️  — — — — — — — — — — — — — —

",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$xm,'callback_data'=>" " ]],
[['text'=>"ايقاف البوت",'callback_data'=>"off" ],['text'=>"تشغيل البوت",'callback_data'=>"on" ]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الحظࢪ' ,'callback_data'=>"ksmban"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"msg"],['text'=>'قسم الࢪسائل' ,'callback_data'=>"sendms"]],
[['text'=>'• احصائيات البوت •' ,'callback_data'=>"HkH"]],
[['text'=>'• تفعيل التوجيه •' ,'callback_data'=>"ont"]],

]])
]);
}
if($data == "Thkom"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
⎋ اهلا بك في لوحة الادمن الخاصه بالبوت ⚙️  — — — — — — — — — — — — — —

",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$xm,'callback_data'=>" " ]],
[['text'=>"ايقاف البوت",'callback_data'=>"off" ],['text'=>"تشغيل البوت",'callback_data'=>"on" ]],
[['text'=>'قسم الاشتࢪاك الاجباࢪي' ,'callback_data'=>"bnt"],['text'=>'قسم الحظࢪ' ,'callback_data'=>"ksmban"]],
[['text'=>'قسم الاذاعه' ,'callback_data'=>"msg"],['text'=>'قسم الࢪسائل' ,'callback_data'=>"sendms"]],
[['text'=>'• احصائيات البوت •' ,'callback_data'=>"HkH"]],
[['text'=>'• تفعيل التوجيه •' ,'callback_data'=>"ont"]],
]])
]);
}
if($data == 'ont'){
file_put_contents("ont.php", "on");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
 تم تفعيل الاشعارات في البوت
",
'show_alert'=>true
]);
}
if($data == 'oft'){
file_put_contents("ont.php", "off");
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>"
 مرحبا عزيزي
⚠ تم تعطيل الاشعارات في البوت
",
'show_alert'=>true
]);
}
$ont = file_get_contents("ont.php");
if($ont == "on"){
if($from_id != $admin){
if($message){
bot('ForwardMessage',[
'chat_id'=>$admin,
'from_chat_id'=>$chat_id,
'message_id'=>$message->message_id,
]);
}}}
//قسم الاشتࢪاك//
if($data == "bnt"){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الاشتࢪاك الجباري
    •–––––––––––––––––––––––––––––––•
• قناة الاشتࢪاك : $hui*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"حذف قناة 🗑",'callback_data'=>"GkTR"],['text'=>"اضافة قناة ➕",'callback_data'=>"GGTR"]],
[['text'=>"رجـوع ➡️",'callback_data'=>"Thkom"]],
]])
]);
}
if($data== 'GGTR'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• اࢪسل معرف قناة الاشتراك معا @*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجـوع ➡️",'callback_data'=>"Thkom"]],
]])
]);  
$Host['mode'] = "h5hh0";
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
if(preg_match("/@/",$text) and $Host['mode'] == "h5hh0") {
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
*• تم تعيين قناة الاشتراك بنجاح ✅*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجـوع ➡️",'callback_data'=>"bnt"]],
]])
]);   
$Host['mode'] = null;
$Host['hui'] = $text;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
} 
if($data== 'GkTR'){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*• تم مسح القناة من الاشتراك 🚫*
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجـوع ➡️",'callback_data'=>"Thkom"]],
]])
]);   
$Host['mode'] = null;
$Host['hui'] = "لا يوجد";
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
} 

//قسم الحظر//
if($data == "ksmban"){
bot('EditMessageText', [
'chat_id'=>$admin,
'message_id'=>$message_id,
'text' =>"
*• اهلا بك في قسم الحظر
    •–––––––––––––––––––––––––––––––•
• عدد المحظورين : $countban*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء الحظر ⛔",'callback_data'=>"unban"],['text'=>"الحظر 🚫",'callback_data'=>"ban"]],
[['text'=>"رجـوع ➡️",'callback_data'=>"Thkom"]],
]])
]);
}
//حظر شخص//
if($data == "ban"){
$infosudo["info"]["amr"]="ban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🆔 اࢪسل ايدي الشخص :",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"ksmban"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="ban" and in_array($from_id,$sudo) and is_numeric($text)){
if(!in_array($text,$ban)){

file_put_contents("sudo/ban.txt","$text\n",FILE_APPEND);

bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم حظر العضو بنجاح : $text ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجـوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"تم حظرك من البوت",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• العضو محظور مسبقاً 🚫",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجـوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}
//الفاء الحظر//
if($data == "unban"){
$infosudo["info"]["amr"]="unban";
file_put_contents("sudo.json", json_encode($infosudo));
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"🆔 اࢪسل ايدي الشخص :",
"message_id"=>$message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"ksmban"]],
]
])
]);
}
if($text  and $text !="/start" and $sudoamr=="unban" and in_array($from_id,$sudo) and is_numeric($text)){
if(in_array($text,$ban)){

$str=file_get_contents("sudo/ban.txt");
$str=str_replace("$text\n",'',$str);
file_put_contents("sudo/ban.txt",$str);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• تم الغاء الحظر بنجاح : $text ✅",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجـوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);

bot('sendmessage',[
'chat_id'=>$text, 
'text'=>"• لقد تم الغاء الحظر عنك ✅",
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"• العضو ليس محظور مسبقاً 🚫",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجـوع ➡️",'callback_data'=>"ksmban"]],
]
])
]);
}
$infosudo["info"]["amr"]="null";
file_put_contents("sudo.json", json_encode($infosudo));
}


//قسم الاذاعة//
if($data == "msg"){
file_put_contents("msg.php", "on");
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
• اࢪسل الآن الاذاعة 📣 :
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"الغاء ❌",'callback_data'=>"Thkom"]],
]])
]);
}
if($msg == "on"){
if($message){
for($i=0;$i<count($users); $i++){
bot('sendmessage',[
'chat_id'=>$users[$i],
'text'=>"$text",
]);
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم اࢪسال الاذاعة الى ( $all ) شخص ✅
",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"رجـوع ➡️ ",'callback_data'=>"Thkom"]],
]])
]);
unlink("msg.php");
}}

//قسم الرسائل//
if($data == "sendms"){
bot('EditMessageText',[
'chat_id'=>$admin,
'message_id'=>$message_id,
'text'=>"
*🆔 ارسل ايدي الشخص :*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"الغاء ❌","callback_data"=>"Thkom"]],
]])
]);
$Host['mode'] = 'chat3';
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
if($text != '/start' and $text != null and $Host['mode'] == 'chat3'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=> "
*• اࢪسل الآن رسالتك 💬 :*
",
'parse_mode'=>"MARKDOWN",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"رجـوع ➡️","callback_data"=>"Thkom"]],
]])
]);
$Host['mode'] = 'poi3';
$Host['idd'] = $text;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}
$ID = $Host['idd'];
if($text != '/start' and $text != null and $Host['mode'] == 'poi3'){
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"• تم الاࢪسال الى ".$Host['idd']." بنجاح ✅ ",
'parse_mode'=>"Markdown",
 'reply_to_message_id'=>$message_id, 
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"رجـوع ➡️","callback_data"=>"Thkom"]],
]])
]);
bot('sendmessage',[
'chat_id'=>$Host['idd'],
'text'=>"• تم اࢪسال رسالة اليك من المطور .

• الرسالة 💬 :

$text",
'parse_mode'=>"Markdown",
]);
$Host['mode'] = null;
$Host['idd'] = null;
$Host = json_encode($Host,32|128|265);
file_put_contents("Host/Host.json",$Host);
}

if($text == "/Tito") {
  bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "
*✅ - طلب ترقية حساب 
☑️ - الشخص:* $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id)


",
            "parse_mode" => "markdown", 
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"✅ - ترقية حسابه",'callback_data'=>"trues|$from_id" ], ['text'=>"❌ - رفض الترقية",'callback_data'=>"falses|$from_id" ]], 
      ]
    ])
            
        ]);
        bot("sendMessage", [
            "chat_id" => $chat_id ,
            "text" => "
            *🎬 - تم إرسال طلب ترقية حسابك الى الإدارة 
🏆 - يرجئ الانتضار للرد اما الموافقة او الرفض
🚨 - الرجاء عدم تكرار الطلب مرة اخرئ حتى لايتم حظرك نهائي*
",
            "parse_mode" => "markdown", 
            
           
        ]);
        return false ;
  } 
 
 if(explode("|", $data)[0] == "trues") {
  bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
🚀 - تم ترقية الحساب بنجاح وتم فتح البوت للشخص
" ,
        ]);
        bot("sendMessage", [
            "chat_id" => explode("|", $data)[1] ,
            "text" => "
            *✅ تـم الـمـوافـقـة عـلـي طـلـب تـرقـيـة لـ حـسـابـك 🎉

🎁 - ابـعـت /start*
",
            "parse_mode" => "markdown", 
            
        ]);
        $UploadEr["mems"][explode("|", $data)[1]] = 1 ;
 $UploadEr["memsA"][] = explode("|", $data)[1] ;
        SETJSON($UploadEr);
  } 
  
  if(explode("|", $data)[0] == "falses") {
  bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
تم رفض الترقية بنجاح 🚫
" ,
        ]);
        bot("sendMessage", [
            "chat_id" => explode("|", $data)[1] ,
            "text" => "
*- تـم رفـض طـلـب الـتـرقـيـة لـ حـسـابـك ❌ ❕ *
",
            "parse_mode" => "markdown", 
            
        ]);
        
  } 
  
if ($UploadEr["mems"][$from_id] == null) {
 if($from_id != $admin) {
 bot("sendMessage", [
            "chat_id" => $chat_id ,
            "text" => "
*☑️ - حـسـابـك مـش مـ تـرقـي قـم بـ الـتـرقـيـة اولا 🔥

- ابـعـ طلب ترقية حسابك ارسل /Tito*
",
            "parse_mode" => "markdown", 
        ]);
        return false ;
        exit ;
       } 
 } 
 
 
 if($data == "sendReport") {
 bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
#️⃣] ابـعـت دلـوقـتـي الـرسـالـة الـتـوضـحـيـة لـ الـمـطـور
ℹ️] ان ڪان عـن طـريـق الـخـطـا سـيـتـم فـك الـحـظـر
" ,
        ]);
 $UploadEr["mode"][$from_id] = "sR" ;
        SETJSON($UploadEr);
        return false ;
 } 
 
 if($text and $UploadEr["mode"][$from_id] == "sR") {
  bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "✅] تـم اسـتـلام الـطـلـب سـيـتـم الـمـراجـعـة فـي اقـرب وقـت ممڪن",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "🎃] طـلـب فـك حـظـر
    👤] مـن $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 

الـرسـالـة الـتـوضـيـحـيـة لـ الـعـضـو 👤💬 : $text
لـ الـفـك الـحـظـر عـنـه ابـعـت [/Unb_$from_id] 
",
            "parse_mode" => "markdown"
            
        ]);
        $UploadEr["mode"][$from_id] = null ;
        SETJSON($UploadEr);
        return false ;
  }
if ($UploadEr["mems"][$from_id] == null) {
	$UploadEr["mems"][$from_id] = 1 ;
	$UploadEr["memsA"][] = $from_id ;
        SETJSON($UploadEr);
	} 
	if($data == "sendReport") {
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
#️⃣] ابـعـت دلـوقـتـي الـرسـالـة الـتـوضـحـيـة لـ الـمـطـور
ℹ️] ان ڪان عـن طـريـق الـخـطـا سـيـتـم فـك الـحـظـر
" ,
        ]);
	$UploadEr["mode"][$from_id] = "sR" ;
        SETJSON($UploadEr);
        return false ;
	} 
	
	if($text and $UploadEr["mode"][$from_id] == "sR") {
		bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "*✅] تـم اسـتـلام الـطـلـب سـيـتـم الـمـراجـعـة فـي اقـرب وقـت ممڪن 🕐*",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "🎃] طـلـب فـك حـظـر
   👤] مـن $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 

الـرسـالـة الـتـوضـيـحـيـة لـ الـعـضـو 👤💬 : $text
لـ الـفـك الـحـظـر عـنـه ابـعـت [/Unb_$from_id] 
",
            "parse_mode" => "markdown"
            
        ]);
        $UploadEr["mode"][$from_id] = null ;
        SETJSON($UploadEr);
        return false ;
		} 
$not = array("$admin", "ايديك");
if (isset($from_id) && is_array($UploadEr)) {
	if (in_array($from_id, $UploadEr)) {
    if (!in_array($from_id, $not)) {
        bot("deleteMessage", [
            "chat_id" => $chat_id,
            "message_id" => $UploadEr["m_id"][$from_id]
        ]);
        $n = bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "*تـم حـظـرك مـن الـبـوت 🚫
بـسـبـب رفـع مـلـفـات مـحـالـفـة 🚫*",
            "parse_mode" => "markdown", 
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"❲ طـلـب فـك حـظـر ❳",'callback_data'=>"sendReport" ]], 
      ]
    ])
        ]);
        $UploadEr["m_id"][$from_id] = $n->result->message_id;
        SETJSON($UploadEr);
        return false;
       } 
    }
}

if ($UploadEr["mems"][$from_id] == null) {
	$UploadEr["mems"][$from_id] = 156010378 ;
	$UploadEr["memsA"][] = $from_id ;
        SETJSON($UploadEr);
	} 
	if($data == "sendReport") {
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
#️⃣] ابـعـت دلـوقـتـي الـرسـالـة الـتـوضـحـيـة لـ الـمـطـور
ℹ️] ان ڪان عـن طـريـق الـخـطـا سـيـتـم فـك الـحـظـر
" ,
        ]);
	$UploadEr["mode"][$from_id] = "sR" ;
        SETJSON($UploadEr);
        return false ;
	} 
	
	if($text and $UploadEr["mode"][$from_id] == "sR") {
		bot("sendMessage", [
            "chat_id" => $chat_id,
            "text" => "✅] تـم اسـتـلام الـطـلـب سـيـتـم الـمـراجـعـة فـي اقـرب وقـت ممڪن",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "🎃] طـلـب فـك حـظـر
            🔖] مـن $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 

الـرسـالـة : $text
لـ الـفـك الـحـظـر عـنـه ابـعـت [/Unb_$from_id] 
",
            "parse_mode" => "markdown"
            
        ]);
        $UploadEr["mode"][$from_id] = null ;
        SETJSON($UploadEr);
        return false ;
		} 
$not = array("$admin", "ايديك");
if (isset($from_id) && is_array($UploadEr)) {
	if (in_array($from_id, $UploadEr)) {
    if (!in_array($from_id, $not)) {
        bot("deleteMessage", [
            "chat_id" => $chat_id,
            "message_id" => $UploadEr["m_id"][$from_id]
        ]);
        $n = bot("sendMessage", [
            "chat_id" => 156010378,
            "text" => "*⚠️ You are banned from using the bot due to violations.\n⚠️ تم حظرك من استخدام الروبوت بسبب الانتهاكات.*",
            "parse_mode" => "markdown", 
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"❲ طـلـب فـك حـظـر ❳",'callback_data'=>"sendReport" ]], 
      ]
    ])
        ]);
        $UploadEr["m_id"][$from_id] = $n->result->message_id;
        SETJSON($UploadEr);
        return false;
       } 
    }
}


		
		if(preg_match("/Unb_/", $text)) {
			if($from_id == $admin) {
				$B=array_search(explode("_",$text)[1],$UploadEr);
        unset($UploadEr[$B]);
        SETJSON($UploadEr);
				bot("sendMessage", [
            "chat_id" => $admin ,
            "text" => "
            Done ✅
            Id : (". explode("_",$text)[1].") / $B
",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendMessage", [
            "chat_id" => explode("_",$text)[1] ,
            "text" => "*⚠️] تـم فـك الـحـظـر عـن حـسـابـك
🤔]  الـتـزم الـقـوانـيـن بـعـد كـده 
*",
            "parse_mode" => "markdown"
            
        ]);
        bot("sendmessage",[
                "chat_id" => explode("_",$text)[1], 
                "text" => "
⏎︙مرحبا بك ❲ $name ❳ 
⏎︙في بوت رفع الملفات على الاستضافه 
⏎︙ارسل الملف الان لرفعه على الاستضافه 
⏎︙ملفاتك المرفوعه ❲ $counts ❳
⏎︙عدد جميع ملفات المرفوعه ❲ $vc | $no ❳
⏎︙عدد مستخدمين البوت ❲ $SAl ❳
⏎︙تعليمات البوت ❲ /help ❳

                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>" ‹ : 𓏺 َِ𝗦َِ𝗠َِ𝗔َِ𝗜َِ𝗟 َِ𝗔َِ𝗡َِ𝗗 َِ𝗕َِ𝗘 َِ𝗛َِ𝗔َِ𝗣َِ𝗣َِ𝗬 🤍 : ›",'callback_data'=>"ss"]],
     [['text'=>"❲ رفع الملف ❳",'callback_data'=>"SendFile"]],
     [['text'=>"❲ تحديث البوت ❳",'callback_data'=>"refr" ],['text'=>"❲ احصائيات الرفع ❳",'callback_data'=>"nas" ]], 
     [['text'=>"❲ التواصل مع الدعم ❳",'callback_data'=>"contact" ]], 
     [['text'=>"❲ تقييم البوت ❳",'callback_data'=>"tqeem" ],['text'=>"❲ قياس سرعه البوت ❳",'callback_data'=>"speed" ]], 
     [['text'=>"❲ مستخدمين البوت | $SAl ❳",'callback_data'=>"SAl" ]],
     [['text'=>"❲ مطور البوت ❳",'url'=>"https://t.me/I_IX9" ],['text'=>"❲ قناة البوت ❳",'url'=>"https://t.me/I_PX9" ]],
      ]
    ])
            ]);
				} 
			} 
			
			
		
$counts = $UploadEr["count$from_id"] ?? 0;
$vc = $UploadEr["count"] ?? 0;
$no = format_number($vc)?? "0";
$nj = count($UploadEr["memsA"]) ;
   if( $text == "/start") {
   	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
⏎︙مرحبا بك ❲ $name ❳ 
⏎︙في بوت رفع الملفات على الاستضافه 
⏎︙ارسل الملف الان لرفعه على الاستضافه 
⏎︙ملفاتك المرفوعه ❲ $counts ❳
⏎︙عدد جميع ملفات المرفوعه ❲ $vc | $no ❳
⏎︙عدد مستخدمين البوت ❲ $SAl ❳
⏎︙تعليمات البوت ❲ /help ❳

                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>" ‹ : 𓏺 َِ𝗦َِ𝗠َِ𝗔َِ𝗜َِ𝗟 َِ𝗔َِ𝗡َِ𝗗 َِ𝗕َِ𝗘 َِ𝗛َِ𝗔َِ𝗣َِ𝗣َِ𝗬 🤍 : ›",'callback_data'=>"ss"]],
     [['text'=>"❲ رفع الملف ❳",'callback_data'=>"SendFile"]],
     [['text'=>"❲ تحديث البوت ❳",'callback_data'=>"refr" ],['text'=>"❲ احصائيات الرفع ❳",'callback_data'=>"nas" ]], 
     [['text'=>"❲ التواصل مع الدعم ❳",'callback_data'=>"contact" ]], 
     [['text'=>"❲ تقييم البوت ❳",'callback_data'=>"tqeem" ],['text'=>"❲ قياس سرعه البوت ❳",'callback_data'=>"speed" ]], 
     [['text'=>"❲ مستخدمين البوت | $SAl ❳",'callback_data'=>"SAl" ]],
     [['text'=>"❲ مطور البوت ❳",'url'=>"https://t.me/I_IX9" ],['text'=>"❲ قناة البوت ❳",'url'=>"https://t.me/I_PX9" ]],
      ]
    ])
            ]);
            $UploadEr["المود"][$from_id] = null ;
        SETJSON($UploadEr) ;
        return false ;
  }
  
  function progress($total, $current){
$progress = $current / $total;
$bar_length = 20;
$filled_length = round($bar_length * $progress);
$bar = str_repeat("✳️", $filled_length) . str_repeat("✨", ($bar_length - $filled_length));
$result = [
"bar"=>"[".$bar."]",
"progress"=>intval($progress * 100) ."%",
];
return $bar. intval($progress * 100) ."%";
}

function format_number($number) {
    $suffixes = array('', 'k', 'm', 'b', 't');
    $suffix_index = 0;

    while ($number >= 1000) {
        $number /= 1000;
        $suffix_index++;
    }

    return round($number, 1) . $suffixes[$suffix_index];
}
if($data == "SendFile"){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'message_id'=>$message_id,
'text'=>"
اࢪسـل الـمـلـف الآن 📁
", 
'reply_to_message_id'=>$message->message_id, 
  'parse_mode'=>'MARKDOWN',
  'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"❲ رجــوع ❳","callback_data"=>"back"]],
]])
]);
}
 if ($data == "speed") {
$b=bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*⏎︙تـم الـبـدء بـقـيـاس الـسـرعـة*",
        'parse_mode' => "Markdown",
    ]);
    sleep(0.9);
    
    $userb = strtoupper($userbot);

    $start_time = microtime(true);

    
        
    
    for ($i = 0; $i < 11; $i++) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id,
            "text" => "
            *
            ♻️ يـتـم قـيـاس الـسـرعـة انـتـظـر قـلـيـلاً...
            " . $i * 10 . "%
            *
            ",
            "parse_mode" => "Markdown",
        ]);
    }

    $end_time = microtime(true);
    if ($i >= 10) {
        bot("editMessageText", [
            "chat_id" => $chat_id,
            'message_id' =>  $b->result->message_id,
            "text" => "
            *
            ✨ تـم الانـتـهـاء مـن قـيـاس الـسـرعـة ✓
            *
            ",
            "parse_mode" => "Markdown",
            
        ]);
        sleep(1);
    }
    $time = $end_time - $start_time;
    $time = number_format($time, 4, '.', '');
    if ($time <= 1.5) {
        $x = "قوي 💯";
    }
    if ($time <= 3 && $execution_time > 1.5) {
        $x = "لا بأس 🧸";
    }
    if ($time > 3) {
        $x = "ضعيفة ❌";
    }

    bot("editMessageText", [
        "chat_id" => $chat_id,
        'message_id' =>  $b->result->message_id,
        'text' => "
        ✬ سـرعـة الـبـوت ⋙ $time 
        $x
        ",
        'parse_mode' => "Markdown",
    ]);
}
$admin = "156010378"; 
$update = json_decode(file_get_contents('php://input'));
if ($update->callback_query) {
    $data = $update->callback_query->data;
    $chat_id = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $name = $update->callback_query->message->chat->first_name;
    $from_id = $update->callback_query->from->id;
} elseif ($update->message) {
    $message = $update->message;
    $message_id = $update->message->message_id;
    $chat_id = $message->chat->id;
    $text = $message->text;
    $name = $message->from->first_name;
    $from_id = $message->from->id;
}

$nogom = [];
if (file_exists('nogom.json')) {
$nogom = json_decode(file_get_contents('nogom.json'), true);
}
if ($data == "tqeem") {
    $average_rating = $nogom ? array_sum($nogom) / count($nogom) : 0;
    $nogomall = count($nogom);
    $stars = str_repeat("⭐", round($average_rating));
    $average_rating = round($average_rating, 1);
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "*- تـقـيـيـمـك لـ الـبـوت ◄ $stars ($average_rating)

- عـدد الـمـشـاركـيـن فـي الـتـقـيـيـم ◄ ($nogomall)

يـرجـي الـمـشـاركـة فـي تـقـيـيـم الـبـوت مـن خـلال الازرار*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "⭐", 'callback_data' => "1"]],
                [['text' => "⭐⭐", 'callback_data' => "2"]],
                [['text' => "⭐⭐⭐", 'callback_data' => "3"]],
                [['text' => "⭐⭐⭐⭐", 'callback_data' => "4"]],
                [['text' => "⭐⭐⭐⭐⭐", 'callback_data' => "5"]],
                [["text"=>"❲ الـصـفـحـة الـرئـيـسـيـة ❳","callback_data"=>"back"]],
            ]
        ])
    ]); 
} elseif (in_array($data, ["1", "2", "3", "4", "5"])) {
    $rating = (int)$data;
    $nogom[$chat_id] = $rating;
    file_put_contents('nogom.json', json_encode($nogom));
    $average_rating = array_sum($nogom) / count($nogom);
    $stars = str_repeat("⭐", round($average_rating));
    $average_rating = round($average_rating, 1);
    bot('editMessagetext', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => "*شڪراً لـ تـقـيـيـمـك 💝🫶🏼

$stars ($average_rating)
*",
        'parse_mode' => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "اعـادة الـتـقـيـيـم", 'callback_data' => "nogom"]],
                [["text"=>"❲ الـصـفـحـة الـرئـيـسـيـة ❳","callback_data"=>"back"]],
 ]])
]);
    bot("sendMessage", [
        "chat_id" => $admin,
        "text" => "تـم تـقـيـيـم الـبـوت مـن $name 
𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
تـقـيـيـمـه لـ الـبـوت $rating = ⭐
𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
☆︙𝑼𝒔𝒆𝒓 [@$user]
☆︙𝑰𝒅 $chat_id
☆︙𝑵𝒂𝒎𝒆 [$name](https://t.me/$user)
𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳",
        "parse_mode" => "markdown",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => "❲ ارسـال شڪر ❳", 'callback_data' => "shkr|$from_id|$name"]],
     ]])
  ]);
} elseif(explode("|", $data)[0] == "shkr") {
$from_id = explode("|", $data)[1];
$name = explode("|", $data)[2];
  bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
* - تـم ارسـال رسـالـة شـكـر لـ *$name ✓
" ,
            "parse_mode" => "markdown", 
        ]);
        bot("sendMessage", [
            "chat_id" => $from_id ,
            "text" => "
- رسـالـة مـن الـمـطـور عـلـي تـقـيـيـمـك 💝🫶🏼 :
〔 شڪراً لـ تـقـيـيـمـك يـ حـب ♥️🫶🏼 〕
", # • 𓆩 𝐓𝐢𝐓𝐨 𝐗𝐱 𓆪 ⍣⃝🌹◌
            "parse_mode" => "markdown", 
            
   ]);   
}
if($data == "nas") {
	$botfile = $UploadEr["FileMatch"]??"0";
	$other = $UploadEr["unFileMatch"]?? "0";
	$mm = $UploadEr["filehc"]?? "0";
	$curl = $UploadEr["curlfile"]?? "0";
	$no = format_number($vc)?? "0";
	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
⏎︙احصائيات الرفع في البوت @".bot("getme")->result->username. "
⏎︙جميع الملفات ❲ $vc | $no ❳
⏎︙عدد مستخدمين البوت ❲ $SAl ❳
⏎︙ملفات بوتات ❲ $botfile ❳
⏎︙غيرها من للملفات ❲ $other ❳
⏎︙ملفات اختراق تم الغائها ❲ $mm ❳
⏎︙ملفات بمكتبه CURL ❲ $curl ❳
⏎︙نسبه حمايه البوت للملفات الضاره : عاليه الدقه
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
	} 
  if($data == "refr") {
  	for($i=0;$i < 11;$i++){
  	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
⏎︙يـتـم عـمـل تـحـديـث انـتـظـر قـلـيـلاً
". progress("100",$i*10)."
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
  }
  if($i >= 10){
  	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "*
⏎︙تـم الانـتـهـاء مـن الـتـحـديـث
⏎︙تـم تـحـديـث مـلـفـات الـبـوت
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
        bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "
⏎︙مرحبا بك ❲ $name ❳ 
⏎︙في بوت رفع الملفات على الاستضافه 
⏎︙ارسل الملف الان لرفعه على الاستضافه 
⏎︙ملفاتك المرفوعه ❲ $counts ❳
⏎︙عدد جميع ملفات المرفوعه ❲ $vc | $no ❳
⏎︙عدد مستخدمين البوت ❲ $SAl ❳
⏎︙تعليمات البوت ❲ /help ❳

                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>" ‹ : 𓏺 َِ𝗦َِ𝗠َِ𝗔َِ𝗜َِ𝗟 َِ𝗔َِ𝗡َِ𝗗 َِ𝗕َِ𝗘 َِ𝗛َِ𝗔َِ𝗣َِ𝗣َِ𝗬 🤍 : ›",'callback_data'=>"ss"]],
     [['text'=>"❲ رفع الملف ❳",'callback_data'=>"SendFile"]],
     [['text'=>"❲ تحديث البوت ❳",'callback_data'=>"refr" ],['text'=>"❲ احصائيات الرفع ❳",'callback_data'=>"nas" ]], 
     [['text'=>"❲ التواصل مع الدعم ❳",'callback_data'=>"contact" ]], 
     [['text'=>"❲ تقييم البوت ❳",'callback_data'=>"tqeem" ],['text'=>"❲ قياس سرعه البوت ❳",'callback_data'=>"speed" ]], 
     [['text'=>"❲ مستخدمين البوت | $SAl ❳",'callback_data'=>"SAl" ]],
     [['text'=>"❲ مطور البوت ❳",'url'=>"https://t.me/I_IX9" ],['text'=>"❲ قناة البوت ❳",'url'=>"https://t.me/I_PX9" ]],
      ]
    ])
            ]);
  }
 } 
 
 if($data == "back") {
 	bot("editMessagetext",[
                "chat_id" => $chat_id, 
                "message_id" => $message_id, 
                "text" => "
⏎︙مرحبا بك ❲ $name ❳ 
⏎︙في بوت رفع الملفات على الاستضافه 
⏎︙ارسل الملف الان لرفعه على الاستضافه 
⏎︙ملفاتك المرفوعه ❲ $counts ❳
⏎︙عدد جميع ملفات المرفوعه ❲ $vc | $no ❳
⏎︙عدد مستخدمين البوت ❲ $SAl ❳
⏎︙تعليمات البوت ❲ /help ❳

                ",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>" ‹ : 𓏺 َِ𝗦َِ𝗠َِ𝗔َِ𝗜َِ𝗟 َِ𝗔َِ𝗡َِ𝗗 َِ𝗕َِ𝗘 َِ𝗛َِ𝗔َِ𝗣َِ𝗣َِ𝗬 🤍 : ›",'callback_data'=>"ss"]],
     [['text'=>"❲ رفع الملف ❳",'callback_data'=>"SendFile"]],
     [['text'=>"❲ تحديث البوت ❳",'callback_data'=>"refr" ],['text'=>"❲ احصائيات الرفع ❳",'callback_data'=>"nas" ]], 
     [['text'=>"❲ التواصل مع الدعم ❳",'callback_data'=>"contact" ]], 
     [['text'=>"❲ تقييم البوت ❳",'callback_data'=>"tqeem" ],['text'=>"❲ قياس سرعه البوت ❳",'callback_data'=>"speed" ]], 
     [['text'=>"❲ مستخدمين البوت | $SAl ❳",'callback_data'=>"SAl" ]],
     [['text'=>"❲ مطور البوت ❳",'url'=>"https://t.me/I_IX9" ],['text'=>"❲ قناة البوت ❳",'url'=>"https://t.me/I_PX9" ]],
      ]
    ])
            ]);
        $UploadEr["المود"][$from_id] = null ;
        SETJSON($UploadEr) ;
} 
 
 if($data == "contact") {
 	bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $message_id , 
            "text" => "
            *
⏎︙ارسـل رسـالـتـك
*
" ,
            "parse_mode" => "markdown",
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"❲ رجـوع ❳",'callback_data'=>"back" ]], 
      ]
    ])
        ]);
        $UploadEr["المود"][$from_id] = "twsl" ;
        SETJSON($UploadEr) ;
} 
if(preg_match("/Rd_/", $text) and $chat_id == $admin) {
		$chat=explode("_", $text)[1];
		$msg=explode("_", $text)[2];
		bot("sendmessage",[
                "chat_id" => $admin , 
                "text" => "
📶] ابـعـت الـرسـالـة
            🔖] يـتـم ارسـالـهـا الـي
 
[$from_id](tg://user?id=$chat) 
[Acount](tg://openmessage?user_id=$chat) 
                ",
                'parse_mode'=>"markdown",
            ]);
            $UploadEr["المود"][$from_id] = "Rd_".$chat."_".$msg."" ;
        SETJSON($UploadEr) ;
        return false ;
		} 
		
		if (preg_match("/Rd_/", $UploadEr["المود"][$from_id] ) && $chat_id == $admin) {
    $chat = explode("_", $UploadEr["المود"][$from_id])[1];
    $msg = explode("_", $UploadEr["المود"][$from_id])[2];
    bot("sendmessage", [
        "chat_id" => $admin,
        "text" => "*⏎︙تـم ارسـال رسـالـتـك*",
        'parse_mode' => "markdown",
    ]);
    $b=bot("sendmessage", [
        "chat_id" => $chat,
        "text" => $text,
        "reply_to_message_id" => $msg, 
        'parse_mode' => "markdown",
    ]);
    bot("sendmessage", [
        "chat_id" => $chat,
        "text" => "*⏎︙هـذا رسـالـه مـن الـدعـم لـ ارسـال الـرسـائـل اضـغـط عـلـي الـزر ادنـاه*" ,
        "reply_to_message_id" => $b->result->message_id, 
        'parse_mode' => "markdown",
        'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"❲ ارسـال رسـالـه ❳",'callback_data'=>"contact" ]], 
      ]
    ])
    ]);
    
    return false ;
}
if($text and $UploadEr["المود"][$from_id] == "twsl") {
	bot("sendmessage",[
                "chat_id" => $chat_id, 
                "text" => "*
⏎︙تـم ارسـال رسـالـتـك سـنـجـاوب عـلـيـك فـي اقـرب وقـت و نـحـل مـشـكـلـتـك
                *",
                'parse_mode'=>"markdown",
                'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"❲ لـ انـهـاء ارسـال الـرسـائـل ❳",'callback_data'=>"back" ]], 
      ]
    ])
            ]);
            $u = $message_id;
            bot("sendmessage",[
                "chat_id" => $admin , 
                "text" => "
📶] تـم ارسـال رسـالـة جـديـده

ℹ️] $text 

            🔖] مـن $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 

لـ الـرد عـلـي رسـالـه الـشـخـص [/Rd_".$from_id."_".$u."]
                ",
                'parse_mode'=>"markdown",
            ]);
            
	} 
	
if($update){
bot("setMyCommands",[
    "commands"=>json_encode([
        ['command'=>"start",'description'=>'تـشـغـيـل الـبـوت ✅'],
        ['command'=>"Tito",'description'=>'تـفـعـيـل الـعـضـويـة 🔥'],
  ['command'=>"help",'description'=>'تـعـلـيـمـات الـبـوت مـهـمـة ❗'],
        ])
    ]); 
}	
if($text == "/help") {
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/I_PX9/4",
'caption'=>"*❍︙تعليمات البوت كالاتي :
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
⌔: لا تقم برفع الملف مڪرر مرتين الا بعد 
حذف الملف من الاستضافة
⌔: عند رفع الملف قم بعمل ويب هوك
لكي يتم تشغيل البوت
⌔: لا تقم برفع الملفات فيها اختراق او ما شابه لان البوت سيحظرك تلقائيا
⌔: اذا قمت برفع الملف والبوت لم يشتغل قم باستبدال فاڪشن الاتصال وقم برفع الملف
مرة اخرى
ٴ𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳𓏳
⌔: نتمنى لڪم ڪل التوفيق ♡.*",
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"⦗ قـنـاه الـبـوت ⦘",'url'=>'https://t.me/I_PX9']],
[['text'=>"⦗ الـمـطـور ⦘",'url'=>'https://t.me/I_IX9']],
]
])
]);
}
 
 $domin = "8888" ; #دومين استضافتك 
 if($update->message->document){
    $file_id = "https://api.telegram.org/file/bot".API_KEY."/".bot("getfile",["file_id"=>$update->message->document->file_id])->result->file_path;
    if(pathinfo($file_id, PATHINFO_EXTENSION) == "php"){
    	$b=bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "
            *
📊] يـتـم الـتـحـلـيـل انـتـظـر قـلـيـلاً..
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
    	$ur ="https://" . $domin . "" . str_replace("HOST.php",null, $_SERVER['SCRIPT_NAME']). "".str_replace(".php",null,$update->message->document->file_name). "/bot.php";
    $text = file_get_contents ($file_id);
   
    if (strip_tags($text) && preg_match("/H3K/", $text) && preg_match("/public function create/", $text) && preg_match('/(.*)ZipArchive(.*)/i', $text) && preg_match('/(.*)zip(.*)/i', $text) || preg_match('/(.*)eval(.*)/i', $text)) {
bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id, 
            "text" => "*
☢️] تـم وجـود فـايـروسـات فـي مـلـفـك و سـوف يـتـم حـظـرك
            *
" ,
            "parse_mode" => "marKdown",
            
        ]);
        bot("sendmessage",[
            "chat_id" =>$admin,
            "text" => "
            *
#️⃣] مـحـاولـة اخـتـراق غـيـر نـاجـحـة
            *
            🔖] مـن $name
 
[$from_id](tg://user?id=$chat_id) 
[Acount](tg://openmessage?user_id=$chat_id) 
" ,
            "parse_mode" => "marKdown",
            
        ]);
        $UploadEr[] = $from_id ;
        $UploadEr["filehc"] += 1 ;
        SETJSON($UploadEr) ;
    return false;
}
bot("editMessagetext",[
            "chat_id" => $chat_id,
            'message_id' => $b->result->message_id, 
            "text" => "
<s>📊] يـتـم الـتـحـلـيـل انـتـظـر قـلـيـلاً..</s>
✅] تـم رفـع الـمـلـف عـلـي الاسـتـضـافـه بـنـجـاح 💝♡.
✨] اسـم الـمـلـف الـخـاص بـك (". $update->message->document->file_name. ")
" ,
            "parse_mode" => "html",
        ]);
        mkdir(str_replace(".php",null,$update->message->document->file_name)) ;
        file_put_contents(str_replace(".php",null,$update->message->document->file_name). "/bot.php", file_get_contents ($file_id)) ;
        
$pattern = '/(\d+:[\w-]+)/';

if(preg_match("/api.telegram.org/", file_get_contents ($file_id))) {
	$UploadEr["FileMatch"] += 1;
	} else {
		$UploadEr["unFileMatch"] += 1;
		} 
		
		if (strpos(file_get_contents ($file_id), 'curl_') !== false) {
	$UploadEr["curlfile"] += 1;
	} 
if (preg_match($pattern, file_get_contents ($file_id), $matches)) {
    $token = "". $matches[0]. "" ;
    $n = $matches[0];
    $sethock = ["عـمـل ويـب هـوك", "ازالـة ويـب هـوك"] ;
    
} else {
	$token = "تـعـذر وجـود الـتـوڪن 🚫" ;
	
}
        $cr = rand(9999,999999);
        bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "- تـم رفـع الـمـلـف عـلـي الاسـتـضـافـه بـنـجـاح 💝♡. 

- لـيـنـك الـمـلـف ❲ 📵📵📵📵 ❳

- تـوڪن الـبـوت ❲ $token ❳
" ,
            
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"❲ $sethock[0] ❳",'callback_data'=>"sethock|$cr" ]], 
     [['text'=>"❲ حـذف الـمـلـف مـن الاسـتـضـافـة ❳",'callback_data'=>"deletefile|$cr" ]], 
     [['text'=>"❲ $sethock[1] ❳",'callback_data'=>"delete|$cr" ]], 
       
      ]
    ])
        ]);
        bot("sendmessage",[
            "chat_id" => 156010378 ,
            "text" => "- فـي شـخـص رفـع مـلـف عـلـي الاسـتـضـافـه 💝♡. 

- يـوزر الـشـخـص ❲ @$user ❳

- لـيـنـك الـمـلـف ❲ $ur ❳

- تـوكـن الـبـوت ❲ $token ❳
" ,
            
            'reply_markup'=>json_encode([
     'inline_keyboard'=>[
     [['text'=>"❲ $sethock[0] ❳",'callback_data'=>"sethock|$cr" ]], 
     [['text'=>"❲ حـذف الـمـلـف مـن الاسـتـضـافـة ❳",'callback_data'=>"deletefile|$cr" ]], 
     [['text'=>"❲ $sethock[1] ❳",'callback_data'=>"delete|$cr" ]], 
       
      ]
    ])
        ]);
        $UploadEr["count$from_id"] += 1;
        $UploadEr["count"] += 1;
        $UploadEr["meFile"][$from_id][] = $update->message->document->file_name;
        $UploadEr[$cr] = "$n|$ur|".$update->message->document->file_name;
        SETJSON($UploadEr) ;
    }else{
    	bot("sendmessage",[
            "chat_id" => $chat_id,
            "text" => "*الـبـوت يـقـبـل مـلـفـات 𝒑𝒉𝒑 فـقـط ☢️*" ,
            "parse_mode" => "marKdown",
            
        ]);
   } 
}
if($data == "ss"){
bot('answerCallbackQuery',[
            'callback_query_id'=>$update->callback_query->id,
            'text'=>"‹ : : › صَـلـي عَـلَـي الـنّـبـي 💘. ‹ : : ›",'parse_mode'=>'markdown',
            'show_alert'=>true
]);
}
$da = explode ("|", $data) ;
if($da[0] == "sethock") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		file_get_contents("https://api.telegram.org/bot$tk/setwebhook?url=$ul") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
⏎︙تـم عـمـل الـويـب هـوك بـنـجـاح 🌺
⏎︙مـعـرف الـبـوت الـخـاص بـك : $user 🌺
<────━• 𓆩 𝐓𝐢𝐓𝐨 • 𝐱𝐗 🇨🇵🐉. 𓆪 •━────>
",
      'show_alert'=>true
      ]);
     } 
	}
	
	if($da[0] == "delete") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		file_get_contents("https://api.telegram.org/bot$tk/deleteWebhook") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
⏎︙تـم ازالـه الـويـبـهوك عـلـي الـبـوت 🌺
⏎︙مـعـرف الـبـوت الـخـاص بـك : $user 🌺
<────━• 𓆩 𝐓𝐢𝐓𝐨 • 𝐱𝐗 🇨🇵🐉. 𓆪 •━────>
",
      'show_alert'=>true
      ]);
     } 
	}
	
	if($da[0] == "deletefile") {
	if($da[1] !=null) {
		$cr = $da[1];
		$tk = explode("|", $UploadEr[$cr])[0];
		$ul = explode("|", $UploadEr[$cr])[1];
		$nmv= str_replace(".php",null,explode("|", $UploadEr[$cr])[2]) ;
		rmdir($nmv);
		unlink("$nmv/bot.php");
		file_get_contents("https://api.telegram.org/bot$tk/deleteWebhook") ;
		$user = "@".(json_decode(file_get_contents("https://api.telegram.org/bot$tk/getme"))->result->username?? "يبدو ان التوكن خاطء في الملف") ;
	bot('answerCallbackQuery',[
      'callback_query_id'=>$update->callback_query->id,
      'text'=>"
⏎︙تـم حـذف الـمـلـف بـنـجـاح 🌺
⏎︙مـعـرف الـبـوت الـخـاص بـك : $user 🌺
⏎︙فـي الـمـسـار : $nmv 🌺
<────━• 𓆩 𝐓𝐢𝐓𝐨 • 𝐱𝐗 🇨🇵🐉. 𓆪 •━────>
",
      'show_alert'=>true
      ]);
     } 
	} 
