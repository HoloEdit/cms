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


if($_POST['password'] == ''){
    
}elseif($_POST['username'] == ''){
    
    
}else{
             if($sistema->utente('fb','username',$_SESSION['username']) == 1){
  mysql_query("UPDATE users SET fb = '0' WHERE username = '".$_SESSION['username']."'")or die('Errore: ' . mysql_error());
    }else{
    }
    
   $reg->login($filtro->filtro($_POST['username']), $filtro->filtro($_POST['password']));
 
}
}
    


?>