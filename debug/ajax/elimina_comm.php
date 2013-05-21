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



if($sistema->select('user_name', 'bacheca', 'id', $filtro->Filtro($_POST['id'])) == $sistema->utente('username', 'username', $_SESSION['username']) OR $sistema->utente('username', 'username', $_SESSION['username']) == $sistema->select('nomeprofilo', 'bacheca', 'id', $filtro->Filtro($_POST['id'])) OR $sistema->permessi('bacheca','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
mysql_query("DELETE FROM `bacheca` WHERE `id` = '".$filtro->Filtro($_POST['id'])."'");
echo 1;

}else{
    
    echo 'errore';
}
}
?>

