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
<li class="">
<a href="sicurezza.php">Consigli di sicurezza</a>
</li><li class="selected last">
Habbo Way
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
        <td><h4 class="right">Giocare </h4>
        Gioca con amici, crea i tuoi giochi, fai vedere di cosa sei capace diventa famoso!
        </td>
            <td><img src="//habboo-a.akamaihd.net/c_images/habboway/page_0.png" alt=""> <br> </td>
            <td><h4 class="wrong">Barare</h4>
            Gli imbroglioni non hanno vita lunga, finiscono sempre per rovinare l'esperienza a tutti gli altri.
            </td>
        </tr>
        <tr>
        <td><h4 class="right">Chattare </h4>
        Parla ai tuoi amici, conosci gli altri Habbo e incontra un sacco di gente nuova... e tanto altro ancora!
        </td>
            <td><img src="//habboo-a.akamaihd.net/c_images/habboway/page_1.png" alt=""> <br> </td>
            <td><h4 class="wrong">Troll</h4>
            A nessuno piace un troll, nemmeno alle loro mamme. I bulli non saranno tollerati da nessuno.
            </td>
        </tr>
        <tr>
        <td><h4 class="right">Trovare una persona speciale </h4>
        Flirta, conosci, innamorati e forse incontra quella persona (o quel qualcosa) di speciale!
        </td>
            <td><img src="//habboo-a.akamaihd.net/c_images/habboway/page_2.png" alt=""> <br> </td>
            <td><h4 class="wrong">Cybersex</h4>
            Il cybersex &ograve; severamente vietato e ogni richiesta di attivare la webcam sar&agrave; punita.
            </td>
        </tr>
        <tr>
        <td><h4 class="right">Aiutare </h4>
        Aiuta un estraneo, ottieni un amico! O due o tre. Non sai mai chi incontrerai!
        </td>
            <td><img src="//habboo-a.akamaihd.net/c_images/habboway/page_3.png" alt=""> <br> </td>
            <td><h4 class="wrong">Imbrogliare</h4>
            Approfittarsi degli altri Habbo di solito non ha conseguenze positive. Anzi, si finisce malissimo!
            </td>
        </tr>
        <tr>
        <td><h4 class="right">Creare </h4>
        Lascia che la tua creativit&agrave; si scateni pi&ugrave; di una marmotta in una capanna di legno! Spingiti al limite in stile e sii il migliore!
        </td>
            <td><img src="//habboo-a.akamaihd.net/c_images/habboway/page_4.png" alt=""> <br> </td>
            <td><h4 class="wrong">Usare script</h4>
            Fallo, non fingere! Guarda Ashlee Simpson.
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