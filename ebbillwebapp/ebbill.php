<?php

$unit = $_POST['unit'];
$price = 0;

if($unit<50)
{
    $price = $unit*3.50;
}
elseif ($unit>50 && $unit<=100)
{
    $price = $unit*4.00;
}
elseif ($unit>100 && $unit<=150)
{
    $price = $unit*5.20;
}
else
{
    $price = $unit*6.50;
}

print "<font color = blue>Unit consumed : $unit </font><br>";
print "<font color = red> the price is $price</font>";
?>