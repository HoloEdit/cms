<div id="header-container" <?php if($sistema->topbg() == 1){ ?>style="background-image: url(web-gallery/v2/images/topbg4.gif);"<?php }else{ ?>style="background-image: url(web-gallery/v2/images/topbg3.gif);" <?php } ?>>
	<div id="header" class="clearfix">
		<h1><a href="/home.php" <?php if($sistema->topbg() == 1){ ?>style="height: 65px; width: 200px; background-image: url(web-gallery/v2/images/logo1.png);"<?php }else{ ?>style="height: 65px; width: 200px; background-image: url(web-gallery/v2/images/logo2.png);"><?php } ?></a></h1>


<div id="subnavi" class="narrow">
    <div id="subnavi-search">
        <div id="subnavi-search-upper">
        <ul id="subnavi-search-links">
                <li><a>Aiuto</a></li>
            <li>
                <form action="/esci.php" method="post">
                    <button type="submit" id="signout" class="link"><span>Esci</span></button>
                </form>
            </li>
        </ul>
        </div>
    </div>
    <div id="to-hotel">
   <input type="text" id="cerca" placeholder="Cerca un utente" style="
    width: 110px;
    height: 19px;
    margin-right: 10px;
    border-radius: 5px;
"><a id="" onclick="utente()" class="new-button green-button" style="
    margin-right: 7px;
"><b>Cerca</b><i></i></a>
    </div>
</div>
<script type="text/javascript">
(function() {
  var asjs = document.createElement('script');
  asjs.type = 'text/javascript';
  asjs.async = true;
  asjs.src ='./js/cerca.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(asjs);
}());
</script>   				
		
<script type="text/javascript">
L10N.put("purchase.group.title", "Crea un Gruppo");
document.observe("dom:loaded", function() {
    $("signout").observe("click", function() {
        HabboClient.close();
    });
});
</script><ul id="navi">
        <li <?php if($pagina == 1){?>class="metab selected"<?php }else{ ?>class="metab"<?php } ?>>

<?php if($pagina == 1){?><strong><?php echo $_SESSION['username']; ?> <?php if($sistema->utente('fb','username',$_SESSION['username']) == 1) { ?>(&nbsp;<i style="background-image: url(images/icon_facebook_connect_small.png)">&nbsp;</i>)<?php }else{ ?>(&nbsp;<i style="background-image: url(images/icon_habbo_small.png)">&nbsp;</i>)<?php } ?></strong><?php }else{ ?>

 <a href="/home.php?usr=<?php echo $_SESSION['username']; ?>"><?php echo $_SESSION['username']; ?> <?php if($sistema->utente('fb','username',$_SESSION['username']) == 1) { ?>(&nbsp;<i style="background-image: url(images/icon_facebook_connect_small.png)">&nbsp;</i>)<?php }else{ }; ?></a> 
 
 <?php } ?>

<span></span>
</li>

 <?php if($pagina == 3){?>	
  <li class="selected"> 
		<strong>Community</strong>
			<span></span>
		</li>
        
        <?php }else{ ?>
        <li class=""> 
			<a href="community.php">Community</a>
			<span></span>
		</li><?php } ?>
		
	 <?php if($pagina == 4){?>	
  <li class="selected"> 
		<strong>Sicurezza</strong>
			<span></span>
		</li>
        
        <?php }else{ ?>
        <li class=""> 
			<a href="sicurezza.php">Sicurezza</a>
			<span></span>
		</li><?php } ?>
	<?php if($sistema->permessi('hk','rank',$sistema->utente('rank','username',$_SESSION['username'])) == 1){ ?>
     <li class=""> 
			<a href="/admin/">Amministrazione</a>
			<span></span>
		</li>
    <?php } ?>
</ul>


            <div id="habbos-online"><div class="rounded-container"><div><div style="margin: 0px 4px; height: 1px; overflow: hidden;"><div style="height: 1px; overflow: hidden; margin: 0px 1px;"><div style="height: 1px; overflow: hidden; margin: 0px 1px;"><div style="height: 1px; overflow: hidden; margin: 0px 1px;"><div style="height: 1px; overflow: hidden; margin: 0px 1px;"></div></div></div></div></div><div style="margin: 0px 2px; height: 1px; overflow: hidden;"><div style="height: 1px; overflow: hidden; margin: 0px 1px;"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div></div><div style="margin: 0px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(253, 254, 254);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div></div><div class="rounded-done"><span><?php echo $sistema->server('users_online');?><?php echo' '.$sistema->dati('nome').' in Hotel';?></span></div><div style=""><div style="margin: 0px; height: 1px; overflow: hidden; background-color: rgb(253, 254, 254);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div><div style="margin: 0px 1px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div></div><div style="margin: 0px 2px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div></div></div><div style="margin: 0px 4px; height: 1px; overflow: hidden; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; "><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(244, 250, 252);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(253, 254, 254);"><div style="height: 1px; overflow: hidden; margin: 0px 1px; background-color: rgb(255, 255, 255);"></div></div></div></div></div></div></div></div>
	</div>
</div>