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

 if($sistema->permessi('mod_ut','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
     
    if($sistema->utente('rank','username',$_SESSION['username']) == FND){    
        $rank = $filtro->Filtro($_POST['rank']); 
        }else{
            if($_POST['rank'] == FND or $_POST['rank'] == ADM){
                $rank = $sistema->utente('rank','username',$filtro->Filtro($_POST['user']));
                
                
             
            }else{
                  $rank = $filtro->Filtro($_POST['rank']);
            }
            }
   if($sistema->permessi('hk_username','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
    $username=$filtro->Filtro($_POST['username']);
    }else{
        $username=$sistema->utente('username','username',$filtro->Filtro($_POST['user']));
    }
     if($sistema->permessi('hk_zaffiri','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
    $zaffiri=$filtro->Filtro($_POST['activity_points']);
    }else{
        $zaffiri=$sistema->utente('activity_points','username',$filtro->Filtro($_POST['user']));
    }
     if($sistema->permessi('hk_bits','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
    $bits=$filtro->Filtro($_POST['vip_points']);
    }else{
        $bits=$sistema->utente('vip_points','username',$filtro->Filtro($_POST['user']));
    }
     if($sistema->permessi('hk_crediti','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
    $crediti=$filtro->Filtro($_POST['credits']);
    }else{
        $crediti=$sistema->utente('credits','username',$filtro->Filtro($_POST['user']));
    }
     if($sistema->permessi('hk_motto','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
    $motto=$filtro->Filtro($_POST['motto']);
    }else{
        $motto=$sistema->utente('motto','username',$filtro->Filtro($_POST['user']));
    }
     if($sistema->permessi('hk_ruolo','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
    $ruolo=$filtro->Filtro($_POST['ruolo']);
    }else{
        $ruolo=$sistema->utente('ruolo','username',$filtro->Filtro($_POST['user']));
    }
            
            mysql_query("UPDATE users SET username ='".$username."', credits = '".$crediti."', rank = '".$rank."', vip_points = '".$bits."', motto = '".$motto."', activity_points = '".$zaffiri."', ruolo = '".$ruolo."' WHERE username = '".$filtro->Filtro($_POST['user'])."'") or die('Errore: ' . mysql_error());
            mysql_query("INSERT INTO cms_log (username,azione,data,ip) VALUE ('".$_SESSION['username']."','Modifica utente ".$filtro->filtro($_POST['username'])."','".$sistema->data()."','".$sistema->ip_ret()."')") or die('Errore: ' . mysql_error());
if($sistema->dati('mus') == 1){
 $sistema->mus('updatecredits',$sistema->utente('id','username',$filtro->Filtro($_POST['user'])));
  $sistema->mus('updatemotto',$sistema->utente('id','username',$filtro->Filtro($_POST['user'])));
   $sistema->mus('updatepixels',$sistema->utente('id','username',$filtro->Filtro($_POST['user'])));
    $sistema->mus('updatepoints',$sistema->utente('id','username',$filtro->Filtro($_POST['user'])));
}else{
    
}

echo 1;

        

 
 
 
}else{
    echo 'errore';
}
    


}


?>