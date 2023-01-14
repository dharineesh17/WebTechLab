<?php

$filename = $_FILES['upload']['name'];
$filesize = $_FILES['upload']['size'];

$file_temp_loc = $_FILES['upload']['tmp_name'];

move_uploaded_file($file_temp_loc,"upload/$filename");

$fh = fopen("upload/$filename","r");

$coordinates = array();
$tt = array();
$k = 0;

while (!feof($fh))
{
    $line = fgets($fh);
    preg_match_all("/-?\d.\d+E[+-]\d+/",$line,$coordinates);

    $tt[$k][0] = sprintf("%f",$coordinates[0][0]);
    $tt[$k][1] = sprintf("%f",$coordinates[0][1]);
    $tt[$k][2] = sprintf("%f",$coordinates[0][2]);
    $k++;
}

//print_r($tt)

$vanderwaal_constant = array('H'=>1.2,'C'=>1.70,"O"=>1.52,"N"=>1.55,'He'=>1.4,'F'=>1.47,"Si"=>2.10,'P'=>1.80,'S'=>1.80,'Cl'=>1.75,"As"=>1.85,'Se'=>1.90,'Br'=>1.85,'Te'=>2.06,'I'=>1.98);

//first
$xsq = ($tt[1][0]-$tt[0][0])*($tt[1][0]-$tt[0][0]);
$ysq = ($tt[1][1]-$tt[0][1])*($tt[1][1]-$tt[0][1]);
$zsq = ($tt[1][2]-$tt[0][2])*($tt[1][2]-$tt[0][2]);

$dis1 = sqrt($xsq+$ysq+$zsq)*0.5292;

$rd = $vanderwaal_consta['H']-$dis1;

// second
$xsq = ($tt[2][0]-$tt[1][0])*($tt[2][0]-$tt[1][0]);
$ysq = ($tt[2][1]-$tt[1][1])*($tt[2][1]-$tt[1][1]);
$zsq = ($tt[2][2]-$tt[1][2])*($tt[2][2]-$tt[1][2]);

$dis2 = sqrt($xsq+$ysq+$zsq)*0.5292;

$ra = $vanderwaal_constant['O']-$dis2;

echo "
<table border=1>

<tr>
<td>Atom1</td>
<td>Atom2</td>
<td>rd</td>
<td>rd</td>
<td>rd-ra</td>
<td>rd+ra</td>
<td>Hydrogen bond/Vanderwaal interaction</td>

</tr>";

if (($rd+$ra)>0 && ($rd-$ra))
{
    echo "
    <tr>
    <td>H</td>
    <td>O</td>
    <td>$rd</td>
    <td>$ra</td>
    <td>",$rd-$ra,"</td>
    <td>",$rd+$ra,"</td>
    <td>Hydrogen bond</td>
    </tr>
    
    ";

}

else
{

    echo "
    <tr>
    <td>H</td>
    <td>O</td>
    <td>$rd</td>
    <td>$ra</td>
    <td>",$rd-$ra,"</td>
    <td>",$rd+$ra,"</td>
    <td>Vanderwaals</td>
    </tr>
    
    "; 

}

echo "
</table>

";



?>

