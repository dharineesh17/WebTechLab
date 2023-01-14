<?php

$filename = $_FILES['pseq']['name'];
$location = $_FILES['pseq']['tmp_name'];

$interaction = $_POST["c1"];

#print_r($interaction);

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
#print_r($pdb);

// creating arrays
$hydro = array();

for ($i=0;$i<count($pdb);$i++)
{
    $pro_code  = substr($pdb[$i],17,3); # extracting 3 letter code 17-col_num, 3-num_of_str
    $atom_type = substr($pdb[$i],13,2);

    #echo "$pro_code <br>";
    #echo "$atom_type";


    if( ($pro_code == "ALA"  || $pro_code == "VAL" || $pro_code == "LEU" || $pro_code == "ILE" || $pro_code == "MET"  || $pro_code == "PHE" || $pro_code == "TRP" || $pro_code == "PRO" ||  $pro_code == "TYR") && $atom_type == "CA" )
    {
        #echo "<pre>$pdb[$i]";

        array_push($hydro,$pdb[$i]);
    }
}

#print_r($hydro)

// dist calc

echo "<table>";

for ($i = 0;$i<count($hydro);$i++)
{
    for ($j = 1;$j<count($hydro);$j++)
    {
        preg_match_all("/-?\d{1,3}\.\d{3}/",$hydro[$i],$first);
        preg_match_all("/-?\d{1,3}\.\d{3}/",$hydro[$j],$second);

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

        

        if ($distance < 5)
        {
            #print ("$hydro[$i] ---> $hydro[$j] ---> Hydrophobic[$distance]<br>");

            echo "
            
            <tr>
            <td ><pre>$hydro[$i]</td>
            <td><pre>  --->  </td>
            <td ><pre>$hydro[$j]</td>
            <td><pre>  --->  </td>
            <td ><pre>Hydrophobic[$distance]</td>
            </tr>
            ";

        }

        
    }
}

echo "</table>";
?>