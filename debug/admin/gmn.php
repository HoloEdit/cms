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
 
if($sistema->utente('rank','username',$_SESSION['username']) == FND or$sistema->utente('rank','username',$_SESSION['username']) == ADM){
    
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
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="../home.php?usr=<?php echo $_SESSION['username']; ?>">Vai alla home</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
		<section id="secondary_bar">
		<div class="user">
			<p>Benvenuto: <?php echo $_SESSION['username']; ?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="index.php">Housekeeping</a> <div class="breadcrumb_divider"></div> <a class="current">Dashboard</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
    <?php include("sidebar.php"); ?>    
	<!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Benvenuto nell'housekeeping di Nome Hotel.</h4>
		
		<!-- end of stats article -->
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved"></h3>
		<ul class="tabs">
   			<li><a href="#tab1">Post</a></li>
    		<li><a href="#tab2">Commenti</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Commento</th> 
    				<th>Inviato da</th> 
    				<th>Creato il</th> 
    				<th>Modifica</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Mark Corrigan</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Ipsum Lorem Dolor Sit Amet</td> 
    				<td>Jeremy Usbourne</td> 
    				<td>6th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Sit Amet Dolor Ipsum</td> 
    				<td>Super Hans</td> 
    				<td>10th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Alan Johnson</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Dobby</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		<article class="module width_quarter">
			<header><h3>Chat Staff</h3></header>
			<div class="message_list">
				<div class="module_content">
					<div class="message"><p>Zamba, ce lo prende nel culetto.</p>
					<p><strong>asky90</strong></p></div>
					<div class="message"><p>Zamba, ce lo prende nel culetto.</p>
					<p><strong>asky90</strong></p></div>
					<div class="message"><p>Zamba, ce lo prende nel culetto.</p>
					<p><strong>asky90</strong></p></div>
					<div class="message"><p>Zamba, ce lo prende nel culetto.</p>
					<p><strong>asky90</strong></p></div>
					<div class="message"><p>Zamba, ce lo prende nel culetto.</p>
					<p><strong>asky90</strong></p></div>
				</div>
			</div>
			<footer>
				<form class="post_message">
					<input type="text" value="Message" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
					<input type="submit" class="btn_post_message" value=""/>
				</form>
			</footer>
		</article><!-- end of messages article -->
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Crea una news</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Titolo</label>
							<input type="text">
						</fieldset>
						<fieldset>
							<label>Contenuto</label>
							<textarea rows="12"></textarea>
						</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Categoria</label>
							<select style="width:92%;">
								<option>News</option>
								<option>Tutorial</option>
								<option>Staff</option>
							</select>
						</fieldset>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Tags</label>
							<input type="text" style="width:92%;">
						</fieldset><div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<select>
						<option>Privato</option>
						<option>Pubblica</option>
					</select>
					<input type="submit" value="Publica" class="alt_btn">
					<input type="submit" value="Cancella">
				</div>
			</footer>
		</article><!-- end of post new article -->
		
		<h4 class="alert_warning">Alert di attenzione</h4>
		
		<h4 class="alert_error">News con errore</h4>
		
		<h4 class="alert_success">News completata con successo</h4>
		
		<article class="module width_full">
			<header><h3>Basic Styles</h3></header>
				<div class="module_content">
					<h1>Header 1</h1>
					<h2>Header 2</h2>
					<h3>Header 3</h3>
					<h4>Header 4</h4>
					<p>Ma che cazz?... cinghiale inculato da Zamba.</p>

<p>Modifica questa parte <a href="http://youporn.com/">Zamba</a> senn&ograve; ci fottiamo. Non fare troppa cacca, perch&egrave; poi ti puzzera il culo. Ciao socchio..</p>

					<ul>
						<li>Amo la vagina. </li>
						<li>Meglio depilata.</li>
						<li>Ho paura dei negri. </li>
						<li>A Zamba gli piace la patata.</li>
					</ul>
				</div>
		</article><!-- end of styles article -->
		<div class="spacer"></div>
	</section>


</body>

</html>