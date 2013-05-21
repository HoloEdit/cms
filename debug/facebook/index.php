<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
@include('../include.php');
$filtro = new Filtri();
$sistema = new Sistema();

// ######################################################################### Redirect for Facebook
function Redirect($url){
$redirect = header("location:".$url.""); 
return $redirect;
}


require_once('API/facebook.php');
$facebook = new Facebook(array('appId' => APP_ID, 'secret' => APP_SECRET, 'cookie' => true));
$session = $facebook->getUser();
$loginUrl = $facebook->getLoginUrl();
$do = $filtro->Filtro($_GET['do']);
$profile = $facebook->api('/' . $session);

echo $profile['id'];

?>
