<?php
/*/////////////////////////////////////////////////////////////////////////*/
//////////////////CMS CREATO INTERAMENTE DA ZAMBAHACKER////////////////////
//////////////////SCRITTO IN PHP 5 OOP////////////////////////////////////
/////////////////E' VIETATA LA COPIA/////////////////////////////////////
//////////////////O LA QUALSIASI VIOLAZIONE DI COPYRIGHT////////////////
/*////////////////////////////////////////////////////////////////////*/
 class Filtri{
    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    
    public function Parole($str)
{
    
    $str = str_ireplace("à", "&agrave;",($str));
 $str = str_ireplace("<br />", "<br>",($str));
    $str = str_ireplace("è", "&egrave;",($str));
    $str = str_ireplace("ì", "&igrave;",($str));
    $str = str_ireplace("ò", "&ograve;",($str));
    $str = str_ireplace("ù", "&ugrave;",($str));
    $str = str_ireplace("stronzo", "",($str));
    $str = str_ireplace("Stronzo", "",($str));
    $str = str_ireplace("http", "",($str));
    $str = str_ireplace("hotel", "",($str));
    $str = str_ireplace("bobba", "",($str));
    $str = str_ireplace("tibbo", "",($str));
    $str = str_ireplace("lubux", "",($str));
    $str = str_ireplace("tabbo", "",($str));
    $str = str_ireplace("//", "",($str));
    $str = str_ireplace(".net", "",($str));
    $str = str_ireplace(".eu", "",($str));
    $str = str_ireplace("Stronzo", "",($str));
    $str = str_ireplace("SELECT", "", ($str));
    $str = str_ireplace("INSERT", "", ($str));
    $str = str_ireplace("insert", "", ($str));
    $str = str_ireplace("CREATE", "", ($str));
    $str = str_ireplace("create", "", ($str));
    $str = str_ireplace("UNION", "", ($str));
    $str = str_ireplace("union", "", ($str));
     $str = str_ireplace("--", "", ($str));
      $str = str_ireplace("';", "", ($str));
       $str = str_ireplace("exe", "", ($str));
        $str = str_ireplace("exec", "", ($str));
         $str = str_ireplace("eval", "", ($str));
         $str = str_ireplace("sql", "", ($str));
         $str = str_ireplace("from", "", ($str));
         $str = str_ireplace("drop", "", ($str));
         $str = str_ireplace("999", "", ($str));
          $str = str_ireplace("<script>", "", ($str));
           $str = str_ireplace("script", "", ($str));
            $str = str_ireplace("java", "", ($str));
             $str = str_ireplace("</script>", "", ($str));
             $str = str_ireplace("&#60;", "", ($str));
       $str = str_ireplace("&#62;", "", ($str));
       $str = str_ireplace(";", "", ($str));
       $str = str_ireplace("&", "", ($str));
       $str = str_ireplace("#", "", ($str));
          $str = str_ireplace("src", "", ($str));
          $str = str_ireplace("img", "", ($str));
                $str = str_ireplace("err", "", ($str));
                 $str = str_ireplace("$", "", ($str));
                 $str = str_ireplace("js", "", ($str));
    return $str;
}
  public function Filtro($str) {	
	$str = $this->Parole(mysql_real_escape_string(stripslashes(nl2br($str))));
	return $str;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
 
 public function Parolenews($str)
{
    $str = str_ireplace("à", "&agrave;",($str));
 $str = str_ireplace("<br />", "<br>",($str));
    $str = str_ireplace("è", "&egrave;",($str));
    $str = str_ireplace("ì", "&igrave;",($str));
    $str = str_ireplace("ò", "&ograve;",($str));
    $str = str_ireplace("ù", "&ugrave;",($str));
    $str = str_ireplace("SELECT", "", ($str));
    $str = str_ireplace("INSERT", "", ($str));
    $str = str_ireplace("insert", "", ($str));
    $str = str_ireplace("CREATE", "", ($str));
    $str = str_ireplace("create", "", ($str));
    $str = str_ireplace("UNION", "", ($str));
    $str = str_ireplace("union", "", ($str));

       $str = str_ireplace("exe", "", ($str));
        $str = str_ireplace("exec", "", ($str));
         $str = str_ireplace("eval", "", ($str));
         $str = str_ireplace("sql", "", ($str));
         $str = str_ireplace("from", "", ($str));
         $str = str_ireplace("drop", "", ($str));
         $str = str_ireplace("999", "", ($str)); 
          $str = str_ireplace("<script>", "", ($str));    
           $str = str_ireplace("script", "", ($str));
            $str = str_ireplace("java", "", ($str));
             $str = str_ireplace("</script>", "", ($str));
                 $str = str_ireplace("$", "", ($str));
           
    return $str;
}
  public function Filtronews($str) {	
	$str = $this->Parolenews(mysql_real_escape_string(stripslashes(nl2br($str))));
	return $str;
}
 
 
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  
public function Faccine($str){
    
    $str = str_ireplace(":)", '<img src="./images/smilies/sorriso_lingua.png" alt=":)" title=":)" border="0">', ($str));
    $str = str_ireplace("=)", '<img src="./images/smilies/sorriso_lingua.png" alt=":)" title=":)" border="0">', ($str));
  	$str = str_ireplace(";P", '<img src="./images/smilies/lingua.png" alt=";P" title=";P" border="0">', ($str));
	$str = str_ireplace(":p", '<img src="./images/smilies/lingua.png" alt=":p" title=":p" border="0">',($str));
	$str = str_ireplace("(L)", '<img src="./images/smilies/cuore.png" alt="(L)" title="(L)" border="0">', ($str));
	$str = str_ireplace('<3',  '<img src="./images/smilies/cuore.png" alt="<3" title="<3" border="0">', ($str));
	$str = str_ireplace(":0", '<img src="./images/smilies/sorrisone.png" alt=":0" title=":0" border="0">', ($str));
	$str = str_ireplace(":O", '<img src="./images/smilies/sorrisone.png" alt=":O" title=":O" border="0">', ($str));
    	$str = str_ireplace("(y)", '<img src="./images/smilies/merda.png" alt="(y)" title="(y)" border="0">', ($str));
          	$str = str_ireplace(":*", '<img src="./images/smilies/bacio.png" alt=":*" title=":*" border="0">', ($str));
    return $str;
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

}
?>