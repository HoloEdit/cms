<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class Sistema{
    public function ip_ret(){
     //$ip = $_SERVER["HTTP_CF_CONNECTING_IP"]; -> con cloudflare
     //$ip = $_SERVER['SERVER_ADDR']; -> normale
     $ip = '127.0.0.1';
     return $ip;
        
    }
        public function server($strSetting){

	$tmp = mysql_query("SELECT ".$strSetting." FROM server_status LIMIT 1") or die(mysql_error());
	$tmp = mysql_fetch_assoc($tmp);
	return $tmp[$strSetting];

}
    public function dati($strSetting){

	$tmp = mysql_query("SELECT ".$strSetting." FROM sito LIMIT 1") or die(mysql_error());
	$tmp = mysql_fetch_assoc($tmp);
	return $tmp[$strSetting];

} 
    public function utente($campo, $dove, $valore)
{
	$sql = mysql_query("SELECT ".$campo." FROM users WHERE ".$dove." = '".$valore."' LIMIT 1") or die(mysql_error());
	$row = mysql_fetch_assoc($sql);
	
	return $row[$campo];
}

   public function permessi($campo, $dove, $valore)
{
	$sql = mysql_query("SELECT ".$campo." FROM permissions_cms WHERE ".$dove." = '".$valore."' LIMIT 1") or die(mysql_error());
	$row = mysql_fetch_assoc($sql);
	
	return $row[$campo];
}

    public function select($campo, $tabella, $dove, $valore)
{
	$sql = mysql_query("SELECT ".$campo." FROM ".$tabella." WHERE  ".$dove." = '".$valore."' LIMIT 1") or die(mysql_error());
	$row = mysql_fetch_assoc($sql);
	
	return $row[$campo];
}


  public function utentenum($asd){

	$tmp1 = mysql_query("SELECT * FROM users WHERE username = '".$asd."' LIMIT 1");
	$tmp = mysql_num_rows($tmp1);
	return $tmp;

}

  public function ban($asd){

	$tmp1 = mysql_query("SELECT * FROM bans WHERE value = '".$asd."' LIMIT 1");
	$tmp = mysql_num_rows($tmp1);
	return $tmp;

}

  public function count($tabella){

	$tmp1 = mysql_query("SELECT * FROM ".$tabella."") or die(mysql_error());
	$tmp = mysql_num_rows($tmp1) or die(mysql_error());
	return $tmp;

}
public function newsnum($asd){

	$tmp1 = mysql_query("SELECT * FROM cms_news WHERE id = '".$asd."' LIMIT 1");
	$tmp = mysql_num_rows($tmp1);
	return $tmp;

}
 public function news($campo, $id){

	$sql = mysql_query("SELECT ".$campo." FROM cms_news WHERE id = '".$id."' LIMIT 1") or die(mysql_error());
	$row = mysql_fetch_assoc($sql);
		return $row[$campo];

}
 
  public function ciclo($tabella, $campo, $valore, $ordine)
{
	$row = mysql_query("SELECT * FROM ".$tabella." WHERE ".$campo." = '".$valore."' ORDER by ".$ordine." DESC") or die(mysql_error());
	return $row;
}
 public function ciclo_ban($tabella,$ordine)
{
	$row = mysql_query("SELECT * FROM ".$tabella." ORDER by ".$ordine." DESC") or die(mysql_error());
	return $row;
}

public function ciclo_bac($tabella, $campo, $valore, $ordine)
{
	$row = mysql_query("SELECT * FROM ".$tabella." WHERE ".$campo." = '".$valore."' ORDER by ".$ordine." DESC") or die(mysql_error());
	return $row;
}

  public function ciclo_news($tabella, $campo, $valore, $ordine)
{
	$row = mysql_query("SELECT * FROM ".$tabella." WHERE ".$campo." = '".$valore."' ORDER by ".$ordine." DESC LIMIT 4") or die(mysql_error());
	return $row;
}
 public function ciclo_newshk($tabella, $campo, $valore, $ordine)
{
	$row = mysql_query("SELECT * FROM ".$tabella." WHERE ".$campo." = '".$valore."' ORDER by ".$ordine." DESC") or die(mysql_error());
	return $row;
}


public function trow($intNumber)
{
	if($intNumber % 2 == 0){
		return true;
	} else {
		return false;
	}
}
public function data(){
    date_default_timezone_set("Europe/Berlin");
    $H = date('H');
$i = date('i');
$s = date('s');
$m = date('n');
$d = date('d');
$Y = date('Y');
$j = date('j');
$n = date('n');
    
    $row = date('d-m-Y H:i:s',mktime($H,$i,$s,$m,$d,$Y));
    return $row;
}
  /*  public function criptpass($string) {
   $key = 'ZambaHacker';
   $result = ''; 
   for($i=0; $i<strlen($string); $i++) { 
     $char = substr($string, $i, 1); 
     $keychar = substr($key, ($i % strlen($key))-1, 1); 
     $char = chr(ord($char)+ord($keychar)); 
     $result.=$char; 
   } 



   return base64_encode($result); 
  } 
      */
public function criptpass($string) {
    
$result = sha1($string);
 return $result;
   } 




public function checkIfContains($substring, $string) {
 $pos = strpos($string, $substring);
 if($pos === false) { return false; } else { return true; }
	}

public function mus($header, $data=''){
	$musData = $header . chr(1) . $data;
	$sock = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
	@socket_connect($sock, '127.0.0.1', '1233');
	@socket_send($sock, $musData, strlen($musData), MSG_DONTROUTE);	
	@socket_close($sock);
}

public function socket($header, $ip, $port){
	$musData = $header;
	$sock = @socket_create(AF_INET, SOCK_STREAM, getprotobyname('tcp'));
	@socket_connect($sock, $ip, $port);
	@socket_send($sock, $musData, strlen($musData), MSG_DONTROUTE);	
	@socket_close($sock);
}

function GenerateTicket(){

	$data = "";

	for ($i=1; $i<=6; $i++){
		$data = $data . rand(0,10);
	}

	$data = $data . "";

	for ($i=1; $i<=20; $i++){
		$data = $data . rand(0,10);
	}

	$data = $data . "";
	$data = $data . rand(0,10);

	return $data;
}

    
    
public function SSO(){
    
   mysql_query("UPDATE users SET auth_ticket = '".$this->GenerateTicket()."' , ip_last = '178.217.184.249' , last_online = UNIX_TIMESTAMP() WHERE username = '".$_SESSION['username']."'");
    
}
public function tag($testo){


$names = str_replace("<br>", " <br> ", $testo);

$named = explode(" ",trim($names));

foreach($named as $name){
        
    
    if(strpos($name, '@') !== false){
        $tag1 = str_replace("@","",$name);
        $tag2 = str_replace(array("<br>","<br","/>"),"",$tag1);
         $query = mysql_query("SELECT * FROM users WHERE username = '".$tag1."'") or die('Errore: ' . mysql_error());
         $conta = mysql_num_rows($query);
         $query2 = mysql_FEtch_Assoc($query);
         $tag = str_replace($name,"<a href=\"home.php?usr=".$query2['username']."\">@".$query2['username']."</a>",$name);
         if($conta == 1){
        
       echo $tag.' ';
       }else{
         echo $name.' ';
       }
    }else{
        
    echo $name.' ';
    }
}
  
}

public function topbg(){
   

 $hours = intval(date("G"));
 if($hours >= 6 && $hours < 20 )
 return 1; 
 if(($hours >= 20 && $hours <= 23) || ($hours >= 0 && $hours < 6))
 return 2; 

    
}

}

?>