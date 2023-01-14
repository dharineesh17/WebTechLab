<?php
/*
Author : Dharineesh K S
Regno  : 123013012
*/
echo "
<html>
<head>
<title>Forms</title>
</head> ";


if(isset($_POST["pwd"]))
{
    $uid= $_POST["user"];
    $pwd= $_POST["pwd"];
    $connection = mysqli_connect("localhost","root","")or die(mysql_error());
    mysqli_select_db($connection,"quiz")or die(mysql_error());
    $sql="select * from student where sid='$uid' and pwd='$pwd'";

    $query = mysqli_query($connection,$sql) or die(mysql_error());
    $num = mysqli_num_rows($query);
    echo "<body>";

    if($num==1)
    {
      setcookie("user",$uid,time()+7200);
      setcookie("qn",1,time()+7200);
      setcookie("score",0,time()+7200);
      header("location:showqn.php");
    }
    else
    {
        header("location:login.php?value='Invalide'");
    }
}

echo"</body>";
echo"</html>";
?>