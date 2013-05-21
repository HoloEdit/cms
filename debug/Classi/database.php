<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


define('DATA_HOST', '127.0.0.1'); // LOCALHOST
define('DATA_UTENTE', 'root'); // USERNAME
define('DATA_PASS', 'calcio14'); //PASSWORD DB
define('DATA_DB', 'base'); // NOME DB

class Database{
 
  function __construct() {
    
    $connessione = @mysql_connect(DATA_HOST, DATA_UTENTE, DATA_PASS) or die('Errore nella connessione: ' . mysql_error());

    @mysql_select_db(DATA_DB, $connessione) or die('Errore dal database: ' . mysql_error());
  }
}

?>