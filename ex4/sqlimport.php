<?php

$connection = mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($connection,"mutdb")or die(mysql_error($connection));

?>