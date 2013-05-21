<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

class Commenti{
    
    public function filtro($str) {	
	$str = mysql_real_escape_string(stripslashes($str));
	return $str;
}

public function commento($user_name, $nomeprofilo, $commento, $data, $letto, $not){

$replace = str_replace(array("\n","\r","/>","<br"), " ", $not);
$names = $this->filtro($replace);
$named = explode(" ",trim($names));

foreach($named as $name){
        
    
    if(strpos($name, '@') !== false){
        $tag = str_replace("@","",$name);
            $query = mysql_query("SELECT * FROM users WHERE username = '".$tag."'") or die('Errore: ' . mysql_error());
                $conta = mysql_num_rows($query);
                $lol = mysql_fetch_ASsoc($query);
                if($lol['username'] != $nomeprofilo AND $conta == 1){
                             
      	$row = mysql_query("INSERT INTO bacheca (user_name, nomeprofilo, commento, data, letto) VALUES ('".$user_name."', '".$lol['username']."', '".$commento."', '".$data."', '".$letto."')") or die(mysql_error());
  
                }else{
                    
                }
    
 
    }else{
        
    
    }
}
   	$row1 = mysql_query("INSERT INTO bacheca (user_name, nomeprofilo, commento, data, letto) VALUES ('".$user_name."', '".$nomeprofilo."', '".$commento."', '".$data."', '".$letto."')") or die(mysql_error());

   return $row.$row1; 
}

    
    
    
    
   
    
}

?>