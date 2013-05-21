<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


//FILE DI USCITA
if(isset($login_error) && $is_banned > 0){

	session_start();


} else {

	include('include.php');


	session_start();
}

        // Destroy the 'remember me' cookie by making it expire 100 days ago
	setcookie("remember", "", time()-60*60*24*100, "/"); setcookie("cookpass", "", time()-60*60*24*100, "/");
	setcookie("rusername", "", time()-60*60*24*100, "/"); setcookie("cookpass", "", time()-60*60*24*100, "/");
	setcookie("rpassword", "", time()-60*60*24*100, "/"); setcookie("cookpass", "", time()-60*60*24*100, "/");
        
        mysql_query("UPDATE users SET online = '0' WHERE id = '".$my_id."' LIMIT 1") or die(mysql_error());

if(isset($login_error) && $is_banned > 0){

?>

<?php
} elseif($_SESSION['username']){

session_destroy();
$_SESSION['secure'] = '';

		if($_COOKIE['remember'] == "remember"){
		setcookie("remember", "", time()-60*60*24*100, "/"); setcookie("cookpass", "", time()-60*60*24*100, "/");
		setcookie("rusername", "", time()-60*60*24*100, "/"); setcookie("cookpass", "", time()-60*60*24*100, "/");
		setcookie("rpassword", "", time()-60*60*24*100, "/"); setcookie("cookpass", "", time()-60*60*24*100, "/");
		}


?>
<script language="javascript" type="text/javascript">
window.location.href = "index.php";
</script>

<?php

} else {


?>

<div id="process-content">
	        	<div class="action-error flash-message">
	<div class="rounded">
		<b><?php echo 'Non Sei Loggato in questo Momento' ?></b>
	</div>
</div>

<div style="text-align: center">
	
	<div style="width:100px; margin: 10px auto"><a href="../index.php" id="logout-ok" class="new-button fill"><b><?php echo 'OK' ?></b><i></i></a></div>

<div id="column1" class="column">              
</div>
<div id="column2" class="column">
</div>

</div>

<?php

}



?>
