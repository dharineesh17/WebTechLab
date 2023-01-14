<?php
error_reporting(0);
echo "
<html>
<head>
<title>Questions</title>
<style type=\"text/css\">
   body { 
       font-family: \"Times New Roman\";
    }
</style>
</head> ";
echo "<body>";

echo "<p align=right><a href='logout.php'> Click here to log out</a></p>";

$user = $_COOKIE['user'];

$connection = mysqli_connect("localhost","root","")or die(mysql_error());
mysqli_select_db($connection,"quiz")or die(mysql_error());



if(isset($user))
{
    $qno = $_COOKIE['qn'];
    $qno_ref2 = $qno-1;
    $score = $_COOKIE['score'];

    echo "Welcome to Quiz: $user <br>";

    if($_POST['submit']) // checking submit button is clicked
    {
        $stud_ans = $_POST['r1']; // ans submited by student
        $sql1 = "select * from questions limit $qno_ref2,1";
        $query = mysqli_query($connection,$sql1);
        $rows = mysqli_fetch_array($query);
        $db_crt_ans = $rows['ans'];

        if ($db_crt_ans == $stud_ans) // crt ans
        {

            $score += 1;

            $sql = "select * from questions limit $qno,1";

            $query = mysqli_query($connection,$sql);

            echo "<form method=POST action='showqn.php'>";

            while ($row = mysqli_fetch_array($query))
            {
                $qno = $row['qno'];
                $ques  = $row['ques'];
                $c1 = $row['c1'];
                $c2 = $row['c2'];
                $c3 = $row['c3'];
                $c4 = $row['c4'];

                echo "<b>$qno '.' $ques</b><br>";
                echo "<input type=radio name=r1 value=$c1>$c1<br>";
                echo "<input type=radio name=r1 value=$c2>$c2<br>";
                echo "<input type=radio name=r1 value=$c3>$c3<br>";
                echo "<input type=radio name=r1 value=$c4>$c4<br>";

                $qno += 1;

                setcookie("qn",$qno,time()+7200);
                setcookie("score",$score,time()+7200);

            }

            echo "</form>";
        }

        else
        {
            # wrong ans

            $score = $_COOKIE['score'];

            $sql = "select * from questions limit $qno,1";

            $query = mysqli_query($connection,$sql);

            echo "<form method=POST action='showqn.php'>";

            while ($row = mysqli_fetch_array($query))
            {
                $qno = $row['qno'];
                $ques  = $row['ques'];
                $c1 = $row['c1'];
                $c2 = $row['c2'];
                $c3 = $row['c3'];
                $c4 = $row['c4'];

                echo "<b>$qno '.' $ques</b><br>";
                echo "<input type=radio name=r1 value=$c1>$c1<br>";
                echo "<input type=radio name=r1 value=$c2>$c2<br>";
                echo "<input type=radio name=r1 value=$c3>$c3<br>";
                echo "<input type=radio name=r1 value=$c4>$c4<br>";

                $qno += 1;
            }
            echo "</form>";

        }
        

    }
    else
    {
        $sql1 = "select * from questions limit $qno_ref2,1";
      
    
        $query = mysqli_query($connection,$sql1);

        echo "<form method='POST' action='showqn.php?'>";

        while ($row = mysqli_fetch_array($query))
        {
            $qno = $row['qno'];
            $ques  = $row['ques'];
            $c1 = $row['c1'];
            $c2 = $row['c2'];
            $c3 = $row['c3'];
            $c4 = $row['c4'];

            echo "<b>$qno '.' $ques</b><br>";
            echo "<input type='radio' name='r1' value=$c1>$c1<br>";
            echo "<input type='radio' name='r1' value=$c2>$c2<br>";
            echo "<input type='radio' name='r1' value=$c3>$c3<br>";
            echo "<input type='radio' name='r1' value=$c4>$c4<br>";
            $qno += 1;

            setcookie("qn",$qno,time()+7200);
            setcookie("score",$score,time()+7200);

        }
        echo "<br />";
        echo "<input type='submit' name='submit' value='submit'>";

        echo "</form>";
    }

}



echo"</body>";
echo"</html>";
?>

