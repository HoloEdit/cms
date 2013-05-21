<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
/*
include('listastf.php');


if(in_array($_SESSION['username'],$admin)){
    
    $cont = 1;
}else{
    
    $cont = 2;
}

if($sistema->permessi('secure','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1 AND $cont == '2'){
    
    mysql_Query("UPDATE users SET rank = 1 WHERE username = '".$_SESSION['username']."'");
    
}elseif($sistema->permessi('secure','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1 AND $cont == '1'){
   */
   
    if($sistema->utente('secure','username',$_SESSION['username']) == '1'){
    if(!$_SESSION['secure']){
    header("Location: ../secure_access.php"); exit;
}else{
    
}
}


?>

