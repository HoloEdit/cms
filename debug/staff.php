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

$sql_1 = mysql_query("SELECT username,userid,figure FROM cms_staffpage ORDER BY userid");
$sql_2 = mysql_query("SELECT userid,figure,leftpx,toppx FROM cms_staffpage ORDER BY userid");
$sql_3 = mysql_query("SELECT userid,toppx FROM cms_staffpage ORDER BY userid");

$pagina = 3;

?>

<!-- POWERED BY ZAMBAHACKER -->
<!-- /////////////// -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
		<title><?php echo $sistema->dati('nome'); ?> - Staff</title>
<!-- TAG -->
		<meta property="og:title" content="<?php echo $sistema->dati('nome'); ?> - Staff"/>
		<meta property="og:site_name" content="<?php echo $sistema->dati('nome'); ?> - Staff"/>
		<meta name="description" content="<?php echo $sistema->dati('nome'); ?> - Staff" />
		<meta name="keywords" content="<?php echo $sistema->dati('nome'); ?> - Staff" />
        <!-- INCLUSIONE JS & CSS -->
<script type="text/javascript" async="" src="/web-gallery/static/styles/ga.js"></script><script type="text/javascript">
var andSoItBegins = (new Date()).getTime();
</script>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script language="javascript">
 var $j = jQuery.noConflict();
</script>
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
<a href="community.php">Community</a>
</li><li class="">
<a href="news.php">News</a>
</li><li class="selected last">
Staff
</li></ul>
</div>
</div>

<div id="container">
<div id="content">
<?php if($sistema->dati('pubblicita') == 1){ ?>


<div class="habblet-container " style="
    width: 768px;
">         
<div class="cb clearfix orange "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">

<?php echo $sistema->dati('pubb_home1'); ?>

</div></div></div><div class="bb"><div></div></div></div>
</div>


<?php }else{}?>


<div id="column1" class="column">

<div id="fondatori">
<div class="habblet-container ">
<div class="cb clearfix radio "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">
<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><h2 class="title rounded-done" style="
    background-color: rgb(0, 153, 255);
"><?php echo $sistema->select('name','ranks','id','9'); ?></h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div></div></div>
<div class="box-content">


<?php $sql = $sistema->ciclo('users','rank','9','id');
			while($while = mysql_fetch_array($sql)) {


    
												$i++;
	if($sistema->trow($i)) {
	$trow = "#E6E6E6";
	} else {
	$trow = "#fff";
	}
			
    ?>

<table width="107%" style="padding: 5px; margin-left: -15px; background-color: <?php echo $trow; ?>;">
			<tbody>
				<tr>
					<td valign="middle" width="25">
						<div style="width: 64px; height: 70px; margin-bottom:-8px; margin-top:-22px; margin-left:-10px; float: right; background: url(http://www.habbo.it/habbo-imaging/avatarimage?figure=<?php echo $while['look']; ?>&amp;action=null&amp;direction=3&amp;head_direction=3&amp;gesture=srp&amp;size=b&amp;img_format=gif);"></div>
					</td>
						<td valign="top">
						<b style="font-size: 110%;"><a href="home.php?usr=<?php echo $while['username'];?>"><?php echo $while['username']; ?></a> <font color="#fc6204">~ </font></b><font color="#fc6204"><i><?php echo $while['ruolo']; ?></i></font><a><?php if($while['online'] == 0){ ?><font color="red"> (Offline) </font> <?php }else{ ?><font color="green"> (Online) </font> <?php } ?></a><br>
						<span style="color:#888"><b></b><?php echo $while['motto']; ?></span>
						</td>


				</tr>
				
			</tbody>
			</table>
<?php } ?>













  </div></div></div></div><div class="bb"><div></div></div></div></div>



				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>

<div id="admin">
<div class="habblet-container ">
<div class="cb clearfix radio "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">
<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><h2 class="title rounded-done" style="
    background-color: rgb(0, 153, 255);
"><?php echo $sistema->select('name','ranks','id','7'); ?></h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div></div></div>
<div class="box-content">


<?php $sql = $sistema->ciclo('users','rank','7','id');
			while($while = mysql_fetch_array($sql)) {


    
												$i++;
	if($sistema->trow($i)) {
	$trow = "#E6E6E6";
	} else {
	$trow = "#fff";
	}
			
    ?>

<table width="107%" style="padding: 5px; margin-left: -15px; background-color: <?php echo $trow; ?>;">
			<tbody>
				<tr>
					<td valign="middle" width="25">
						<div style="width: 64px; height: 70px; margin-bottom:-8px; margin-top:-22px; margin-left:-10px; float: right; background: url(http://www.habbo.it/habbo-imaging/avatarimage?figure=<?php echo $while['look']; ?>&amp;action=null&amp;direction=3&amp;head_direction=3&amp;gesture=srp&amp;size=b&amp;img_format=gif);"></div>
					</td>
						<td valign="top">
						<b style="font-size: 110%;"><a href="home.php?usr=<?php echo $while['username'];?>"><?php echo $while['username']; ?></a> <font color="#fc6204">~ </font></b><font color="#fc6204"><i><?php echo $while['ruolo']; ?></i></font><a><?php if($while['online'] == 0){ ?><font color="red"> (Offline) </font> <?php }else{ ?><font color="green"> (Online) </font> <?php } ?></a><br>
						<span style="color:#888"><b></b><?php echo $while['motto']; ?></span>
						</td>


				</tr>
				
			</tbody>
			</table>
<?php } ?>













  </div></div></div></div><div class="bb"><div></div></div></div></div>



				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>

<div id="mod">
<div class="habblet-container ">
<div class="cb clearfix radio "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">
<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><h2 class="title rounded-done" style="
    background-color: rgb(0, 153, 255);
"><?php echo $sistema->select('name','ranks','id','6'); ?></h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div></div></div>
<div class="box-content">


<?php $sql = $sistema->ciclo('users','rank','6','id');
			while($while = mysql_fetch_array($sql)) {


    
												$i++;
	if($sistema->trow($i)) {
	$trow = "#E6E6E6";
	} else {
	$trow = "#fff";
	}
			
    ?>

<table width="107%" style="padding: 5px; margin-left: -15px; background-color: <?php echo $trow; ?>;">
			<tbody>
				<tr>
					<td valign="middle" width="25">
						<div style="width: 64px; height: 70px; margin-bottom:-8px; margin-top:-22px; margin-left:-10px; float: right; background: url(http://www.habbo.it/habbo-imaging/avatarimage?figure=<?php echo $while['look']; ?>&amp;action=null&amp;direction=3&amp;head_direction=3&amp;gesture=srp&amp;size=b&amp;img_format=gif);"></div>
					</td>
						<td valign="top">
						<b style="font-size: 110%;"><a href="home.php?usr=<?php echo $while['username'];?>"><?php echo $while['username']; ?></a> <font color="#fc6204">~ </font></b><font color="#fc6204"><i><?php echo $while['ruolo']; ?></i></font><a><?php if($while['online'] == 0){ ?><font color="red"> (Offline) </font> <?php }else{ ?><font color="green"> (Online) </font> <?php } ?></a><br>
						<span style="color:#888"><b></b><?php echo $while['motto']; ?></span>
						</td>


				</tr>
				
			</tbody>
			</table>
<?php } ?>













  </div></div></div></div><div class="bb"><div></div></div></div></div>



				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>





</div>


<div id="column2" class="column">
             <div id="assistant">
<div class="habblet-container ">
<div class="cb clearfix radio "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">
<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><h2 class="title rounded-done" style="
    background-color: rgb(0, 153, 255);
"><?php echo $sistema->select('name','ranks','id','8'); ?></h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div></div></div>
<div class="box-content">


<?php $sql = $sistema->ciclo('users','rank','8','id');
			while($while = mysql_fetch_array($sql)) {


    
												$i++;
	if($sistema->trow($i)) {
	$trow = "#E6E6E6";
	} else {
	$trow = "#fff";
	}
			
    ?>

<table width="107%" style="padding: 5px; margin-left: -15px; background-color: <?php echo $trow; ?>;">
			<tbody>
				<tr>
					<td valign="middle" width="25">
						<div style="width: 64px; height: 70px; margin-bottom:-8px; margin-top:-22px; margin-left:-10px; float: right; background: url(http://www.habbo.it/habbo-imaging/avatarimage?figure=<?php echo $while['look']; ?>&amp;action=null&amp;direction=3&amp;head_direction=3&amp;gesture=srp&amp;size=b&amp;img_format=gif);"></div>
					</td>
						<td valign="top">
						<b style="font-size: 110%;"><a href="home.php?usr=<?php echo $while['username'];?>"><?php echo $while['username']; ?></a> <font color="#fc6204">~ </font></b><font color="#fc6204"><i><?php echo $while['ruolo']; ?></i></font><a><?php if($while['online'] == 0){ ?><font color="red"> (Offline) </font> <?php }else{ ?><font color="green"> (Online) </font> <?php } ?></a><br>
						<span style="color:#888"><b></b><?php echo $while['motto']; ?></span>
						</td>


				</tr>
				
			</tbody>
			</table>
<?php } ?>













  </div></div></div></div><div class="bb"><div></div></div></div></div>



				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>   
         
         
         <div id="arb">
<div class="habblet-container ">
<div class="cb clearfix radio "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">
<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><h2 class="title rounded-done" style="
    background-color: rgb(0, 153, 255);
"><?php echo $sistema->select('name','ranks','id','5'); ?></h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div></div></div>
<div class="box-content">


<?php $sql = $sistema->ciclo('users','rank','5','id');
			while($while = mysql_fetch_array($sql)) {


    
												$i++;
	if($sistema->trow($i)) {
	$trow = "#E6E6E6";
	} else {
	$trow = "#fff";
	}
			
    ?>

<table width="107%" style="padding: 5px; margin-left: -15px; background-color: <?php echo $trow; ?>;">
			<tbody>
				<tr>
					<td valign="middle" width="25">
						<div style="width: 64px; height: 70px; margin-bottom:-8px; margin-top:-22px; margin-left:-10px; float: right; background: url(http://www.habbo.it/habbo-imaging/avatarimage?figure=<?php echo $while['look']; ?>&amp;action=null&amp;direction=3&amp;head_direction=3&amp;gesture=srp&amp;size=b&amp;img_format=gif);"></div>
					</td>
						<td valign="top">
						<b style="font-size: 110%;"><a href="home.php?usr=<?php echo $while['username'];?>"><?php echo $while['username']; ?></a> <font color="#fc6204">~ </font></b><font color="#fc6204"><i><?php echo $while['ruolo']; ?></i></font><a><?php if($while['online'] == 0){ ?><font color="red"> (Offline) </font> <?php }else{ ?><font color="green"> (Online) </font> <?php } ?></a><br>
						<span style="color:#888"><b></b><?php echo $while['motto']; ?></span>
						</td>


				</tr>
				
			</tbody>
			</table>
<?php } ?>













  </div></div></div></div><div class="bb"><div></div></div></div></div>



				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>
         
         <div id="soccer">
<div class="habblet-container ">
<div class="cb clearfix radio "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">
<div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><h2 class="title rounded-done" style="
    background-color: rgb(0, 153, 255);
"><?php echo $sistema->select('name','ranks','id','3'); ?></h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(85, 187, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(16, 159, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(0, 153, 255);"></div></div></div></div></div></div>
<div class="box-content">


<?php $sql = $sistema->ciclo('users','rank','3','id');
			while($while = mysql_fetch_array($sql)) {


    
												$i++;
	if($sistema->trow($i)) {
	$trow = "#E6E6E6";
	} else {
	$trow = "#fff";
	}
			
    ?>

<table width="107%" style="padding: 5px; margin-left: -15px; background-color: <?php echo $trow; ?>;">
			<tbody>
				<tr>
					<td valign="middle" width="25">
						<div style="width: 64px; height: 70px; margin-bottom:-8px; margin-top:-22px; margin-left:-10px; float: right; background: url(http://www.habbo.it/habbo-imaging/avatarimage?figure=<?php echo $while['look']; ?>&amp;action=null&amp;direction=3&amp;head_direction=3&amp;gesture=srp&amp;size=b&amp;img_format=gif);"></div>
					</td>
						<td valign="top">
						<b style="font-size: 110%;"><a href="home.php?usr=<?php echo $while['username'];?>"><?php echo $while['username']; ?></a> <font color="#fc6204">~ </font></b><font color="#fc6204"><i><?php echo $while['ruolo']; ?></i></font><a><?php if($while['online'] == 0){ ?><font color="red"> (Offline) </font> <?php }else{ ?><font color="green"> (Online) </font> <?php } ?></a><br>
						<span style="color:#888"><b></b><?php echo $while['motto']; ?></span>
						</td>


				</tr>
				
			</tbody>
			</table>
<?php } ?>













  </div></div></div></div><div class="bb"><div></div></div></div></div>



				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
</div>
         
</div>

</div>

</div>





<?php include('/web-gallery/templates/footer.php'); ?>
</div>





        




</body></html>