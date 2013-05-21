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


 if($sistema->permessi('hk_gen','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
    mysql_query("UPDATE sito SET motivo = '".$filtro->Filtro($_POST['motivo'])."', nome = '".$filtro->Filtro($_POST['nome'])."', chiuso = '".$filtro->Filtro($_POST['chiuso'])."' ");
 echo 1;
}else{
    echo 'errore';
}
    


}


?>