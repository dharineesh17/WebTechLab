<?php
/*
Author : Dharineesh K S
Regno  : 123013012
*/
echo "
<html>
<head>
<title>Generate Report</title>
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
$uid = $_GET['userid'];
$connection=mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($connection,"sastradb")or die(mysql_error());
$sql="select * from videolectures where Facultyid='$uid'";
$query = mysqli_query($connection,$sql) or die(mysql_error());
echo "<table align='center'><tr><th>Topic</th><th>video link</th><th>Duration in minutes</th></tr>";
while($row = mysqli_fetch_array($query))
{
  $topic    = $row['Topic'];  
  $vlink    = $row['Video Link'];       
  $duration = $row['Duraton in minutes'] ;       
  echo "<tr><td>$topic</td><td>$vlink</td><td align='center'>$duration</td></tr>";
}
echo"</table>";
echo"</body>";
echo"</html>";
?>