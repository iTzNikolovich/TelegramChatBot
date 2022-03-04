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
$replyID = $update["message"]["reply_to_message"]["forward_from"]["id"];

if($replyID and $chatID == $adminID)
{
     sm($replyID, $msg);
}
else
{
   if($chatID != $adminID)
   {
     fw($adminID, $chatID, $msgid);
   }
   else
   {
     sm($chatID, "You have to reply to a message..."); //You can edit this
   }
}
