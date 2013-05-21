<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
include('../include.php');
include('../Classi/sessione.php');


$sistema = New Sistema();
$filtro = New Filtri();
include('../secure_control.php');
 
 if($sistema->permessi('hk_news','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){  
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
<script src="js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.php">Housekeeping</a></h1>
			<h2 class="section_title">Crea una news</h2><div class="btn_view_site"><a href="../home.php?usr=<?php echo $_SESSION['username']; ?>">Vai alla home</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
		<section id="secondary_bar">
		<div class="user">
			<p>Benvenuto: <?php echo $_SESSION['username']; ?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">Housekeeping</a> <div class="breadcrumb_divider"></div> <a class="current">Crea una news</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
    <?php include("sidebar.php"); ?>    
	<!-- end of sidebar -->
	
	<section id="main" class="column" style="height: 120%;">
		
		<h4 class="alert_info">Benvenuto nell'housekeeping di <?php echo $sistema->dati('nome'); ?>.</h4>
		
		<article class="module width_full">
			<header><h3>Crea una news</h3></header>
				<div class="module_content" style="height: 400; overflow: auto;">
                <form id="new_news" action="#" method="post">
						<fieldset>
							<label>Titolo</label>
							<input id="title" value="" type="text"/>
						</fieldset>
                        <fieldset>
							<label>Immagine</label> <a href="http://jabbopicture.fr/topstory.php" target="_blank">Scegli immagine</a>
							<input id="img" value="http://jabbopicture.fr/JABBO/TOPSTORY/102.png" type="text"/>
						</fieldset>
						<fieldset>
							<label>Introduzione</label>
							<textarea id="news_intro" rows="5"></textarea>
						</fieldset>
                        <fieldset>
							<label>News completa</label>
							<textarea id="news_completa" rows="5"></textarea>
						</fieldset>
						
						<fieldset>
							<label>Creatore</label>
							<input type="text" id="owner" value="<?php echo $_SESSION['username'];?>">
						</fieldset>  <h4 id="msg"></h4><div class="clear"></div>
				</div>
              
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Publica" id="invia" class="alt_btn">
				</form>
                <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/new_news.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>
				</div>
			</footer>
		</article>
		
		<div class="clear"></div>
	
		<div class="spacer"></div>
	</section>


</body>

</html>