<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

 $file = "funzione.php";
      if(!file_exists($file))  
   {  
   header('location:messaggio.php?id=2'); 
   }

   if($sistema->dati('chiuso') == 1){
    
  if($sistema->permessi('vista_manutenzione','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){

   
    
   }else{
    header('location:manutenzione.php'); 
   }
   }
   if($sistema->ban($_SESSION['username']) == 1){
    header('location:esci.php'); 
    
   }

?>