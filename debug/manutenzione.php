<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
include('include.php');
include('/Classi/sessione.php');


$sistema = New Sistema();
$filtro = New Filtri();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title><?php echo $sistema->dati('nome'); ?> Manutenzione</title>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://error.habbo.com/it/js/jquery.tweet.js"></script>
	
	<link href="web-gallery/static/styles/maintenance.css" rel="stylesheet" type="text/css" />
	

</head>
<body style="
    background-image: url(web-gallery/v2/images/bg.png);
">
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title></title>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://error.habbo.com/it/js/jquery.tweet.js"></script>
	
	<link href="web-gallery/static/styles/maintenance.css" rel="stylesheet" type="text/css">
	


<br><br>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<title></title>
	
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://error.habbo.com/it/js/jquery.tweet.js"></script>
	
	<link href="web-gallery/static/styles/maintenance.css" rel="stylesheet" type="text/css">
	




<div id="container">
<div id="content">
<div id="header" class="clearfix">
	<h1><span <?php if($sistema->topbg() == 1){ ?>style="background-image: url(web-gallery/v2/images/logo1.png); height: 65px;"<?php }else{ ?>style="background-image: url(web-gallery/v2/images/logo2.png); height: 65px;"><?php } ?></span></h1>
</div>

<div id="process-content">
<div class="fireman" style="
    width: 712px;
">

<center><h1>Manutenzione !</h1></center>

<p><?php echo $sistema->dati('motivo'); ?></p></div>
 


<div id="footer">
	<p class="footer-links"><a href="https://help.habbo.it/entries/304857-termini-e-condizioni-d-uso-condizioni-generali-di-contratto" target="_new">Termini di Servizio</a> | <a href="https://help.habbo.it/entries/21440653-trattamento-dei-dati-personali" target="_new">Privacy Policy</a> | <a href="http://www.habbo.it/safety/safety_tips">Sicurezza</a></p>
	<p class="copyright">© 2013 Powered by <b>ZambaHacker &amp; Raikas77</b>.<br>HABBO is a registered trademark of Sulake Corporation. All rights reserved to their respective owner(s).<br>We are not endorsed, affiliated, or sponsered by Sulake Corporation Oy.
</p>
</div>

		</div>
	</div>
</div>






</body>
</html>