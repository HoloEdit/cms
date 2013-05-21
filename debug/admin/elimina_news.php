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



if($sistema->utente('rank','username',$_SESSION['username']) == FND or $sistema->utente('rank','username',$_SESSION['username']) == ADM){
    mysql_query("UPDATE cms_news SET attivo = '0' WHERE `id` = '".$filtro->Filtro($_POST['id'])."'");
echo 1;

}else{
    
    echo 'errore';
}
}
?>

