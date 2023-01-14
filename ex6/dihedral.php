<?php

# name  : Dharineesh K S
# regno : 123013012

$filename = $_FILES['pdb']['name'];
$location = $_FILES['pdb']['tmp_name'];
move_uploaded_file($location,$filename);

$handle = fopen($filename,"r");

$pdb_resnumber = array();
$atom_coordinate = array();
$j = 0;
$noofatom = 0;


while(!feof($handle))
{
    $line = fgets($handle);

    if(preg_match("/^ATOM/",$line))
    {
        #echo "$line <br>";
        #ATOM      1  N   THR A   1      17.047  14.099   3.625  1.00 13.79           N

        if(preg_match("/\d{1,5}\s{2,3}[NC]\s{1,}/",$line) || preg_match("/\d{1,5}\s{2,3}CA\s{1,}/",$line))
        {
            #echo "$line <br>";
            $resno = substr($line,23,3);
            $pdb_resnumber[$j] = $resno;
            $atom_coordinate[$j] = $line;
            $j++;
            $noofatom++;

        }
    }  
}


//print_r($pdb_resnumber);
//print_r($atom_coordinate);

$uniq = array_unique($pdb_resnumber);
//print_r($uniq);
#echo "<br>";
$aapdb = array();
$k = 0;

foreach($uniq as $key)
{
    $aapdb[$k] = (int)$key;
    $k++;
}

//print_r($aapdb);


$u = 3; // to extract the previous residue for phi
$psi_count = 3; // to move to next set of co-ordinates for psi


#phi calc

for($i=1;$i<count($aapdb)-1;$i++) #i =1, getting residue number = 2
{
    
    $current_coordinate = array(); 

    for($j=0;$j<count($atom_coordinate);$j++) # get the residue number
    {
        $residue_number_from_coordinate = (int)trim(substr($atom_coordinate[$j],23,3));

        if($aapdb[$i] == $residue_number_from_coordinate)
        {
            array_push($current_coordinate,$atom_coordinate[$j]);
        }
    }

    // calling func for calc
    ab($current_coordinate);
}


// func for calc
function ab($cc)
{
    //print_r($cc);

    $cur = substr($cc[0],23,3);
    phi($cur,$cc);
    psi($cur,$cc);
}

function phi($p,$dd)
{
    global $atom_coordinate, $u;

    $cc = $atom_coordinate[$u-1]; // to extract previous residue carbon atom

    # extracting x,y,z coordinates

    preg_match_all("/-?\d{1,2}\.\d{3}/",$cc   ,$d1); // x,y,z of previous residue carbon atoms
    preg_match_all("/-?\d{1,2}\.\d{3}/",$dd[0],$d2); // x,y,z of current nitrogen atoms 
    preg_match_all("/-?\d{1,2}\.\d{3}/",$dd[1],$d3); // x,y,z of current CA atoms 
    preg_match_all("/-?\d{1,2}\.\d{3}/",$dd[2],$d4); // x,y,z of current carbon atoms

    #declaring vectors

    $v1 = array();
    $v2 = array();
    $v3 = array();

    for ($m=0;$m<3;$m++)
    {
        $v1[$m] = $d2[0][$m] - $d1[0][$m];
        $v2[$m] = $d2[0][$m] - $d3[0][$m];
        $v3[$m] = $d4[0][$m] - $d3[0][$m];
    }

    $p = cross($v1,$v2);
    $q = cross($v2,$v3);
    global $phi_angle;
    $phi_angle = angle($p,$q);

    print "Phi angle is $phi_angle <br>";
}

// psi angle calc
function psi($p,$dd)
{
    global $atom_coordinate, $psi_count;

    $pss = $atom_coordinate[$psi_count+3]; // to extract previous residue carbon atom

    # extracting x,y,z coordinates

    
    preg_match_all("/-?\d{1,2}\.\d{3}/",$dd[0],$d1); // x,y,z of current nitrogen atoms 
    preg_match_all("/-?\d{1,2}\.\d{3}/",$dd[1],$d2); // x,y,z of current CA atoms 
    preg_match_all("/-?\d{1,2}\.\d{3}/",$dd[2],$d3); // x,y,z of current carbon atoms
    preg_match_all("/-?\d{1,2}\.\d{3}/",$pss  ,$d4); // x,y,z of next residue nitrogen atoms

    #declaring vectors

    $v1 = array();
    $v2 = array();
    $v3 = array();

    for ($m=0;$m<3;$m++)
    {
        $v1[$m] = $d2[0][$m] - $d1[0][$m];
        $v2[$m] = $d2[0][$m] - $d3[0][$m];
        $v3[$m] = $d4[0][$m] - $d3[0][$m];
    }

    $p = cross($v1,$v2);
    $q = cross($v2,$v3);
    global  $psi_angle;
    $psi_angle = angle($p,$q);

    print "Psi angle is $psi_angle <br>";
}



function cross($r1,$r2)
{
    $p1[0] = $r1[1]*$r2[2] - $r1[2]*$r2[1]; 
    $p1[1] = $r2[2]*$r2[0] - $r1[0]*$r2[2]; 
    $p1[2] = $r1[0]*$r2[1] - $r1[1]*$r2[0]; 

    return $p1;
}

function angle($a1,$a2)
{
    $cos_theta = dot($a1,$a2)/(len($a1)*len($a2));
    $sin_sqr_theta = 1-($cos_theta*$cos_theta);

    if($sin_sqr_theta<0)
    {
        $sin_theta = 0;
    }
    $sin_theta = sqrt($sin_sqr_theta);
    
    # 1 radian = 57.29578 degrees;

    $_angle = -(atan2($sin_theta,$cos_theta)*57.29578);
    return $_angle;

}

function dot($a1,$a2)
{
    $sum = 0;
    for($i=0;$i<2;$i++)
    {
        $sum = $sum+$a1[$i]*$a2[$i];
    }
    return $sum;

}

function len($a1)
{
    $sq = sqrt($a1[0]*$a1[0]+$a1[1]*$a1[1]+$a1[2]*$a1[2]);
    return $sq;
}

echo "
<br /><br />
<a href='ramachandranplot.php?phi=$phi_angle and psi=$psi_angle'>

Show Ramachandran plot</a>

";

?>

