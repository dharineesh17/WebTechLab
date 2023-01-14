<?php 
/*
    Author : Dharineesh K S
    Regno  : 123013012
*/
echo "
<html>
<head>
   <title>ex2_task1_php</title>
   <style type=\"text/css\">
       body { 
           font-family: \"Times New Roman\";
           margin-top: 10%;
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

$seq = $_POST["seq"];

$tiny = 0;
$small = 0;
$aliphatic = 0;
$aromatic = 0;
$nonpolar = 0;
$polar = 0;
$charged = 0;
$basic = 0;
$acidic = 0;

for($i=0;$i<strlen($seq);$i++)
{
    $sub = substr($seq,$i,1);

    #tiny
    if ($sub == "A" || $sub == "C" || $sub == "G" || $sub == "S" || $sub == "T")
    {
        $tiny++;
    }

    #small
    if ($sub == "A" || $sub == "C" || $sub == "D" || $sub == "G" || $sub == "N" || $sub == "P" || $sub == "S" || $sub == "T" || $sub == "V")
    {
        $small++;
    }

    #aliphatic
    if ($sub == "A" || $sub == "I" || $sub == "L" || $sub == "V")
    {
        $aliphatic++;
    }
    #aromatic
    if ($sub == "F" || $sub == "H" || $sub == "W" || $sub == "Y")
    {
        $aromatic++;
    }

    #nonpolar
    if ($sub == "A" || $sub == "C" || $sub == "F" || $sub == "G" || $sub == "I" || $sub == "L" || $sub == "M" || $sub == "P" || $sub == "V" || $sub == "W" || $sub == "Y")
    {
        $nonpolar++;
    }

    #polar
    if ($sub == "D" || $sub == "E" || $sub == "H" || $sub == "K" || $sub == "N" || $sub == "Q" || $sub == "R" || $sub == "S" || $sub == "T" || $sub == "Z")
    {
        $polar++;
    }

    #charged
    if ($sub == "B" || $sub == "D" || $sub == "E" || $sub == "H" || $sub == "K" || $sub == "R" || $sub == "Z")
    {
        $charged++;
    }

    #basic
    if ($sub == "H" || $sub == "K" || $sub == "R")
    {
        $basic++;
    }

    #acidic
    if ($sub == "B" || $sub == "D" || $sub == "E" || $sub == "Z")
    {
        $acidic++;
    } 
}

echo"
<table align = center >
<tr><td>Tiny      </td><td>(A+C+G+S+T)                </td><td>".$tiny."     </td></tr>
<tr><td>Small     </td><td>(A+C+D+G+N+P+S+T+V)        </td><td>".$small."    </td></tr>
<tr><td>Aliphatic </td><td>(A+I+L+V)                  </td><td>".$aliphatic."</td></tr>
<tr><td>Aromatic  </td><td>(F+H+W+Y)                  </td><td>".$aromatic." </td></tr>
<tr><td>Nonpolar  </td><td>(A+C+F+G+I+L+M+P+V+W+Y)    </td><td>".$nonpolar." </td></tr>    
<tr><td>Polar     </td><td>(D+E+H+K+N+Q+R+S+T+Z)      </td><td>".$polar."    </td></tr>        
<tr><td>Charged   </td><td>(B+D+E+H+K+R+Z)            </td><td>".$charged."  </td></tr>          
<tr><td>Basic     </td><td>(H+K+R)                    </td><td>".$basic."    </td></tr>            
<tr><td>Acidic    </td><td>(B+D+E+Z)                  </td><td>".$acidic."   </td></tr>          
</table> ";

echo"</body>";
echo"</html>";
?>