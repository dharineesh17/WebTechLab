<?php
/*
    Author : Dharineesh K S
    Regno  : 123013012
*/
echo "
<html>
<head>
   <title>ex2_task2_B_alpha_hyperlinks_php</title>
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

$con = mysqli_connect("localhost","root","") or die("Error in connection");
mysqli_select_db($con,"imp") or die("Database is not exists");
$alpha = $_GET["var"];
$arr = array("A" => "select * from ligands where name like 'A%'",
             "S" => "select * from ligands where name like 'S%'",
             "D" => "select * from ligands where name like 'D%'",
             "F" => "select * from ligands where name like 'F%'",
             "G" => "select * from ligands where name like 'G%'",
             "H" => "select * from ligands where name like 'H%'",
             "J" => "select * from ligands where name like 'J%'",
             "K" => "select * from ligands where name like 'K%'",
             "L" => "select * from ligands where name like 'L%'",
             "Q" => "select * from ligands where name like 'Q%'",
             "W" => "select * from ligands where name like 'W%'",
             "E" => "select * from ligands where name like 'E%'",
             "R" => "select * from ligands where name like 'R%'",
             "T" => "select * from ligands where name like 'T%'",
             "Y" => "select * from ligands where name like 'Y%'",
             "U" => "select * from ligands where name like 'U%'",
             "I" => "select * from ligands where name like 'I%'",
             "O" => "select * from ligands where name like 'O%'",
             "P" => "select * from ligands where name like 'P%'",
             "Z" => "select * from ligands where name like 'Z%'",
             "X" => "select * from ligands where name like 'X%'",
             "C" => "select * from ligands where name like 'C%'",
             "B" => "select * from ligands where name like 'B%'",
             "N" => "select * from ligands where name like 'N%'",
             "M" => "select * from ligands where name like 'M%'",
             "V" => "select * from ligands where name like 'V%'",
            );

$sql = $arr[$alpha];
$query = mysqli_query($con,$sql) or die("Error in sql query syntax");
echo " <table cellpadding = 5px align='center'>
              <tr>
                <th>Name</th>
                <th>ID</th> 
               </tr> ";
while($row = mysqli_fetch_array($query))
{
    $lidid = $row["id"];
    $name = $row["name"];
    echo "
    <tr>
    <td>$name</td>
    <td>$lidid</td>
    </tr>
    ";
}
echo "</table>";
mysqli_close($con);

echo"</body>";
echo"</html>";
?>