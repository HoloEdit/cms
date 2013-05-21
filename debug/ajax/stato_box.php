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

<div class="habblet-container " style="float:left; width: 560px;">
        <div class="cb clearfix settings"><div class="bt"><div></div></div><div class="i1"><div class="i2"><div class="i3">

            <div class="rounded-container"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(144, 144, 144);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(100, 100, 100);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(99, 99, 99);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(144, 144, 144);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(100, 100, 100);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div><h2 class="title rounded-done">Cambia il tuo profilo</h2><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(100, 100, 100);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(144, 144, 144);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(99, 99, 99);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(144, 144, 144);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(100, 100, 100);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(89, 89, 89);"></div></div></div></div></div></div>
            <div class="box-content">
            

<div id="mex" style="
    display: none;
"><div class="rounded-container" style="
"><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px 4px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(141, 204, 107);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(90, 182, 40);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(65, 171, 8);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div></div></div><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(140, 204, 105);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(60, 168, 1);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(108, 190, 64);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(140, 204, 105);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(60, 168, 1);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(141, 204, 107);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(90, 182, 40);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(65, 171, 8);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div class="rounded-green rounded-done">
		Aggiornamento avvenuto con successo!<br>
	</div><div style="background-color: rgb(255, 255, 255);"><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(65, 171, 8);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(90, 182, 40);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(141, 204, 107);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(60, 168, 1);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(140, 204, 105);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(108, 190, 64);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div><div style="margin: 0px 2px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(140, 204, 105);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(60, 168, 1);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div></div><div style="margin: 0px 4px; height: 1px; overflow: hidden; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(141, 204, 107);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(90, 182, 40);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(65, 171, 8);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(59, 168, 0);"></div></div></div></div></div></div></div><br></div><form id="profile_form" action="javascript:void(0)" onsubmit="stat_box()" method="post">
    <input type="hidden" name="__app_key" value="587b0d3d53"/>
    <input type="hidden" name="urlToken" value="1306d1233d775e003cf469e52096c94f256f24e5"/>
<input type="hidden" name="tab" value="2"/>

<p>
Il tuo Stato &egrave; una frase che gli altri utenti vedono nella tua bacheca e cliccando il tuo personaggio quando sei in Hotel.
</p>

<p>
<label>Motto:
<input type="text" id="avatarmotto" name="avatarmotto" size="32" maxlength="32" value="<?php echo $sistema->utente('motto','username',$_SESSION['username']); ?>" /></label>
</p>

<h3>La tua Bacheca</h3>

<p>
Chi pu&ograve; vedere la tua Bacheca personale ?</br>
<label><input type="radio" name="visibility" id="visibility" value="1" <?php if($sistema->utente('stato_bac','username',$_SESSION['username']) == 1){ ?>checked="checked"<?php }else{} ?>/>Tutti</label>
<label><input type="radio" name="visibility" id="visibility" value="0" <?php if($sistema->utente('stato_bac','username',$_SESSION['username']) != 1){ ?>checked="checked"<?php }else{} ?>/>Nessuno</label>
</p>


<h3>Richieste di Amicizia</h3>
<p>
<label><input type="radio" name="friendRequestsAllowed" id="friendRequestsAllowed" value="0" <?php if($sistema->utente('block_newfriends','username',$_SESSION['username']) == 0){ ?>checked="checked"<?php }else{} ?>/>Abilita</label>
<label><input type="radio" name="friendRequestsAllowed" id="friendRequestsAllowed" value="1" <?php if($sistema->utente('block_newfriends','username',$_SESSION['username']) != 0){ ?>checked="checked"<?php }else{} ?>/>Disabilita</label>
</p>


 

<div class="settings-buttons">
<a onclick="stat_box()" class="new-button" style="" id="profileForm-submit"><b>Salva le modifiche</b><i></i></a>

</div>

</form>

<script type="text/javascript">

</script>

</div>
</div></div></div><div class="bb"><div></div></div></div>
</div>
    

<?php

}
?>