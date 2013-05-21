<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
@include('../include.php');
include('../Classi/sessione.php');
$filtro = new Filtri();
$sistema = new Sistema();
if($richiesta != $url_sito){
    echo 'Errore';
   }else{
 if($sistema->permessi('hk_news','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){
?>

     <table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Nome</th> 
    				<th>Categoria</th> 
    				<th>Creato il</th> 
    				<th>Modifica</th> 
				</tr> 
			</thead> 
			<tbody> 
                     <?php
	$sql = $sistema->ciclo_news('cms_news','attivo','1','id');
						while($while = mysql_fetch_array($sql)) {
  
    ?>
    
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Zamba è frocio</td> 
    				<td>Tutorials</td> 
    				<td>1 Aprile 2013</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
			 <?php } ?>
			</tbody> 
			</table>
      
      
    <?php 
    }else{
  echo 'non autorizzato';
}
?>

<?php

}
?>