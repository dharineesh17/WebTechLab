<?php

$filename = $_FILES['pseq']['name'];
$location = $_FILES['pseq']['tmp_name'];
$interaction = $_POST["c1"];

move_uploaded_file($location,$filename);

# reading files

$fh = fopen($filename,"r");
$pdb = array(); // creating array
while (!feof($fh))
{
    $line = fgets($fh);

    #echo "$line";
    if (preg_match("/^ATOM/",$line))
    {
        array_push($pdb,$line);
    }
}
fclose($fh);

$ionic = array();

for ($i=0;$i<count($pdb);$i++)
{
    $pro_code  = substr($pdb[$i],17,3); # extracting 3 letter code 17-col_num, 3-num_of_str
    $atom_type = substr($pdb[$i],13,2);

    #echo "$pro_code <br>";
    #echo "$atom_type";


    if( ($pro_code == "ARG"  || $pro_code == "LYS" || $pro_code == "HIS" || $pro_code == "ASP" || $pro_code == "GLU"))
    {
        #echo "<pre>$pdb[$i]";

        array_push($ionic,$pdb[$i]);
    }
}

echo "<center><h1><b>Ionic interaction</b></h1></center>";

// dist calc
echo "<table>";

for ($i = 0;$i<count($ionic);$i++)
{
    for ($j = 1;$j<count($ionic);$j++)
    {
        preg_match_all("/-?\d{1,3}\.\d{3}/",$ionic[$i],$first);
        preg_match_all("/-?\d{1,3}\.\d{3}/",$ionic[$j],$second);

        $x1 = $first[0][0];
        $y1 = $first[0][1];
        $z1 = $first[0][2];
        $x2 = $second[0][0];
        $y2 = $second[0][1];
        $z2 = $second[0][2];

        $xsqr = ($x1-$x2)*($x1-$x2);
        $ysqr = ($y1-$y2)*($y1-$y2);
        $zsqr = ($z1-$z2)*($z1-$z2);

        $distance = sqrt($xsqr+$ysqr+$zsqr);

        if ($distance < 6)
        {

            echo "
            
            <tr>
            <td ><pre>$ionic[$i]</td>
            <td><pre>  --->  </td>
            <td ><pre>$ionic[$j]</td>
            <td><pre>  --->  </td>
            <td ><pre>ionic_interaction[$distance]</td>
            </tr>
            ";

        }

        
    }
}

echo "</table>";
?>