<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

class secure{
    
    public function criptsecure($string) {
   $key = 'secure';
   $result = ''; 
   for($i=0; $i<strlen($string); $i++) { 
     $char = substr($string, $i, 1); 
     $keychar = substr($key, ($i % strlen($key))-1, 1); 
     $char = chr(ord($char)+ord($keychar)); 
     $result.=$char; 
   } 

   return base64_encode($result); 
  } 
    
    public function serial($get){
        
        $serial = str_replace("SerialNumber","",trim($get));

        return $this->criptsecure($serial);
    }
    public function nome($get){
        
        $nome = trim($get);
        
       return $this->criptsecure($nome);
        
    }
    
    
    
    
    
    
    
    
    }


?>