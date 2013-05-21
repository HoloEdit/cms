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


 if($sistema->permessi('hk_news','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
    if($_POST['title'] == ''){
        echo 'errore';
    }else{
mysql_Query("INSERT INTO cms_news (title,shortstory,longstory,image,author,attivo,data) VALUES ('".$filtro->filtro($_POST['title'])."', '".$filtro->Filtronews($_POST['intro'])."', '".$filtro->Filtronews($_POST['completa'])."', '".$filtro->Filtronews($_POST['img'])."', '".$_SESSION['username']."', '1', '".$sistema->data()."')");
 echo 1;
 }
}else{
    echo 'errore';
}
    


}


?>