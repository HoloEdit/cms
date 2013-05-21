<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
include('include.php');
session_start();

if(!$_SESSION['username']){
    header("Location: ../index.php"); exit;
}
include('funzione.php');
include('controllo.php');

$sistema = New Sistema();
$filtro = New Filtri();
include('secure_control.php');

if($sistema->utente('dati_fb','username',$_SESSION['username']) == 0){
    
    header('location:home.php'); 
}
?>
<!-- POWERED BY ZAMBAHACKER -->
<!-- /////////////// -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $sistema->dati('nome'); ?> - I tuoi dati!</title>

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

<div id="change-password-form" class="overlay-dialog" style="display: none;">
    <div id="change-password-form-container" class="clearfix form-container">
        <h2 id="change-password-form-title" class="bottom-border">Password dimenticata?</h2>
        <div id="change-password-form-content" style="display: none;">
            <form method="post" action="https://www.habbo.it/account/password/identityResetForm" id="forgotten-pw-form">
                <input type="hidden" name="page" value="/identity/password?changePwd=true" />
                <span>Scrivi qui l'indirizzo email del tuo Account Habbo:</span>
                <div id="email" class="center bottom-border">
                    <input type="text" id="change-password-email-address" name="emailAddress" value="" class="email-address" maxlength="48"/>
                    <div id="change-password-error-container" class="error" style="display: none;">Inserisci un indirizzo e-mail corretto</div>
                </div>
            </form>
            <div class="change-password-buttons">
                <a href="#" id="change-password-cancel-link">Annulla</a>
                <a href="#" id="change-password-submit-button" class="new-button"><b>Invia email</b><i></i></a>
            </div>
        </div>
        <div id="change-password-email-sent-notice" style="display: none;">
            <div class="bottom-border">
                <span>Ciao! Ti abbiamo appena inviato un'email con il link alla pagina in cui potrai modificare la tua Password.<br>
<br></span>
                <div id="email-sent-container"></div>
            </div>
            <div class="change-password-buttons">
                <a href="#" id="change-password-change-link">Indietro</a>
                <a href="#" id="change-password-success-button" class="new-button"><b>Chiudi</b><i></i></a>
            </div>
        </div>
    </div>
    <div id="change-password-form-container-bottom" class="form-container-bottom"></div>
</div>

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
        <h1>Crea il tuo account</h1>
	        <div id="back-link">
   	     	<center><font color="#ff0000"><b>Scegli un nome e una password per accedere in hotel</b></font></center>
	        </div>        
        <div style="padding: 0 10px">
<div  id="messaggio1">

        </div>

         <form id="change-password" method="post" action="javascript:void(0)" onsubmit="datifb()">
            <input type="hidden" name="fromClient" value="false" />
            <div class="field field-currentpassword">
              <label for="nome">Nome:</label>
              <input type="text" id="nome" size="35" name="nome" value="" class="password-field" maxlength="32"/>
              <p class="help"></p>
            </div>

            <div class="form-box">
            <div class="field field-password">
              <label for="password">Nuova Password</label>
              <input type="password" id="password" size="35" name="newPassword" value="" class="password-field" maxlength="32"/>
            </div>

            <div class="field field-password2">
              <label for="password2">Nuova Password (di nuovo)</label>
              <input type="password" id="password2" size="35" name="retypedNewPassword" value="" class="password-field" maxlength="32"/>
              <p class="help">La tua Password deve essere lunga almeno 6 caratteri e contenere lettere e numeri.</p>
            </div>
            </div>

            

            <div style="overflow: hidden">
                <a onclick="datifb()" class="new-button password-button" id="next-btn" onclick="$(this).up('form').submit(); return false;"><b>Entra</b><i></i></a>
                <input type="submit" id="next" value="Entra" />
            </div>
         </form>
         <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/fb.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>   				
				
        </div>
    </div>
    <div class="settings-container-bottom"></div>
    <script type="text/javascript">
        document.observe("dom:loaded", function() {
            $(document.body).addClassName("js");
        });
    </script>
    <script type="text/javascript">
        document.observe("dom:loaded", function() {
            Utils.showRecaptcha("register-fieldset-captcha", "6LeRMQYAAAAAALToRmNxz4dysTIiJhXyiMdfaljy");
        });
    </script>
<?php include('/web-gallery/templates/footer.php'); ?>   <script type="text/javascript">
        Embed.decorateFooterLinks();
    </script>
</div>
<script type="text/javascript">
if (typeof HabboView != "undefined") {
	HabboView.run();
}
</script>


    
    

    



</body>
</html>
