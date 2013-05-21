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
    
    }elseif($_POST['email'] == ''){
        

    
    
}else{
    
    $reg->registra($filtro->Filtro($_POST['username']), $filtro->Filtro($_POST['password']), $filtro->Filtro($_POST['email']));

}
}
    


?>