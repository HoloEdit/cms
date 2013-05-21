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

	$sql = $sistema->ciclo('users', 'habboid', $sistema->utente('habboid', 'username', $filtro->Filtro($_POST['nome'])), 'last_online');
						while($while = mysql_fetch_assoc($sql)) {
												$i++;
	if($sistema->trow($i)) {
	$trow = "trow1";
	} else {
	$trow = "trow2";
	}
						?>
                      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                         <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                         <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>      <section id="left">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
                        <section id="right">
                      <article class="nome">
                      ZambaHacker
                      </article>
                      
                      
                      <article class="look">
                      <img src="http://www.habbo.it/habbo-imaging/avatarimage?figure=ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78&direction=3&head_direction=3&gesture=sml&action=wav&size=s"/>
                      </article>
                      
                      <article class="data">
                      Ultima visita: 18-02-2010
                      </article>
                      
                      
                      
                      </section>
                      
<?php
}
}
?>
