<aside id="sidebar" class="column" style="height: 120%;">

		<h3>Sito &amp; Contenuti</h3>
		<ul class="toggle">
        			<li class="icn_settings"><a href="index.php">Dashboard</a></li>
        <?php if($sistema->permessi('hk_gen','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ ?>
        		<li class="icn_tags"><a href="generali.php">Generali</a></li> 
                <?php } ?> 
				<?php if($_SESSION['username'] == 'ZambaHacker' OR $_SESSION['username'] == 'Salvo.'){ ?>
                <li class="icn_tags"><a href="comandi.php">Comandi</a></li>  
				<?php } ?>
      <?php if($sistema->permessi('hk_news','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ ?>
			<li class="icn_new_article"><a href="new_news.php">Nuova News</a></li>
            <?php } ?>
            <?php if($sistema->permessi('hk_modnews','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ ?>
			<li class="icn_edit_article"><a href="modifica_news.php">Modifica News</a></li>
			<?php } ?>

		</ul>
		<h3>Utenti &amp; Moderazione</h3>
		<ul class="toggle">

<?php if($sistema->permessi('mod_ut','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ ?>
		<li class="icn_profile"><a href="modifica_ut.php">Modifica Utenti</a></li>
	<?php } ?>
    
<?php if($sistema->permessi('hk_sban','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ ?>
		<li class="icn_profile"><a href="sban.php">Utenti Bannati</a></li>
	<?php } ?>
    <?php if($sistema->permessi('hk_log','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ ?>
		<li class="icn_profile"><a href="log.php">Log Staff</a></li>
	<?php } ?>
    	</ul>
	
		
		<footer>
			<hr>
			<p><strong>Copyright &copy; 2013 ZambaHacker</strong></p>

		</footer>
	</aside>