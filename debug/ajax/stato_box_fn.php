<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
session_start();

@include('../include.php');
$reg = new Iscrizioni();
$filtro = new Filtri();

if($richiesta != $url_sito){
    echo 'Errore';
   }else{



    

mysql_query("UPDATE users SET motto = '".$filtro->Filtro($_POST['motto'])."', stato_bac = '".$filtro->Filtro($_POST['bacheca'])."', block_newfriends = '".$filtro->Filtro($_POST['amicizie'])."' WHERE username = '".$_SESSION['username']."'");
 echo 1;
}

    


?>