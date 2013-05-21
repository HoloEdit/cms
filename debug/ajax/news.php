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
	$sql = $sistema->ciclo_news('cms_news','attivo','1','id');
						while($while = mysql_fetch_array($sql)) {

    
 
    ?>


<div id="promo-box">

    <div id="promo-bullets"></div>



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
        
</div>


                  
             <?php } ?>
    

<?php

}
?>