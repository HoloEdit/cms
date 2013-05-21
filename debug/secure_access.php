<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
include('include.php');
include('/Classi/sessione.php');
include('funzione.php');
include('controllo.php');

$sistema = New Sistema();
$filtro = New Filtri();
if($sistema->utente('rank','username',$_SESSION['username']) == FND OR $sistema->utente('rank','username',$_SESSION['username']) == ADM){

}else{
 header("Location: ../home.php"); exit;
}
   
?>
<!-- POWERED BY ZAMBAHACKER -->
<!-- /////////////// -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $sistema->dati('nome'); ?> - Accesso sicuro</title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<link rel="shortcut icon" href="https://images-eussl.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1650/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="/web-gallery/static/styles/embed.css" type="text/css" />
<script src="http://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1699/web-gallery/static/js/embed.js" type="text/javascript"></script>
<link media="only screen and (max-device-width: 480px)" href="http://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1699/web-gallery/styles/small-device.css" type= "text/css" rel="stylesheet"/>

<link rel="stylesheet" href="/web-gallery/static/styles/common.css" type="text/css" />
<link rel="stylesheet" href="/web-gallery/static/styles/embeddedregistration.css" type="text/css" />
<link rel="stylesheet" href="/web-gallery/static/styles/identitysettings.css" type="text/css" />
    <script type="text/javascript" src="https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>



</head>

<body id="embedpage">
<div id="overlay"></div>



<script type="text/javascript">
    function initChangePasswordForm() {
        ChangePassword.init();
    }
    if (window.HabboView) {
        HabboView.add(initChangePasswordForm);
    } else if (window.habboPageInitQueue) {
        habboPageInitQueue.push(initChangePasswordForm);
    }
</script><div id="container">

    <div class="settings-container clearfix">
        <h1>Accesso sicuro</h1>
	        <a href="esci.php"><div id="back-link">
   	   
	        </div>        </a>
        <div style="padding: 0 10px">
<br />
            <center><img src="http://www.stilviaggi.it/images/icoloading.gif"/><br /><?php echo $_SESSION['username']; ?> apri ora l'applicazione per l'accesso sicuro..</center>
							<div id="controllo">
                      <script type="text/javascript">
                      var timer = setInterval ("Reload()", 2000);
function Reload(){
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/secure.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
};
</script> </div>
              
       		
        </div>
    </div>
    <div class="settings-container-bottom"></div>
  


    
    

    



</body>
</html>
