<?php

setcookie("user",time()-7200);
setcookie("qn",time()-7200);
setcookie("score",time()-7200);
header("location:login.php")

?>