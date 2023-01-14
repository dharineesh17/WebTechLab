<?php

echo "
<html>
<head>
<title>Symmetry operation</title>
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

$new = "";



$filename = $_FILES['upload']['name'];

// $file_temp_loc = $_FILES['upload']['tmp_name'];

move_uploaded_file($_FILES['upload']['tmp_name'],"uploads/$filename");

$sym = $_POST['symopr'];
$symopr = explode(",",$sym);


$symopr[0] = preg_replace("/1\/2/","0.5",$symopr[0]);
$symopr[1] = preg_replace("/1\/2/","0.5",$symopr[0]);
$symopr[2] = preg_replace("/1\/2/","0.5",$symopr[0]);


$tt = fopen("new.cif","w");
$file_cif = array();
$cif_syml = array();
$cif_header = array();
$cif_atom = array();
$handle = fopen("uploads/$filename","r");
$bb = "";
$entirefile = "";

while (!feof($handle))
{
    $buffer1 = fgets($handle); 
   

    if (preg_match("/^[_\d#a-z]/",$buffer1))
    {
        $new = $new.$buffer1;

    }
    if (preg_match("/^[A-Z]/",$buffer1))
    {
        $bb = $bb.$buffer1;
        preg_match_all("/[A-Z][a-z]?[\d{1}]?[\d{1}]?\s?[A-Z]?\s?[A-Z]?\s?/",$buffer1,$dy);

        $firstpart = $dy[0][0];

        preg_match_all("/-?\d{1,2}\.\d+/",$buffer1,$d2);
        
        

        $x1 = $d2[0][0];
        $y1 = $d2[0][1];
        $z1 = $d2[0][2];

        if($x1!="" && $y1!="" && $z1!="")
        {
            $xcc = preg_replace("/x/",$x1,$symopr[0]);
            $ycc = preg_replace("/y/",$x1,$symopr[1]);
            $zcc = preg_replace("/z/",$x1,$symopr[2]);


            $xcc1 = preg_replace("/--/","+",$xcc);
            $ycc1 = preg_replace("/--/","+",$ycc);
            $zcc1 = preg_replace("/--/","+",$zcc);

            $xdd = eval("return  ". $xcc1.";");
            $ydd = eval("return  ". $ycc1.";");
            $zdd = eval("return  ". $zcc1.";");

            $new .= "".$firstpart."".$xdd." ".$ydd." ".$zdd."\n";

        }
    }
}

echo "<br>After Symmetry Operation <br>textarea rows=10 cols=90>$new</textarea><br>";


echo"</body>";
echo"</html>";

?>