<?php

$phi=$_GET['phi'];
$psi=$_GET['psi'];

header("Content-type:image/png");
$im=imagecreate(1400,1400);
$imc=imagecolorallocate($im,255,255,255);
$bor=imagecolorallocate($im,0,0,0);
imagerectangle($im,10,600,25,"Ramachandran Plot",$bor);
$brown=imagecolorallocate($im,229,170,122);
$white=imagecolorallocate($im,255,255,255);
$red=imagecolorallocate($im,220,50,0);

$x=150;
$y=50;

for($i=0;$i<36;$i++)
{ $x=$x*($i*30);
  for($j=0;$j<=36;$j++)
  { 
     if($i==0 && ($y<=380 || $y==770 || $y==1100))
	 {
       imagefilledrectangle($im,$x,$y,($x+30),($y+30),$brown);
	   $y=$y+30;
	  }
	  
	 else
	 if($i==0 && ($y==920 || $y==860))
	 {
	    imagefilledrectangle($im,$x,$y,($x+30),($y+30),$white);
	    $y=$y+30;
	 }
	 
	 else
	 if($i==0)
	 {
	   imagefilledrectangle($im,$x,$y,($x+30),($y+30),$yellow);
	   $y=$y+30;
	 }
	 
	 else
	 
	 if($i==1 && $y<=110)
	 {
	   imagefilledrectangle($im,$x,$y,($x+30),($y+30),$red);
	   $y=$y+30;
	 }
	 
	 else
	 if($i==1 && $y<=380)
	 {
		imagefilledrectangle($im,$x,$y,($x+30),($y+30),$brown);
	    $y=$y+30;
	 }
	 
	 else
	 if($i==1)
	 {
	    imagefilledrectangle($im,$x,$y,($x+30),($y+30),$brown);
	    $y=$y+30;
	 }
	 
	 }
}
	 
	 if($phi==180)
	 { $x=150;}
	 
	 if($phi==-180)
	 {$x=1230;}
	 
	 if($phi>-180 && $phi<180)
	 {$phi=$phi/36;
	  $x= 150 + $phi*30;
	  
	  if($psi==180)
	 { $y=50;}
	 
	 if($psi==-180)
	 {$y=1130;}
	 
	 if($psi>-180 && $psi<180)
	 {$psi=$psi/36;
	  $y= 150 + $psi*30;
	 }
	 
	 imagefilledrectangle($im,$x,$y,($x+30),($y+30),$black);
	 
}
	 
	 
	 
?> 
	 
	 
	 
	 
	
