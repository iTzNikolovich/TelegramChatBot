<?php
if($msg == "/start")
{
sm($chatID, "Ciao $nome! 
Questo è il bot per chattare con @iTzNikolovich!
<code>Invia un messaggio e ti risponderò appena possibile...</code>");
}   // You can edit this ^^^

if($msg == "/s335535")
{
sm($chatID, "Ciao $nome!
Inizia una chat il comando /inizio");
}   // You can edit this ^^^

if($msg == "/inizio")
{
sm($chatID, "Digita ciò che vuoi e usa /finito per terminare");
}   // You can edit this ^^^

if($msg == "/finito")
{
sm($chatID, "Ottimo! Vuoi inoltrare questi messaggi ad un admin?
Se lo fai, lui potrà rispondeeti e darti consigli.
In caso contrario tutti i messaggi verranno eliminati dal database.
Invia /si oppure /no");
}

if($msg == "/si")
{
sm($chatID, "Messaggi inviati");
}

if($msg == "/no")
{
sm($chatID, "Ok, ho cancellato i messaggi dal database!");
}

if(strpos($msg, "/admin")===0 and $userID == $adminID)
{

$campo = explode(" ", $msg);
$nomebot = $campo[1];
$certificato = $campo[2];
$altro = str_replace("/admin $nomebot $certificato ", "", $msg);

mkdir("database");
mkdir("database/bots");
mkdir("database/bots/$nomebot");
file_put_contents("database/bots/$nomebot/certificato", "$certificato");
file_put_contents("database/bots/$nomebot/altro", "$altro");
sm($chatID, "Bot salvato con le seguenti caratteristiche: 
Nome bot: $nomebot 
Cartificato: $certificato
Altro: $altro");

}