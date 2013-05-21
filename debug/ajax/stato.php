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

?>



    

               <?php
	$sql = $sistema->ciclo_bac('bacheca', 'nomeprofilo', $filtro->Filtro($_POST['nome']), 'id');
						while($while = mysql_fetch_array($sql)) {

if($while['nomeprofilo'] == $while['user_name']){
    
    $trow = 'mp right';
}else{
    $trow = 'mp left';
}
    ?>
             <div id="tweet-id-1" class="twtr-tweet">
             <div class="twtr-tweet-wrap">
                      <div class="twtr-avatar"> 
                                <div class="twtr-img">
                                <a target="_blank" href="/home.php?usr=<?php echo $while['user_name']; ?>">
                                <img alt="" src="http://www.habbo.it/habbo-imaging/avatarimage?figure=<?php echo $sistema->utente('look','username',$while['user_name']); ?>&direction=2&head_direction=2&gesture=sml&action=&size=s"/>
                                </a>
                                </div>         
                                </div>         
                                <div class="twtr-tweet-text"> 
                                          <p><b><?php echo $while['user_name']; ?>:</b><em>            <font color="#fe6301"><?php echo $while['data']; ?></font>
                         <?php if($while['user_name'] == $sistema->utente('username', 'username', $_SESSION['username']) OR $sistema->utente('username', 'username', $_SESSION['username']) == $while['nomeprofilo'] OR $sistema->utente('rank', 'username', $_SESSION['username']) == ADM OR $sistema->utente('rank', 'username', $_SESSION['username']) == FND){ 
        echo '&#183; <a class="twtr-reply" onclick="elimina_comm('.$while['id'].')" style="cursor: pointer;"><img src="images/X.gif"></a>';
       }else{
        
       }
                                    ?>          
                        
                                       </em><br />             
                                          <div id="testo" style="margin-top: 4px;"><?php echo $sistema->tag($filtro->Faccine($while['commento'])); ?></div>
                
                                               </p>         
                                               </div>      
                                                </div>
                                                </div>
             
                  
             <?php } ?>
    

<?php

}
?>