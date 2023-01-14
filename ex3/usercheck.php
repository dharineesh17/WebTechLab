<?php
/*
Author : Dharineesh K S
Regno  : 123013012
*/
echo "
<html>
<head>
<title>Forms</title>
<link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
</head> ";


if(isset($_POST["pwd"]))
{
$uid= $_POST["userid"];
$pwd= $_POST["pwd"];
$connection = mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($connection,"sastradb")or die(mysql_error());
$sql="select * from facultylist where Facultyid='$uid' and password='$pwd'";

$query = mysqli_query($connection,$sql) or die(mysql_error());
$num=mysqli_num_rows($query);
echo "<body>";

if($num==1)
{
  
  echo "<center>Login successfull</center> <br>";
 
  echo "<center>
  <div class=\"w3-dropdown-hover\">
    <button class=\"w3-button w3-green\">select</button>
    <div class=\"w3-dropdown-content w3-bar-block w3-border\">
      <a href=\"insertvideo.php?userid=$uid\" class=\"w3-bar-item w3-button\">Course log entry</a>
      <a href=\"showcourselog.php?userid=$uid\" class=\"w3-bar-item w3-button\">Generate Report</a>
    </div>
  </div></center> " ;
}
else
{
  header("location:login.php?value='Invalide'");
}
}
else
{
  $id = $_GET['userids'];
  echo "<center></center> <br>";
 
  echo "<center>
  <div class=\"w3-dropdown-hover\">
    <button class=\"w3-button w3-green\">select</button>
    <div class=\"w3-dropdown-content w3-bar-block w3-border\">
      <a href=\"insertvideo.php?userid=$id\" class=\"w3-bar-item w3-button\">Course log entry</a>
      <a href=\"showcourselog.php?userid=$id\" class=\"w3-bar-item w3-button\">Generate Report</a>
    </div>
  </div></center> " ;
}
echo"</body>";
echo"</html>";
?>