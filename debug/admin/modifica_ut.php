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
 
if($sistema->permessi('mod_ut','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
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
			<h2 class="section_title">Modifica un utente</h2><div class="btn_view_site"><a href="../home.php?usr=<?php echo $_SESSION['username']; ?>">Vai alla home</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
		<section id="secondary_bar">
		<div class="user">
			<p>Benvenuto: <?php echo $_SESSION['username']; ?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">Housekeeping</a> <div class="breadcrumb_divider"></div> <a class="current">Modifica un utente</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
    <?php include("sidebar.php"); ?>    
	<!-- end of sidebar -->
	
	<section id="main" class="column" style="height: 120%;">
		
		<h4 class="alert_info">Benvenuto nell'housekeeping di <?php echo $sistema->dati('nome'); ?>.</h4>
		<?php if($_GET['utente'] == ''){ ?>
       <article class="module width_full">
			<header><h3>Cerca un utente</h3></header>
				<div class="module_content">
             <form class="quick_search" id="cerca_ut" method="post" action="#">
			<input type="text" placeholder="Cerca" id="cerca" />
		<h4 id="msg3"></h4>
				</div>
              
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Cerca" id="invia" class="alt_btn"/>
				</form>
                <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/cerca.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>
				</div>
			</footer>
		</article>
        <?php }else{ ?>
        <?php if($filtro->Filtro($_GET['utente']) == '' or $sistema->utentenum($filtro->Filtro($_GET['utente'])) == '0'){
      header("Location: modifica_ut.php");

}else{
    
}

?>
		<article class="module width_full">
			<header><h3>MODIFICA UTENTE</h3></header>
				<div class="module_content">
                <form id="mod_ut" action="#" method="post">
                  <input id="user" type="text" value="<?php echo $sistema->utente('username','username',$filtro->Filtro($_GET['utente'])); ?>"  hidden="true"/>
				<div id="colonna-1">
				<fieldset style="width: 200px;">
                    	<label>ID</label>
							<input id="id" disabled="true" value="<?php echo $sistema->utente('id','username',$filtro->Filtro($_GET['utente'])); ?>" type="text" style="width: 82%;"/>
						</fieldset>
                        <fieldset style="width: 200px;">
						<label>Username</label>
							<input id="username"  <?php if($sistema->permessi('hk_username','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ }else{ ?> disabled="true"<?php } ?> value="<?php echo $sistema->utente('username','username',$filtro->Filtro($_GET['utente'])); ?>" type="text" style="width: 82%;"/>
						</fieldset>
				
                        
                        
                        <fieldset style="width: 200px;">
						<label>Rank</label>
							<input id="rank"   <?php if($sistema->permessi('hk_rank','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ }else{ ?> disabled="true"<?php } ?> value="<?php echo $sistema->utente('rank','username',$filtro->Filtro($_GET['utente'])); ?>" type="text" style="width: 82%;"/>
						</fieldset>
                        <fieldset style="width: 200px;">
						<label>Bits</label>
							<input id="vip_points" <?php if($sistema->permessi('hk_bits','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ }else{ ?> disabled="true"<?php } ?>  value="<?php echo $sistema->utente('vip_points','username',$filtro->Filtro($_GET['utente'])); ?>" type="text" style="width: 82%;"/>
						</fieldset>
                        <fieldset style="width: 200px;">
						<label>Zaffiri</label>
							<input id="activity_points"  <?php if($sistema->permessi('hk_zaffiri','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ }else{ ?> disabled="true"<?php } ?> value="<?php echo $sistema->utente('activity_points','username',$filtro->Filtro($_GET['utente'])); ?>" type="text" style="width: 82%;"/>
						</fieldset>
                        <fieldset style="width: 200px;">
						<label>Crediti</label>
							<input id="crediti" <?php if($sistema->permessi('hk_crediti','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ }else{ ?> disabled="true"<?php } ?>  value="<?php echo $sistema->utente('credits','username',$filtro->Filtro($_GET['utente'])); ?>" type="text" style="width: 82%;"/>
						</fieldset>
                           <fieldset style="width: 200px;">
						<label>Motto</label>
							<input id="motto"  <?php if($sistema->permessi('hk_motto','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ }else{ ?> disabled="true"<?php } ?> value="<?php echo $sistema->utente('motto','username',$filtro->Filtro($_GET['utente'])); ?>" type="text" style="width: 82%;"/>
						</fieldset>
                        <fieldset style="width: 200px;">
						<label>Ruolo</label>
							<input id="ruolo"  <?php if($sistema->permessi('hk_ruolo','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ }else{ ?> disabled="true"<?php } ?> value="<?php echo $sistema->utente('ruolo','username',$filtro->Filtro($_GET['utente'])); ?>" type="text" style="width: 82%;"/>
						</fieldset>
                      
                        </div>	
                        
                        
						
						  <h4 id="msg3"></h4><div class="clear"></div>
				</div>
              
			<footer>
				<div class="submit_link">
					
					<input type="submit" value="Modifica" id="invia" class="alt_btn">
				</form>
                <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/modifica_ut1.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>
				</div>
			</footer>
		</article>
		<?php } ?>
		<div class="clear"></div>
	
		<div class="spacer"></div>
	</section>


</body>

</html>