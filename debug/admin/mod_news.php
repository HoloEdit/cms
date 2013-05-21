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

 if($sistema->permessi('hk_modnews','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
      if($_POST['title'] == ''){
        echo 'errore';
    }else{
mysql_query("UPDATE cms_news SET title = '".$filtro->filtro($_POST['title'])."', image = '".$filtro->Filtronews($_POST['img'])."', shortstory = '".$filtro->Filtronews($_POST['intro'])."', longstory = '".$filtro->Filtronews($_POST['completa'])."', modifica = '".$_SESSION['username']."' WHERE id = '".$filtro->Filtro($_POST['num'])."'") or die(mysql_error());
             mysql_query("INSERT INTO cms_log (username,azione,data,ip) VALUE ('".$_SESSION['username']."','Modifica news ".$filtro->filtro($_POST['title'])."','".$sistema->data()."','".$sistema->ip_ret()."')") or die('Errore: ' . mysql_error());

 echo 1;
 }
}else{
    echo 'errore';
}
    


}


?>