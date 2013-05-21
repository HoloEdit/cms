<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
session_start();

@include('../include.php');
$reg = new Iscrizioni();
$filtro = new Filtri();

if($richiesta != $url_sito){
    echo 'Errore';
   }else{


 if($sistema->permessi('hk_log','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){    
    ?>


<article class="module width_3_quarter" style="width: 95%;">
		<header><h3 class="tabs_involved"></h3>
		<ul class="tabs">
		   	<li><a href="">Utenti bannati</a></li>
    	
		</ul>
		</header>

		<div class="tab_container" style="overflow: auto; height: 400px;">
			<div id="tab1" class="tab_content">
			
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0" > 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>ID</th> 
                    <th>Username</th> 
    				<th>Azione</th> 
    				<th>Data</th>
    			
				</tr> 
			</thead> 
			<tbody> 
             <?php
	$sql = $sistema->ciclo_ban('cms_log','id');
						while($while = mysql_fetch_array($sql)) {

    
 
    ?>
				<tr> 
				<td><input type="checkbox" hidden="true"></td> 
   
                <td><?php echo $while['id']; ?></td> 
    				<td><?php echo $while['username']; ?></td> 
                    
    				<td><?php echo $while['azione']; ?></td> 
    				<td><?php echo $while['data']; ?></td> 
  
    				 
				</tr> 
			
            <?php } ?>
            
            
            			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article>
 
 
 <?php
}else{
    echo 'errore';
}
    


}


?>