<?php

/*
Author : Dharineesh K S
Regno  : 123013012
*/
echo "
<!DOCTYPE html>
<head>
<title>MUTATINS Details Report</title>
<style type=\"text/css\">
   body { 
       font-family: \"Times New Roman\";
    }
    table{
        width: 50%;
        
        border-collapse: collapse;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2 ;
    }
    a{
        text-decoration: none;
    }
    p{
        color : red;
    }
</style>
</head> ";

echo"<body>";


$connection = mysqli_connect("localhost","root","") or die(mysqli_error());
mysqli_select_db($connection,"mutdb") or die(mysqli_error($connection));

$wildres = $_POST['wildres'];
$pos = $_POST['mutpos'];
$mutres = $_POST['mutres'];

$sql = "select * from mutdb where POSITION=$pos and RESIDUES = '$wildres' and MUTATIONS = '$mutres'";
$query = mysqli_query($connection,$sql) or die(mysqli_error($connection));

$num = mysqli_num_rows($query);
if ($num == 0)
{
  echo "Mutation details not available";
}

else
{

while ($row = mysqli_fetch_array($query))
{
    echo " <table align='center' cellpadding = 2px >";
    $mutation = $row["MUTATIONS"];
    $exon_no =  $row["EXON_No"];
    $class    = $row["CLASS"];
    $coverage = $row["DISTRIBUTION"];
    $codon = $row["CODON_CHANGE"];
    $onset = $row["ONSET"];
    $stability = $row["STABILITY"];
    $ref = $row["PUBMED"];
    $struct = $row["RCSB"];
    $exposure = $row["EXPOSURE"];

    echo "<tr><td><p>Mutation:</p></td><td>$mutation</td></tr>";
    echo "<tr><td><p>Exon number:</p></td><td>$exon_no</td></tr>";
    echo "<tr><td><p>Class:</p></td><td>$class</td></tr>";
    echo "<tr><td><p>Coverage:</p></td><td>$coverage</td></tr>";
    echo "<tr><td><p>Codon change:</p></td><td>$codon</td></tr>";
    echo "<tr><td><p>Onset:</p></td><td>$onset</td></tr>";
    echo "<tr><td><p>Stability:</p></td><td>$stability</td></tr>";
    echo "<tr><td><p>Reference:</p></td><td><a href='$ref' target='_blank'>$ref</a></td></tr>";
    echo "<tr><td><p>Structure:</p></td><td>$struct</td></tr>";
    echo "<tr><td><p>Exposure:</p></td><td>$exposure</td></tr>";

    echo "</table>";

}

}

echo"</body>";
echo"</html>";
?>