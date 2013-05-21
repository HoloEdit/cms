<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
include('include.php');

$sistema = New Sistema();
$filtro = New Filtri();
session_Start();

if($_SESSION['username']){
    header("Location: home.php"); exit;
}
?>
<!-- POWERED BY ZAMBAHACKER -->
<!-- /////////////// -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
		<title><?php echo $sistema->dati('nome'); ?> - Entra nel nostro hotel!</title>
<!-- TAG -->
		<meta property="og:title" content="<?php echo $sistema->dati('nome'); ?> - Entra nel nostro hotel!">
		<meta property="og:site_name" content="<?php echo $sistema->dati('nome'); ?> -  Entra nel nostro hotel!">
		<meta name="description" content="<?php echo $sistema->dati('nome'); ?> -  Entra nel nostro hotel!" />
		<meta name="keywords" content="<?php echo $sistema->dati('nome'); ?> -  Entra nel nostro hotel!" />
        <!-- INCLUSIONE JS & CSS -->
<script type="text/javascript" async="" src="./Themes_files/ga.js"></script>
<script>
        var andSoItBegins = (new Date()).getTime();
        var habboPageInitQueue = [];
        var habboStaticFilePath = "https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1644/web-gallery";
</script>
    <link rel="shortcut icon" href="https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1644/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:400,700,400italic,700italic"/>
    <link rel="stylesheet" href="./Themes_files/v3_landing.css" type="text/css"/>
<script src="./Themes_files/v3_landing_top.js" type="text/javascript"></script>
<script src="./Themes_files/13389159.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
</head>
<!-- /////////////// -->
<body>


<header>
    <div id="border-left"></div>
    <div id="border-right"></div>

<div id="login-form-container">
    <a href="#home" id="habbo-logo"></a>

    <form id="log" onsubmit="login()" action="javascript:void(0)" method="post">

    
    <div id="login-columns">
        <div id="login-column-1">
            <label for="credentials-email">Nome:</label>
            <input tabindex="2" type="text" name="credentials.username" id="credentials-email" value="" class="focus"/>
          
        </div>

        <div id="login-column-2">
            <label for="credentials-password">Password:</label>
            <input tabindex="3" type="password" name="credentials.password" id="credentials-password"/>
          
        </div>

        <div id="login-column-3">
            <input type="submit" value="Login"  style="margin: -10000px; position: absolute;"/>
            <a  tabindex="4" class="button"  id="credentials-submit"><b></b><span>Entra</span></a>
        </div>

    <div id="login-column-4">
                           
<div id="fb-root"></div>

<script type="text/javascript">
window.fbAsyncInit = function() {
Cookie.erase("fbsr_309555212435126");
$(document).fire("fbevents:scriptLoaded");
};
window.assistedLogin = function(FBobject, optresponse) {
Cookie.erase("fbsr_1309555212435126");
FB.init({
appId: '<?php echo APP_ID; ?>', 
status: true, 
cookie: true, 
xfbml: true, 
oauth: true
});
permissions = 'user_birthday,email';
defaultAction = function(response) {
if (response.authResponse) {
fbConnectUrl = "/facebook/index.php?connect=true";
Cookie.erase("fbhb_val_309555212435126");
Cookie.set("fbhb_val_309555212435126", response.authResponse.accessToken);
Cookie.erase("fbhb_expr_309555212435126");
Cookie.set("fbhb_expr_309555212435126", response.authResponse.expiresIn);
window.location.replace(fbConnectUrl);
}
};
if (typeof optresponse == 'undefined')
FB.login(defaultAction, {scope:permissions});
else
FB.login(optresponse, {scope:permissions});
};
(function() {
var e = document.createElement('script');
e.async = true;
e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
document.getElementById('fb-root').appendChild(e);
}());
</script>
	
			
            <div id="rpx-login">
                <div>

<a class="fb_button fb_button_large" onclick="assistedLogin(FB); return false;">
    <span class="fb_button_text">Entra con Facebook</span>
</a>
                </div>
				<div id="rpx-signin">
  <p class="rpxnow">( <?php echo $sistema->server('users_online'); ?> ) Utenti Online!</p>
</div>


             

            </div>
                                
                                 
                                   
                        	</div>
    </div>
</form>
                 <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/login.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>
</div>


    <div id="top-bar-triangle"></div>
    <div id="top-bar-triangle-border"></div>
</header>


<div id="content">
    <ul>
        <li id="home-anchor">
            <div id="welcome">
                <a href="#registration" class="button large" id="join-now-button"><b></b><span>Registrati</span><span class="sub">(&egrave; gratis)</span></a>
                <div id="slogan">
                    <h1>Benvenuto su <?php echo $sistema->dati('nome'); ?></h1>
                    <p>un mondo, dove potrai conoscere nuovi amici</p>
                    <p><a id="tell-me-more-link" href="">Vuoi saperne di pi&ugrave;?</a></p>
                </div>
            </div>
            <div id="carousel">
                <div id="image1"></div>
                <div id="image2" style="-webkit-transition: top 0.4s ease-in;"></div>
                <div id="image3" style="-webkit-transition: top 0.4s ease-in;"></div>
                <div id="tell-me-more"><?php echo $sistema->dati('nome'); ?> &egrave; un hotel virtuale, dove ci si puo' iscrivere GRATUITAMENTE. Potrai incontrare nuovi amici, chattare, andare alle feste, comprare degli animali, giocare e vincere premi e regali. Clicca su 'REGISTRATI!' per iniziare. Ti aspettiamo in <?php echo $sistema->dati('nome'); ?>!</div>
            </div>
            
        </li>

        <li id="registration-anchor">

<div id="registration-form" class="hide-captcha">
    <div id="registration-form-header">
        <h2>Registrazione</h2>
        <p>Completa i seguenti campi:</p>
    </div>
    <div id="registration-form-main">
        <form id="reg" action="javascript:void(0)" onsubmit="registrati()" method="post">
       
        <div id="registration-form-main-left">
            <label for="registration-birthday">Nome</label>
            <label for="registration-birthday" class="details">Inserisci il nome che intendi utilizzare durante il soggiorno in hotel.</label>
            <div id="messaggio1"></div>
            <input type="text" name="registrationBean.nome" id="registration-nome" value=""/>
            
            <label for="registration-email">Email</label>
            <label for="registration-email" class="details">Inserisci un email per registrarti in Hotel.</label>
            <div id="messaggio2"></div>
            <input type="email" name="registrationBean.email" id="registration-email" value=""/>


            

        </div>
        <div id="registration-form-main-right">
       
            <span id="password-field-container">
                <label for="registration-password">Password</label>
                <label for="registration-password" class="details">La password deve contenere almeno  <b>5 caratteri </b>e pu&ograve; contenere <b>Lettere e numeri</b></label>
                <div id="messaggio3"></div>
                <input type="password" name="registrationBean.password" id="registration-password" maxlength="15" value="">
            </span>

            
            <p class="checkbox-container" id="registration-tos">
                <input type="checkbox" id="tos" name="registrationBean.termsOfServiceSelection" value="true">
                <label for="tos" class="details checkbox">
                    Accetto i Termini di Servizio</a> e la Privacy Policy
                </label>
            </p>
            <p class="checkbox-container">

                <input type="checkbox" id="registration-marketing" value="true" name="registrationBean.marketing">
                <label for="registration-marketing" class="details checkbox">Voglio ricevere tutte le ultime Habbo Notizie e la newsletter!
</label>
            </p>
            <div class="submit-button-wrapper">
            <input type="submit" value="Login" style="margin: -10000px; position: absolute;">
               <a  onclick="registrati()" class="button large not-so-large"><b></b><span style="cursor: pointer;">Registrati</span></a>
            </div>
        </div>

        
        </form>
        <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/registrati.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>        
    </div>
</div>
<div id="magnifying-glass"></div>
            <div id="sail"></div>
        </li>
    </ul>
</div>
<div id="errore" style="bottom: 100px; opacity: 1; position: fixed;display: block;"></div>
<footer>
<?php if($sistema->dati('pubblicita') == 1){ ?>
<div id="pubb" style="
    position: absolute;
    top: 5px;
    left: 620px;
"><?php echo $sistema->dati('pubb_index'); ?></div>
<?php }else{} ?>
    <div id="age-recommendation"></div>

    <div id="footer-content">
        <br />
        <div id="copyright">&copy; 2013 Powered by <b>Jabboitalia</b>.<br />HABBO is a registered trademark of Sulake Corporation. All rights reserved to their respective owner(s).<br />We are not endorsed, affiliated, or sponsered by Sulake Corporation Oy.</div>
    </div>
 
</footer>


<script src="./Themes_files/v3_landing_bottom.js" type="text/javascript"></script>
<!--[if IE]><script src="https://habboo-a.akamaihd.net/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1644/web-gallery/static/js/v3_ie_fixes.js" type="text/javascript"></script>
<![endif]-->



    



</body></html>