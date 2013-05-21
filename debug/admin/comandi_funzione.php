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

if($sistema->utente('rank','username',$_SESSION['username']) == FND){
     
      if($_POST['comando'] == 'backup'){
        $sistema->socket('backup_db','127.0.0.1','100');
          echo 1;
      }elseif($_POST['comando'] == 'riavvia_phx'){
            $sistema->socket('riavvia_phx','127.0.0.1','100');
              echo 1;
      }elseif($_POST['comando'] == 'chiudi'){
        $sistema->socket('chiudi_phx','127.0.0.1','100');
          echo 1;
      }elseif($_GET['comando'] == 'riavvia_vps'){
        $sistema->socket('chiudi_vps','127.0.0.1','100');
        echo 1;
      }
 
 
}else{
    echo 'errore';
}
    


}


?>