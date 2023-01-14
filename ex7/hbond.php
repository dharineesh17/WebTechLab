<?php
/*
Author : Dharineesh K S
Regno  : 123013012
*/
echo "
<html>
<head>
<title>Identify interactions</title>
<style type=\"text/css\">
   body { 
       font-family: \"Times New Roman\";
    }
    table {
        width: 50%;
        
    }
    tr:nth-child(even) {
        background-color: #f2f2f2 ;
    }
</style>
</head> ";
echo"<body>";

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

// print_r($tt);
// print_r($tt[1][0]);
// print_r($tt[0][0]);
// print_r($tt[2][0]);

$vanderwaal_const = array('H'=>1.2,'C'=>1.70,"O"=>1.52,"N"=>1.55,'He'=>1.4,'F'=>1.47,"Si"=>2.10,'P'=>1.80,'S'=>1.80,'Cl'=>1.75,"As"=>1.85,'Se'=>1.90,'Br'=>1.85,'Te'=>2.06,'I'=>1.98);

//first
$xsq = ($tt[1][0]-$tt[0][0])*($tt[1][0]-$tt[0][0]);
$ysq = ($tt[1][1]-$tt[0][1])*($tt[1][1]-$tt[0][1]);
$zsq = ($tt[1][2]-$tt[0][2])*($tt[1][2]-$tt[0][2]);

$dist1 = sqrt($xsq+$ysq+$zsq)*0.5292;

$rd = $vanderwaal_const['H']-$dist1;

// second
$xsq = ($tt[2][0]-$tt[1][0])*($tt[2][0]-$tt[1][0]);
$ysq = ($tt[2][1]-$tt[1][1])*($tt[2][1]-$tt[1][1]);
$zsq = ($tt[2][2]-$tt[1][2])*($tt[2][2]-$tt[1][2]);

$dist2 = sqrt($xsq+$ysq+$zsq)*0.5292;

$ra = $vanderwaal_const['O']-$dist2;



//third
$xsq = ($tt[4][0]-$tt[3][0])*($tt[4][0]-$tt[3][0]);
$ysq = ($tt[4][1]-$tt[3][1])*($tt[4][1]-$tt[3][1]);
$zsq = ($tt[4][2]-$tt[3][2])*($tt[4][2]-$tt[3][2]);

$dist3 = sqrt($xsq+$ysq+$zsq)*0.5292;

$rd1 = $vanderwaal_const['H']-$dist3;

// four
$xsq = ($tt[5][0]-$tt[4][0])*($tt[5][0]-$tt[4][0]);
$ysq = ($tt[5][1]-$tt[4][1])*($tt[5][1]-$tt[4][1]);
$zsq = ($tt[5][2]-$tt[4][2])*($tt[5][2]-$tt[4][2]);

$dist4 = sqrt($xsq+$ysq+$zsq)*0.5292;

$ra1 = $vanderwaal_const['O']-$dist4;


echo "
<table border=1 align= 'center'>

<tr>
<th>Atom1</th>
<th>Atom2</th>
<th>rd</th>
<th>rd</th>
<th>rd-ra</th>
<th>rd+ra</th>
<th width=10px> Hydrogenbond / Van der waal interaction </th>

</tr>";

if (($rd+$ra)>0 && ($rd-$ra))
{
    echo "
    <tr>
    <th>H</th>
    <th>O</th>
    <th>$rd</th>
    <th>$ra</th>
    <th>",$rd-$ra,"</th>
    <th>",$rd+$ra,"</th>
    <th>Hydrogen bond</th>
    </tr>
    
    ";

}

else
{

    echo "
    <tr>
    <th>H</th>
    <th>O</th>
    <th>$rd</th>
    <th>$ra</th>
    <th>",$rd-$ra,"</th>
    <th>",$rd+$ra,"</th>
    <th>Van der waal</th>
    </tr>
    
    "; 

}


if (($rd1+$ra1)>0 && ($rd1-$ra1))
{
    echo "
    <tr>
    <th>H</th>
    <th>O</th>
    <th>$rd1</th>
    <th>$ra1</th>
    <th>",$rd1-$ra1,"</th>
    <th>",$rd1+$ra1,"</th>
    <th>Hydrogen bond</th>
    </tr>
    
    ";

}

else
{

    echo "
    <tr>
    <th>H</th>
    <th>O</th>
    <th>$rd1</th>
    <th>$ra1</th>
    <th>",$rd1-$ra1,"</th>
    <th>",$rd1+$ra1,"</th>
    <th>Vanderwaal</th>
    </tr>
    
    "; 

}


echo "
</table>
";
echo"</body>";
echo"</html>";


?>