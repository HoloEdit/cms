<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
@include('../include.php');
include('../Classi/sessione.php');
$filtro = new Filtri();
$sistema = new Sistema();
if($richiesta != $url_sito){
    echo 'Errore';
   }else{
   if($sistema->utente('autorizzato','username',$_SESSION['username']) == 1){
    $_SESSION['secure'] = $_SESSION['username'].'-scureacces';
    mysql_query("UPDATE users SET autorizzato = '0' WHERE username = '".$_SESSION['username']."'");
    echo 1;
   }else{
    echo 2;
   }

}


?>