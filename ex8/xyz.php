<?php 
$new=""; 
$sym=$_POST['symopr']; 
$filename=$_FILES['upload']['name']; 
$file_tmplocation=$_FILES['upload']['tmp_name']; 
move_uploaded_file($file_tmplocation,"uploads/$filename"); 
$symopr=explode(",",$sym); 
$symopr[0]=preg_replace("/1\/2/","0.5",$symopr[0]); 
$symopr[1]=preg_replace("/1\/2/","0.5",$symopr[1]); 
$symopr[2]=preg_replace("/1\/2/","0.5",$symopr[2]); 
$tt = fopen("new.cif","w"); 
$file_cif=array(); 
$cif_sym1=array(); 
$cif_header1=array(); 
$cif_atom1=array(); 
$handle1=fopen("upload/$filename","r"); 
$bb=""; 
$entirefile=""; 
while(!feof($handle1)) 
{ 
$buffer1=fgets($handle1); 
if(preg_match("/^[_\d#a-z]/",$buffer1)) 
{ 
$new.=$buffer1; 
} 
if(preg_match("/^[A-Z]/",$buffer1)) 
{ 
$bb.=$buffer1; 
preg_match_all("/[A-Z][a-z]?[\d{1}]?[\d{1}]?\s?[A-Z]?\s?[AZ]?\s?/",$buffer1,$dy); 
$firstpart=$dy[0][0]; 
preg_match_all("/-?\d{1,2}\.\d+/",$buffer1,$d2); 
$x1=$d2[0][0]; 
$y1=$d2[0][1]; 
$z1=$d2[0][2]; 
if($x1!="" && $y1!="" && $z1!="") 
{ 
$xcc=preg_replace("/x/",$x1,$symopr[0]); 
$ycc=preg_replace("/y/",$y1,$symopr[1]); 
$zcc=preg_replace("/z/",$z1,$symopr[2]); 
$xcc1=preg_replace("/--/","+",$xcc); 
$ycc1=preg_replace("/--/","+",$ycc); 
$zcc1=preg_replace("/--/","+",$zcc); 
$xdd=eval("return ".$xcc1.";"); 
$ydd=eval("return ".$ycc1.";"); 
$zdd=eval("return ".$zcc1.";"); 
$new.="".$firstpart."".$xdd."".$ydd."".$zdd."\n"; 
} 
} 
} 
echo "<br> After Symmetry Operation <br> <textarea rows=50 
cols=120>$new</textarea><br>"; 
?>