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
?>

<form id="reg" action="#" method="post">
			<section id="login">
								<figure></figure>
					<article class="out">
						<input type="text" id="username" name="username"  placeholder="Username" autocomplete="off" maxlength="20" />
                        <input type="password" id="password" name="password" placeholder="Password" autocomplete="off" maxlength="20" />
                        <input type="text" id="email" name="email"  placeholder="Email" autocomplete="off" maxlength="20" />
						
                     <input type="submit" class="register" name="reg" value="" />
					
					</article>
                    <div id="messaggio1"> </div>
<div id="messaggio2"> </div>
<div id="messaggio3"> </div>
		</header>
   
						</section>
                             </form>
                             <script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/registrati.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>
<?php 
}

?>