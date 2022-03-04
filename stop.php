<?php

/*
PLUGIN GRUPPI
Versione 3.0
*/
echo "<br>Plugin Stop: 1.0";

if(strpos($msg, "/ban ")===0 and $adminID==$chatID)
{
$campo = explode("You have been banned", $msg);
mysql_query("update $tabella set page = 'ban' where chat_id = \"$campo[1]\" or username = \"".str_replace("@","",$campo[1])."\"");
sm($chatID, "$campo[1] was banned!");
}

if(strpos($msg, "/unban ")===0 and $adminID==$chatID)
{
$campo = explode("You have been unbanned. now you can use the bot!", $msg);
mysql_query("update $tabella set page = '' where chat_id = \"$campo[1]\" or username = \"".str_replace("@","",$campo[1])."\"");
sm($chatID, "$campo[1] was unbanned!");
}

