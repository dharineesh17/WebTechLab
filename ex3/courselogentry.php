<?php
/*
Author : Dharineesh K S
Regno  : 123013012
*/
echo "
<html>
<head>
<title>successfully Submitted</title>
<style type=\"text/css\">
   body { 
       font-family: \"Times New Roman\";
    }
</style>
</head> ";
echo "<body>";
$topic      = $_POST['topic'];
$vlink      = $_POST['vlink'];
$duration   = $_POST['duration'];
$uid        = $_GET['userid'];
$connection = mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($connection,"sastradb")or die(mysql_error());
$sql="insert into videolectures values ('$topic','$vlink',$duration,'$uid')";
mysqli_query($connection,$sql);
echo" Video links was added successfully <br>"; 
echo "<a href = 'usercheck.php?userids=$uid '>press here to go back</a>";
echo"</body>";
echo"</html>";
?>