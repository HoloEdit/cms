<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/


class Iscrizioni{
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
  
public function criptpass($string) {
    
$result = sha1($string);
 return $result;
   } 



  
    public function registra($username, $password, $mail) 
  {

    $password = $this->criptpass($password);

    $query = mysql_query("SELECT * FROM users WHERE username = '".$username."'") or die('Errore: ' . mysql_error());

    $conta = mysql_num_rows($query);
      if($conta != 0){
        $val = 1;
        echo $val;
      }else{
       mysql_query("INSERT INTO users (username, password, mail, rank, credits, look, gender, ip_reg, habboid, account_created, ultima_visita, motto) VALUES ('".$username."', '".$password."', '".$mail."', '1', '1000000', 'ch-3111-63-62.hd-3102-1.hr-3163-39.lg-285-77.sh-305-78', 'M', '', '".$username."', '".$this->data()."', '".$this->data()."','Benvenuto in hotel.')") or die('Errore: ' .mysql_error());
        $_SESSION['username'] = $username;  
         $_SESSION['password'] = $password; 
      $val = 2;
      echo $val;
   
  }
  }
   
       public function dati_fb($username, $password) 
  {

    $password = $this->criptpass($password);

    $query = mysql_query("SELECT * FROM users WHERE username = '".$username."'") or die('Errore: ' . mysql_error());

    $conta = mysql_num_rows($query);
      if($conta != 0){
        $val = 1;
        echo $val;
      }else{
       mysql_query("UPDATE users SET username = '".$username."', password = '".$password."', dati_fb = '0', habboid = '".$username."' WHERE username = '".$_SESSION['username']."'") or die('Errore: ' .mysql_error());
        $_SESSION['username'] = $username;  
         $_SESSION['password'] = $password; 
      $val = 2;
      echo $val;
   
  }
  }
   
  public function login($username, $password) 
  {
    
     $password = $this->criptpass($password);
   
    $query = mysql_query("SELECT * FROM users WHERE username = '".$username."'") or die('Errore: ' . mysql_error());
      $conta = mysql_num_rows($query);
    $query2 = mysql_fetch_assoc($query);
    
    $query1 = mysql_query("SELECT * FROM bans WHERE value = '".$username."'") or die('Errore: ' . mysql_error());
      $conta1 = mysql_num_rows($query1);
   if($conta1 == 1){
    
       $val = 4;   
      echo $val;
      
   }elseif ($conta == 0) 
    {
      $val = 1;   
      echo $val;
          
    }elseif($password != $query2['password']){
      $val = 2;   
      echo $val;
      
    }elseif($password == $query2['password']){
     
      mysql_query("UPDATE users SET ultima_visita = '".$this->data()."' WHERE username = '".$query2['username']."'");
        $_SESSION['username'] = $query2['username'];  
         $_SESSION['password'] = $query2['password']; 
     
      $val = 3;   
      echo $val;
    }else{
        
    }
  }
  
  
}
?>