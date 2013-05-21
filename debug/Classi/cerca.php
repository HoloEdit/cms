<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/

class Cerca{
    
      public function esistenza($asd){

	$tmp1 = mysql_query("SELECT * FROM users WHERE username = '".$asd."' LIMIT 1");
	$tmp = mysql_num_rows($tmp1);
	return $tmp;

}

      public function nome($asd){

 $tmp1 = mysql_Query("SELECT * FROM users WHERE username = '".$asd."'");
    $tmp = mysql_fetch_assoc($tmp1);
    
	return $tmp['username'];

}

    
    
    
    
   
    
}

?>