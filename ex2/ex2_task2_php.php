<?php
/*
    Author : Dharineesh K S
    Regno  : 123013012
*/
echo "
<html>
<head>
<title>ex2_task2_php</title>
<style type=\"text/css\">

body { 
    
    font-family: \"Times New Roman\";
    align-text : center;
}
table {
    border-collapse : collapse
}

</style>
</head> ";

echo"<body>";

$con = mysqli_connect("localhost","root","") or die("Error in connection");
mysqli_select_db($con,"imp") or die("Database is not exists");

$from = $_POST["from"];
$to = $_POST["to"];

$sql = "select * from ligands where molecular_weight>=$from and molecular_weight<=$to";
$query = mysqli_query($con,$sql) or die("Error in sql query syntax");

echo "
<table align= 'center' border='2'>
<tr>
<th>Ligand_id        </th>
<th>Pubchem_id       </th>
<th>Ligand_name      </th>
<th>Molecular weight </th>
<th>HBD              </th>
<th>HBA              </th>
<th>Rotatable bond   </th>
<th>Structure        </th>
</tr> ";

while($row = mysqli_fetch_array($query))
{ 
    $id                = $row['id'];               
    $pubchem_id        = $row['pubchem_id'];           
    $name              = $row['name'];                                                                                             
    $molecular_weight  = $row['molecular_weight'];                                                                                                                                                                          
    $Hbond_donor_count = $row['Hbond_donor_count'];                                                                                                     
    $Hbond_accep_count = $row['Hbond_accep_count'];  
    $rotatable_bond    = $row['rotatable_bond'];                                                                                            
    $str               = $row['str'];
    echo "
    <tr>
    <td>$id</td>
    <td align=right>$pubchem_id</td>
    <td align=right>$name</td>
    <td align=right>$molecular_weight</td>
    <td align=right>$Hbond_donor_count</td>
    <td align=right>$Hbond_accep_count</td>
    <td align=right>$rotatable_bond</td>
    <td><img src=ex2_task2_structure.php?ids=$id width='200'height='200'></td>
    </tr> ";
}                                                 


echo "</table>";

echo "<p align = center>HBD corresponds to Hydrogen Bond Donor Count and HBA corresponds to
Hydrogen Bond Acceptor Count.</p>";

mysqli_close($con);
echo"</body>";
echo"</html>";
?>