<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/



function __autoload($class_name) {
    include "Classi/" . strtolower($class_name) . ".php";
}
DEFINE('FND',9); // rank founder
DEFINE('ADM',7); // rank admin
define('APP_ID', '496764993708032'); 
define('APP_SECRET', '268edb07b36624e045b5722270ff07c8'); 
$data = new Database();
$sistema = new Sistema();
$server = mysql_query("SELECT * FROM server_status");
$server1 = mysql_fetch_Assoc($server);
$utentionline = $server1['users_online'];
$url_sito = 'localhost/debug';  //url del sito


?>





