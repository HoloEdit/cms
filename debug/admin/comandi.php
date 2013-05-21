<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA Jabboitalia////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
include('../include.php');
include('../Classi/sessione.php');


$sistema = New Sistema();
$filtro = New Filtri();
include('../secure_control.php');
 
if($sistema->utente('rank','username',$_SESSION['username']) == FND ){
    
}else{
    header("Location: ../home.php?usr=".$_SESSION['username']."");
}
?><!doctype html>
<html lang="it">

<head>
	<meta charset="utf-8"/>
	<title><?php echo $sistema->dati('nome'); ?> - Amministrazione</title>
	
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.8.23/jquery-ui.min.js" type="text/javascript"></script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.php">Housekeeping</a></h1>
			<h2 class="section_title">Comandi</h2><div class="btn_view_site"><a href="../home.php?usr=<?php echo $_SESSION['username']; ?>">Vai alla home</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
		<section id="secondary_bar">
		<div class="user">
			<p>Benvenuto: <?php echo $_SESSION['username']; ?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">Housekeeping</a> <div class="breadcrumb_divider"></div> <a class="current">Comandi</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
    <?php include("sidebar.php"); ?>    
	<!-- end of sidebar -->
	
	<section id="main" class="column" style="height: 120%;">
		
		<h4 class="alert_info">Benvenuto nell'housekeeping di <?php echo $sistema->dati('nome'); ?>.</h4>
		
		<article class="module width_full"> <form id="zambacmd" action="#" method="post">
			<header><h3>Comandi</h3></header>
				<div class="module_content">
                <p>Scegli un comando: <select id="comandi">
  <option value="backup">Backup DB</option>
  <option value="riavvia_phx">Riavvia Emulatore</option>
  <option value="chiudi">Chiudi Emulatore</option>
  <option value="riavvia_vps">Riavvia Vps</option>
</select>
      </div>
                <h4 id="mex"></h4>
                <p><center><input type="submit" id="invia" value="Esegui comando" class="alt_btn"/></center></p>
              
               </form>
                   <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/comandi.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>
               
		</article>
		
		<div class="clear"></div>
	
		<div class="spacer"></div>
	</section>


</body>

</html>