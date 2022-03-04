<?php
function fw($chatID, $fromchat, $msgid)
{
global $api;
$args = array(
'chat_id' => $chatID,
'from_chat_id' => $fromchat,
'message_id' => $msgid
);
$r = new HttpRequest("get", "https://api.telegram.org/$api/forwardMessage", $args);

}
$msgid = $update["message"]["message_id"];
$replyID = $update["message"]["reply_to_message"]["text"];

if($replyID and $chatID == $adminID)
{
     sm($msgid, $chatID, "[ID] $userID");
}
else
{
   if($chatID != $adminID)
   {
     fw($adminID, $chatID, $msgid);
   }
}