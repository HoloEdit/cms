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
include('secure_control.php');
    $sistema->SSO();
    $sso = $sistema->utente('auth_ticket', 'username', $_SESSION['username']);
    

	$path="127.0.0.1";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=7" />

    <title><?php echo $sistema->dati('nome'); ?> ~ Client</title>

<script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="alternate" type="application/rss+xml" title="Habbo: RSS" href="http://www.habbo.it/articles/rss.xml" />
<script src="flashclient/libs2.js" type="text/javascript"></script>

<script src="flashclient/visual.js" type="text/javascript"></script>
<script src="flashclient/libs.js" type="text/javascript"></script>
<script src="flashclient/common.js" type="text/javascript"></script>
<link rel="stylesheet" href="flashclient/style.css" type="text/css" />
<link rel="stylesheet" href="flashclient/bottons.css" type="text/css" />
<link rel="stylesheet" href="flashclient/boxes.css" type="text/css" />
<link rel="stylesheet" href="flashclient/tooltips.css" type="text/css" />
<link rel="stylesheet" href="flashclient/changepassword.css" type="text/css" />


<script type="text/javascript">
var habboReqPath = "";
var habboStaticFilePath = "http://images.habbo.it/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/252/web-gallery";
var habboImagerUrl = "http://www.habbo.it/habbo-imaging/";
var habboDefaultClientPopupUrl = "gioca.php";



</script>





<link rel="stylesheet" href="flashclient/habboclient.css" type="text/css" />
<link rel="stylesheet" href="flashclient/habboflashclient.css" type="text/css" />
<script src="flashclient/habboflashclient.js" type="text/javascript"></script>
<script type="text/javascript">
    FlashExternalInterface.loginLogEnabled = true;
    
    FlashExternalInterface.logLoginStep("web.view.start");
    
    if (top == self) {
        FlashHabboClient.cacheCheck();
    }



    var flashvars = {
     "client.allow.cross.domain" : "1", 			
            "client.notify.cross.domain" : "0",
            "connection.info.host" : "lb.servpipe.com",
			"connection.info.port" : "30004", 
			"site.url" : "<?php echo $path; ?>", 
			"url.prefix" : "<?php echo $path; ?>", 
			"client.reload.url" : "<?php echo $path; ?>/gioca.php", 
			"client.fatal.error.url" : "<?php echo $path; ?>/gioca.php", 
			"client.connection.failed.url" : "<?php echo $path; ?>/gioca.php", 
			"external.variables.txt" : "http://95.141.37.113/gamedata/external_variablesns.php?<?php echo time(); ?>", 
			"external.texts.txt" : "http://95.141.37.113/gamedata/external_flash_texts.txt?<?php echo time(); ?>", 
			"productdata.load.url" : "http://95.141.37.113/gamedata/productdatazs.txt?<?php echo time(); ?>", 
			"furnidata.load.url" : "http://95.141.37.113/gamedata/furnidatazs.txt?<?php echo time(); ?>", 
			"use.sso.ticket" : "1", 
			"sso.ticket" : "<?php echo $sso; ?>", 
			"processlog.enabled" : "1", 
			"account_id" : "1", 
			"client.starting" : "Attendere... <?php echo $sistema->dati('nome'); ?> sta caricando!", 
			"flash.client.url" : "http://95.141.37.113/gordons/officials/Habbosz.swf?<?php echo time(); ?>", 
			"user.hash" : "<?php echo sha1($sso) ?>", 
			"has.identity" : "1", 
			"flash.client.origin" : "popup" 


    };
    var params = {
        "base" : "http://95.141.37.113/gordons/officials/",
        "allowScriptAccess" : "always",
        "menu" : "false"           
    };
    
    if (!(HabbletLoader.needsFlashKbWorkaround())) {
    	params["wmode"] = "opaque";
    }

    FlashExternalInterface.signoutUrl = "<?php echo $path; ?>/esci.php";
    
    var clientUrl = "http://95.141.37.113/gordons/officials/Habbosz.swf?<?php echo time(); ?>";

    swfobject.embedSWF(clientUrl, "flash-container", "100%", "100%", "10.0.0", "flashclient/expressInstall.swf", flashvars, params);

    window.onbeforeunload = unloading;
    function unloading() {
        var clientObject;
        if (navigator.appName.indexOf("Microsoft") != -1) {
            clientObject = window["flash-container"];
        } else {
            clientObject = document["flash-container"];
        }
        try {
            clientObject.unloading();
        } catch (e) {}
    }
</script>



<meta name="description" content="Habbo Hotel: amici, divertimento, celebrità!" />
<meta name="keywords" content="habbo hotel, virtuale, mondo, social network, gratis, community, avatar, personaggio, chat, online, giovane, ragazzi, gioco di ruolo, giochi di ruolo, iscriviti, social, gruppi, forum, sicurezza, giocare, giochi, online, amici, giovani, rari, furni rari, collezione, creare, collezionare, connettersi, furni, mobili, cuccioli, animali, creazione stanze, condivisione, espressione, distintivi, badge, uscire, musica, VIP, celebrità, visite VIP, famosi, mmo, mmorpg, multiplayer" />




<!--[if IE 8]>
<link rel="stylesheet" href="flashclient/ie8.css" type="text/css" />
<![endif]-->
<!--[if lt IE 8]>
<link rel="stylesheet" href="flashclient/ie.css" type="text/css" />
<![endif]-->
<!--[if lt IE 7]>
<link rel="stylesheet" href="flashclient/ie6.css" type="text/css" />
<script src="flashclient/pngfix.js" type="text/javascript"></script>
<script type="text/javascript">
try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}
</script>

<style type="text/css">
body { behavior: url(/js/csshover.htc); }
</style>
<![endif]-->
<meta name="build" content="63-BUILD259 - 23.02.2011 23:10 - it" />
</head>

<body id="client" class="flashclient">
<div id="overlay"></div>
<img src="flashclient/page_loader.gif" style="position:absolute; margin: -1500px;" />

<div id="overlay"></div>
<div id="client-ui" >
    <div id="flash-wrapper">

    <div id="flash-container">
        <div id="content" style="width: 400px; margin: 20px auto 0 auto; display: none">
<div class="cbb clearfix">
    <h2 class="title">Aggiorna Flash Player all'ultima versione disponibile</h2>
    <div class="box-content">
            <p>Puoi scaricare e istallare Adobe Flash Player <a href="http://get.adobe.com/flashplayer/">da questa URL</a>. Puoi trovare le istruzioni di istallazione <a href="http://www.adobe.com/products/flashplayer/productinfo/instructions/">cliccando qui</a>.</p>

            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="flashclient/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
</div>
        </div>
        <script type="text/javascript">
            $('content').show();
        </script>
        <noscript>
            <div style="width: 400px; margin: 20px auto 0 auto; text-align: center">
                <p>If you are not automatically redirected, please <a href="/client/nojs">click here</a></p>
            </div>
        </noscript>
    </div>
    </div>

    <div id="content" class="client-content"></div>            
</div>
    <div style="display: none">
<div id="habboCountUpdateTarget">
4,017 Habbo in Hotel
</div>
    <script language="JavaScript" type="text/javascript">
        setTimeout(function() {
            HabboCounter.init(600);
        }, 20000);
    </script>
    </div>
    <script type="text/javascript">
        RightClick.init("flash-wrapper", "flash-container");
        if (window.opener && window.opener != window && window.opener.location.href == "/") {
            window.opener.location.replace("/me");
        }
        $(document.body).addClassName("js");
           HabboClient.startPingListener();
    </script>

<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-448325-20");
pageTracker._trackPageview();
</script>

<script type="text/javascript">
    HabboView.run();
</script>

</body>

</html>
