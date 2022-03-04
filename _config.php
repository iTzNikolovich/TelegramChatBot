<?php
//config.php
$config = array(

"formattazione_predefinita" => "HTML",
     //o "Markdown" o ""


"formattazione_messaggi_globali" => "HTML",



"nascondi_anteprima_link" => true,


"tastiera_predefinita" => "inline",
       //'normale' for old-style keyboard


"funziona_nei_canali" => true,
"funziona_messaggi_modificati" => true,
"funziona_messaggi_modificati_canali" => true,


);


//You shouldn't edit this
require 'functions.php';


//plugins

$plugins = array(

"plugin.php" => true,
"stop.php" => true,
"plugin2.php" => true,
);




