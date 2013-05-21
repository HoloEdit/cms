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

$pagina = 4;
?>
<!-- POWERED BY ZAMBAHACKER -->
<!-- /////////////// -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
		<title><?php echo $sistema->dati('nome'); ?> - Sicurezza</title>
<!-- TAG -->
		<meta property="og:title" content="<?php echo $sistema->dati('nome'); ?> - Sicurezza"/>
		<meta property="og:site_name" content="<?php echo $sistema->dati('nome'); ?> - Sicurezza"/>
		<meta name="description" content="<?php echo $sistema->dati('nome'); ?> - Sicurezza" />
		<meta name="keywords" content="<?php echo $sistema->dati('nome'); ?> - Sicurezza" />
        <!-- INCLUSIONE JS & CSS -->
<script type="text/javascript" async="" src="/web-gallery/static/styles/ga.js"></script><script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
<link rel="shortcut icon" href="http://images-eu.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1642/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon"/>
<link rel="stylesheet" href="/web-gallery/static/styles/common.css" type="text/css"/>
<link rel="stylesheet" href="/web-gallery/static/styles/safety.css" type="text/css"/>
<script src="/web-gallery/static/styles/libs2.js" type="text/javascript"></script>
<script src="/web-gallery/static/styles/visual.js" type="text/javascript"></script>
<script src="/web-gallery/static/styles/libs.js" type="text/javascript"></script>
<script src="/web-gallery/static/styles/common.js" type="text/javascript"></script>
<script src="/web-gallery/static/styles/fullcontent.js" type="text/javascript"></script>
<link rel="stylesheet" href="/web-gallery/static/styles/lightweightmepage.css" type="text/css"/>
<script src="/web-gallery/static/styles/lightweightmepage.js" type="text/javascript"></script>
<link href="/web-gallery/static/styles/widget.css" rel="stylesheet" type="text/css"/>

<style type="text/css">#twitterfeed-habblet-content .twtr-popular { display: inline-block; }</style><style type="text/css">#twitterfeed-habblet-content .twtr-popular { display: inline-block; }</style><style type="text/css">#twitterfeed-habblet-content .twtr-avatar, #twitterfeed-habblet-content .twtr-user { } #twitterfeed-habblet-content .twtr-tweet-text { margin-left: 0; }</style><style type="text/css">#twitterfeed-habblet-content .twtr-doc,                      #twitterfeed-habblet-content .twtr-hd a,                      #twitterfeed-habblet-content h3,                      #twitterfeed-habblet-content h4,                      #twitterfeed-habblet-content .twtr-popular {            background-color: #4a4d4f !important;            color: #ffffff !important;          }          #twitterfeed-habblet-content .twtr-popular {            color: #4a4d4f !important;            background-color: rgba(74,77,79, .3) !important;          }          #twitterfeed-habblet-content .twtr-tweet a {            color: #fe6301 !important;          }          #twitterfeed-habblet-content .twtr-bd, #twitterfeed-habblet-content .twtr-timeline i a,           #twitterfeed-habblet-content .twtr-bd p {            color: #4a4d4f !important;          }          #twitterfeed-habblet-content .twtr-new-results,           #twitterfeed-habblet-content .twtr-results-inner,           #twitterfeed-habblet-content .twtr-timeline {            background: #ffffff !important;          }</style></head>
<!-- /////////////// -->
<body id="home" class=" ">
<div id="overlay"></div>

<?php include('/web-gallery/templates/header.php'); ?>

<div id="content-container">

<div id="navi2-container" class="pngbg">
<div id="navi2" class="pngbg clearfix">
<ul>
<li class="selected">
Consigli di sicurezza
</li><li class="last">
<a href="h_way.php">Habbo Way</a>
</li></ul>
</div>
</div>

<div id="container">
	<div id="content" style="position: relative" class="clearfix"><?php if($sistema->dati('pubblicita') == 1){ ?>


<div class="habblet-container " style="
    width: 768px; margin-left: 91px;
">  
<div class="cb clearfix orange "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">

<?php echo $sistema->dati('pubb_home1'); ?>

</div></div></div><div class="bb"><div></div></div></div>
</div>


<?php }else{}?>
    <div id="column1" class="column">
			     		
				<div class="habblet-container ">		
	
						<div id="habbo-way-content">
    <table>
        <tbody><tr>
            <td><img src="../images/safety/page_0.png" alt=""> <br></td>
            <td><h4>Proteggi le tue informazioni personali </h4>
            Non puoi mai sapere con chi stai parlando online, quindi non dare il tuo nome reale, indirizzo, numero di telefono, foto o la scuola che frequenti. Dandoe in giro le tue informazioni personali pu&ograve; portarti a essere scammato o maltrattato.
            </td>
            <td><img src="../images/safety/page_1.png" alt=""> <br></td>
            <td><h4>Proteggi la tua Privacy </h4>
            Mantieni i tuoi dettagli di Skype, MSN e Facebook sempre al sicuro. Non puoi mai sapere cosa potrebbe accadere.
            </td>
        </tr>
        <tr>
            <td><img src="../images/safety/page_2.png" alt=""> <br></td>
            <td><h4>Non farti trascinare dalla maggioranza </h4>
            Anche se lo fanno tutti, se a te non piace e ti mette a disagio, non farlo!
            </td>
            <td><img src="../images/safety/page_3.png" alt=""> <br></td>
            <td><h4>Lascia che i tuoi amici rimangano Pixel </h4>
            Non incontrarti mai con persone conosciute solo in internet, la gente non &egrave; sempre come dice di essere. Se qualcuno ti chiede di incontrarsi nella vita reale, rispondi 'No, grazie!' e fallo sapere a un moderatore, ai tuoi genitori o un adulto di cui ti fidi.
            </td>
        </tr>
        <tr>
            <td><img src="../images/safety/page_4.png" alt=""> <br></td>
            <td><h4>Non avere paura di alzare la voce </h4>
            Se qualcuno in Habbo ti fa sentire a disagio o ti fa paura con delle minacce, fallo subito sapere ai moderatori tramite il Bottone d'Emergenza.
            </td>
            <td><img src="../images/safety/page_5.png" alt=""> <br></td>
            <td><h4>No alla webcam </h4>
            Non hai nessun controllo sulle tue foto e sulle immagini della webcam dopo averle condivise in internet, e non potrai pi&ugrave; tornare indietro. Potrebbero finire nelle mani di chiunque, in giro per il mondo, e potrebbero essere usate per prenderti in giro o per ricattarti. Prima di condividere un'immagine, prova a chiederti: se uno sconosciuto vedesse questa foto, mi darebbe fastidio?
            </td>
        </tr>
        <tr>
            <td><img src="../images/safety/page_6.png" alt=""> <br></td>
            <td><h4>Naviga in sicurezza! </h4>
            I siti web che offrono Crediti gratis, Furni o si spacciano per nuovi Habbo Hotel o per pagine dello Staff sono tutti siti scam creati per rubarti la password. Non dare mai i tuoi accessi e non scaricare file in questi siti: potrebbero contenere virus o keylogger!
            </td>
        </tr>
    </tbody></table>
</div>

						
							
					
				</div>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>
<script type="text/javascript">
HabboView.run();
</script>
<div id="column2" class="column">
</div>
<!--[if lt IE 7]>
<script type="text/javascript">
Pngfix.doPngImageFix();
</script>
<![endif]-->
    </div>
    
<?php include('/web-gallery/templates/footer.php'); ?>
</div>

</div>



        




</body></html>