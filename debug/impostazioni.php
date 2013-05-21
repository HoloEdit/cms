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


$pagina = 1;
?>
<!-- POWERED BY ZAMBAHACKER -->
<!-- /////////////// -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
		<title><?php echo $sistema->dati('nome'); ?> - Community</title>
<!-- TAG -->
		<meta property="og:title" content="<?php echo $sistema->dati('nome'); ?> - Community"/>
		<meta property="og:site_name" content="<?php echo $sistema->dati('nome'); ?> - Community"/>
		<meta name="description" content="<?php echo $sistema->dati('nome'); ?> - Community" />
		<meta name="keywords" content="<?php echo $sistema->dati('nome'); ?> - Community" />
        <!-- INCLUSIONE JS & CSS -->
<script type="text/javascript" async="" src="/web-gallery/static/styles/ga.js"></script><script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>
<link rel="shortcut icon" href="http://images-eu.habbo.com/habboweb/63_1dc60c6d6ea6e089c6893ab4e0541ee0/1642/web-gallery/v2/favicon.ico" type="image/vnd.microsoft.icon"/>
<link rel="stylesheet" href="/web-gallery/static/styles/common.css" type="text/css"/>
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
<a href="home.php?usr=<?php echo $_SESSION['username'];?>">Home</a>
</li><li class="selected last">
Impostazioni Account
</li></ul>
</div>
</div>


<div id="container">
	<div id="content" style="position: relative" class="clearfix"><?php if($sistema->dati('pubblicita') == 1){ ?>


<div class="habblet-container " style="
    width: 768px;
">         
<div class="cb clearfix orange "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">

<?php echo $sistema->dati('pubb_home1'); ?>

</div></div></div><div class="bb"><div></div></div></div>
</div>


<?php }else{}?>
    <div>

<div class="content">
<div class="habblet-container" style="float:left; width:210px;">
<div class="cb settings"><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">

<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(144, 144, 144);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(100, 100, 100);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(99, 99, 99);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(144, 144, 144);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(100, 100, 100);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div><h2 class="title rounded-done">Impostazioni Account</h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(100, 100, 100);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(144, 144, 144);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(99, 99, 99);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(144, 144, 144);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(100, 100, 100);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div></div></div></div>
<div class="box-content">
            <div id="settingsNavigation">
            <ul>

                <li class="selected">Stato e preferenze
                </li>


             
            </ul>
            </div>
</div></div></div></div><div class="bb"><div></div></div></div>
</div>
    <div id="box"><script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/impostazioni_box.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>   			</div>
</div>
</div>
    </div>
    
<?php include('/web-gallery/templates/footer.php'); ?>
</div>
    </div>


</body></html>