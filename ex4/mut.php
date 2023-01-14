<?php
/*
Author : Dharineesh K S
Regno  : 123013012
*/
echo "
<!DOCTYPE html>
<head>
<title>Select Mutants</title>
<style type=\"text/css\">
   body { 
       font-family: \"Times New Roman\";
       background-color: #f2f2f2 ;
    }
    select{
        background-color: white ;
        padding : 2px 10px ;
    }
</style>
</head> ";

echo"<body>";
$connection = mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($connection,"mutdb")or die(mysql_error($connection));

echo "<h1 align=center>Mutationdb</h1>";
echo "<h4 align=center>Mutation browser for SODI mutants causing ALS</h4>";


echo "
<p>
The only cause known for occurrence of ALS is mutation. 
But it is complex to identify what effect of these scattered mutations cause ALS. 
To know about a mutation and the effect of that mutation on ALS causing mechanism, 
select a mutation:
</p>";
echo "<br>";


echo "
<form method=post action='details.php'>";


$sql1 = "select distinct RESIDUES from mutdb";
$query1 = mysqli_query($connection,$sql1);

echo "
<table align=center cellpadding=5px>
<tr>
<th>Wildtype Residue</th>
<th>Mutation Position </th>
<th>Mutation Residue  </th>
</tr>

";

echo "
<tr>
<td align=center>
<select name=wildres>
";
while ($row = mysqli_fetch_array($query1) )
{
   $wild = $row['RESIDUES'];  
   echo "<option>$wild</option>";  
}
echo "
</select>
</td>
";


$sql2 = "select distinct POSITION from mutdb";
$query2 = mysqli_query($connection,$sql2);
echo "
<td align=center>
<select name=mutpos>";
while ($row = mysqli_fetch_array($query2) )
{
   $pos = $row['POSITION'];  
   echo "<option>$pos</option>";  
}
echo "
</select>
</td>
";



$sql3 = "select distinct MUTATIONS from mutdb";
$query3 = mysqli_query($connection,$sql3);
echo "
<td align=center>
<select name=mutres>";
while ($row = mysqli_fetch_array($query3) )
{
   $mut = $row['MUTATIONS'];  
   echo "<option>$mut</option>";  
}
echo "
</select>
</td>
</tr>";

echo "
<tr>
<td></td>"; #empty column

echo "
<td align=center>
<input type =submit value= submit>
</td>";
echo "
<td>
</td>
";
echo "
</table>";
echo "
</form>";
echo "</html>";
?>