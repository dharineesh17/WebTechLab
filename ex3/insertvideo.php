<?php
/*
Author : Dharineesh K S
Regno  : 123013012
*/
echo "
<html>
<head>
<title>Course log entry form</title>
<style type=\"text/css\">
   body { 
       font-family: \"Times New Roman\";
    }
</style>
</head> ";
echo "<body>";

$uid = $_GET['userid'];

echo "<form method=post action = 'courselogentry.php?userid=$uid'>
Topic <br> <textarea name=topic rows=5 cols=20 ></textarea><br>
Video link <br><input type=text name=vlink size=50><br>
Duration(min) <br><input type=text name=duration placeholder=0><br>
<input type=submit value=Save> </form>";

echo"</body>";
echo"</html>";
?>