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
$nomeutente = $filtro->Filtro($_GET['usr']);


if($filtro->Filtro($_GET['usr']) == '' or $sistema->utentenum($nomeutente) == '0'){
      header("Location: ../home.php?usr=".$sistema->utente('username','username',$_SESSION['username'])."");

}elseif($nomeutente != $sistema->utente('username','username',$nomeutente)){
          header("Location: ../home.php?usr=".$sistema->utente('username','username',$nomeutente)."");
}
$nomeutente = $filtro->Filtro($_GET['usr']);
$pagina = 1;
?>
<!-- POWERED BY ZAMBAHACKER -->
<!-- /////////////// -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8"/>
		<title>Bacheca di <?php echo $nomeutente;?></title>
<!-- TAG -->
		<meta property="og:title" content="Bacheca di <?php echo $nomeutente;?>"/>
		<meta property="og:site_name" content="Bacheca di <?php echo $nomeutente;?>"/>
		<meta name="description" content="Bacheca di <?php echo $nomeutente;?>" />
		<meta name="keywords" content="Bacheca di <?php echo $nomeutente;?>" />
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
			<?php if($nomeutente == $_SESSION['username']) { ?>
            <li class="selected">
				Home				
			</li>
            <?php }else{ ?>
            <li class=" last">
				<a href="home.php?usr=<?php echo $_SESSION['username']; ?>">Torna alla tua bacheca</a>
    		</li>
            
            <?php } ?>
    		<li class=" last">
				<a href="impostazioni.php">Impostazioni Account</a>
    		</li>
	</ul>
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
    <div id="wide-personal-info">

    <div id="habbo-plate">
            <a href="http://www.habbo.it/identity/avatars">
            <img alt="<?php echo $nomeutente; ?>" src="http://www.habbo.it/habbo-imaging/avatarimage?figure=<?php echo $sistema->utente('look','username',$nomeutente); ?>&direction=3&head_direction=3&gesture=sml&action=&size=l">
        </a>
    </div>

    <div id="name-box" class="info-box">
        <div class="label">Nome:</div>
        <div class="content"><?php echo $sistema->utente('username','username',$nomeutente); ?></div>
    </div>
    <div id="motto-box" class="info-box">
        <div class="label">Motto:</div>
        <div class="content"><?php echo $sistema->utente('motto','username',$nomeutente); ?></div>
    </div>
    <div id="last-logged-in-box" class="info-box">
        <div class="label">Ultima visita:</div>
        <div class="content"><?php echo $sistema->utente('ultima_visita','username',$nomeutente); ?></div>
    </div>

<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="/gioca.php" target="f5790f163ebda02f234bdab8548e91aa87107361" onclick="HabboClient.openOrFocus(this); return false;">Entra in <?php echo $sistema->dati('nome'); ?><i></i></a>
        <b></b>
    </div>
</div>

</div>


<?php if($sistema->dati('pubblicita') == 1){ ?>
<div id="column1" class="column">

<div class="habblet-container " style="
    width: 768px;
">         
<div class="cb clearfix orange "><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">

<?php echo $sistema->dati('pubb_home1'); ?>

</div></div></div><div class="bb"><div></div></div></div>
</div>

</div>
<?php }else{}?>
<div id="news"><div id="promo-box">


     


    <div id="promo-bullets"></div>

 <?php
	$sql = $sistema->ciclo_news('cms_news','attivo','1','id');
						while($while = mysql_fetch_array($sql)) {

    
 
    ?>





        <div class="promo-container" style="background-image: url(<?php echo $while['image']; ?>)">
            <div class="promo-content-container">
                <div class="promo-content">
                    <div class="title"><?php echo $while['title']; ?></div>
                    <div class="body"><?php echo $while['shortstory']; ?></div>

                </div>
            </div>
            <div class="promo-link-container">
<div class="enter-hotel-btn">

    <div class="open enter-btn">
           <a href="/news.php?id=<?php echo $while['id']; ?>">Scopri di pi&ugrave &gt;&gt;<i></i></a>

        <b></b>

    </div>



</div></a>
            </div>
        </div>
        


                  
             <?php } ?>

        
        
        
        

</div></div>
<script type="text/javascript">    document.observe("dom:loaded", function() { PromoSlideShow.init(); });</script>




<div id="column1" class="column">

			     			<?php if($sistema->utente('stato_bac','username',$nomeutente) == 0){
			     		  
			     		}else{ ?>
				<div class="habblet-container " style="margin-left: 1px;">		
	
					<form id="post_comm" name="post_comm" action="javascript:void(0)" onsubmit="messaggio_bac()" method="post">
                     <input type="text" value="<?php echo $nomeutente; ?>" id="nomeprofilo" hidden="true"/>
                     	<div id="twitterfeed-habblet-container">
    <div id="twitterfeed-habblet-content" class="twtr-widget twtr-widget-profile twtr-scroll">
    <div class="twtr-doc" style="width: 320px;">            
    <div class="twtr-hd"><center><h4>Scrivi a <?php echo $nomeutente; ?></h4>  </center>           </div>            
    <div class="twtr-bd">  <center>      <textarea wrap="on" id="commento" name="commento" style="width: 306px;  height: 100px;    border-radius: 4px;  padding: 3px;  resize: none;  border: 3px solid#408FCC;"></textarea>    </center> <div id="smile"><center>
             <a href="javascript:Smile(' :) ')"><img src="/images/smilies/sorriso_lingua.png" alt=":)" title=":)" border="0"/></a>
           
             <a href="javascript:Smile(' :0 ')"><img src="/images/smilies/sorrisone.png" alt=":0" title=":0" border="0"/></a>
             <a href="javascript:Smile(' :p ')"><img src="/images/smilies/lingua.png" alt=":p" title=":p" border="0"/></a>
             <a href="javascript:Smile(' (y) ')"><img src="/images/smilies/merda.png" alt="(y)" title="(y)" border="0"/></a>
             <a href="javascript:Smile(' (L) ')"><img src="/images/smilies/cuore.png" alt="(L)" title="(L)" border="0"/></a>
               <a href="javascript:Smile(' :* ')"><img src="/images/smilies/bacio.png" alt=":*" title=":*" border="0"/></a>
            
             </center>
             </div>     </div>            <div class="twtr-ft">   <div id="messaggio_bacheca" class="corretto-bac" style="">@nomeutente per taggare</div>           <center><div id="submit" style="margin-left: 114px;margin-top: 22px;"> <a id="invia_comm"   onclick="messaggio_bac('<?php echo $nomeutente; ?>')" class="new-button green-button"><b>Invia</b><i></i></a></div> </center>           </div>          </div></div>
        
</div>
</form>
		 <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/post_commenti.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>   				
					
				</div>
                <?php } ?>
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
			 

</div>

<div id="column2" class="column">
			     		<?php if($sistema->utente('stato_bac','username',$nomeutente) == 0){
			     		  
			     		}else{ ?>
				<div class="habblet-container " style="margin-left: -100px;">		
	
		
	
						<div id="twitterfeed-habblet-container">
    <div id="twitterfeed-habblet-content" class="twtr-widget twtr-widget-profile twtr-scroll">
    <div class="twtr-doc" style="width: 400px;">
                <div class="twtr-hd">      <center><h4>Bacheca di <?php echo $nomeutente; ?></h4></center></div>
                            <div class="twtr-bd">              
    
    <div class="twtr-timeline" style="height: 198px;width: 392px;border: 3px solid#408FCC;margin-bottom: 2px;">
                    <div class="twtr-tweets">
                                      <div class="twtr-reference-tweet"></div>
                                      <div id="testi"><script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/bacheca.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>   		</div>                  <!-- tweets show here -->                </div>              </div>
                </div>            <div class="twtr-ft">                          </div>          </div></div>
        
</div>

						
					
		
						
					
				</div>
				
			 <?php } ?>

</div>


    </div>
    
<?php include('/web-gallery/templates/footer.php'); ?>
</div>

</div>



        




</body></html>