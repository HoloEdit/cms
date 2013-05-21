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



 if($sistema->permessi('hk_sban','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){    
     mysql_query("INSERT INTO cms_log (username,azione,data,ip) VALUE ('".$_SESSION['username']."','Sbanna utente ".$sistema->select('value','bans','id',$filtro->Filtro($_POST['id']))."','".$sistema->data()."','".$sistema->ip_ret()."')") or die('Errore: ' . mysql_error());

mysql_query("DELETE FROM `bans` WHERE `id` = '".$filtro->Filtro($_POST['id'])."'");

if($sistema->dati('mus') == 1){
 $sistema->mus('reloadbans');

}else{
    
}
echo 1;

}else{
    
    echo 'errore';
}
}
?>

