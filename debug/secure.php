<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
include('include.php');
include('controllo.php');
include('funzione.php');
$sistema = New Sistema();
$filtro = New Filtri();
$secure = New Secure();
if($_GET['action'] == 'accesso'){
 $query = mysql_query("SELECT * FROM secure WHERE serial = '".$secure->serial($filtro->Filtro($_GET['serial']))."' and pcname = '".$secure->serial($filtro->Filtro($_GET['pcname']))."'") or die('Errore: ' . mysql_error());
     $conta = mysql_num_rows($query);
     $dati = mysql_fetch_Assoc($query);
     if($conta != 0){
        mysql_query("UPDATE users SET autorizzato = '1' WHERE username = '".$dati['user_name']."'") or die(mysql_error());    
       
         echo '<center>Sei stato autorizzato</center>';
     }else{
        
         echo '<center>Dati inesistenti</center><br>';
         echo  $secure->serial($filtro->Filtro($_GET['serial'])).'<br>';
         echo $secure->serial($filtro->Filtro($_GET['pcname']));
     }



 }elseif($_GET['action'] == 'registro'){
     $query = mysql_query("SELECT * FROM secure WHERE serial = '".$secure->serial($filtro->Filtro($_GET['serial']))."' and pcname = '".$secure->serial($filtro->Filtro($_GET['pcname']))."'") or die('Errore: ' . mysql_error());
     $conta = mysql_num_rows($query);
     if($conta == 0){
       mysql_query("INSERT INTO secure (serial,pcname) VALUES ('".$secure->serial($filtro->Filtro($_GET['serial']))."', '".$secure->nome($filtro->Filtro($_GET['pcname']))."')");
       echo '<center>Verrai registrato con i seguenti dati: '. $secure->serial($filtro->Filtro($_GET['serial'])).'<br><font color="red">'.$secure->nome($filtro->Filtro($_GET['pcname'])).'</font> <-- forniscimi a zambahacker </center>';
     }else{
        echo '<center>Dati già registrati</center>';
               echo '<center>'.$secure->serial($filtro->Filtro($_GET['serial'])).'<br><font color="red">'.$secure->nome($filtro->Filtro($_GET['pcname'])).'</font> <-- forniscimi a zambahacker </center>';
 
     }
 }else{
    
    echo 'Errore';
 }


?>