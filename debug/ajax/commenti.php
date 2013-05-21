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
$commenti = New Commenti();
if($richiesta != $url_sito){
    echo 'Errore';
   }else{

if($_POST['commento'] == ''){
echo 2;   
}elseif($_POST['nomeprofilo'] == ''){
 echo 3;   
}elseif($_SESSION['username'] == $_POST['nomeprofilo']){
$commenti->commento($_SESSION['username'], $filtro->Filtro($_POST['nomeprofilo']), $filtro->Filtro($_POST['commento']), $sistema->data(), 1, $_POST['commento']); 
echo 1;    
}elseif($_SESSION['username'] != $_POST['nomeprofilo']){
$commenti->commento($_SESSION['username'], $filtro->Filtro($_POST['nomeprofilo']), $filtro->Filtro($_POST['commento']), $sistema->data(), 0, $_POST['commento']); 
echo 1;    
}
}


?>