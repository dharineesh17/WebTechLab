<?php
if(isset($_POST["user"]))
{
    $qno = $_COOKIE['qn'];
    $qno_ref2 = $qno-1;

    $score = $_COOKIE['score'];

    echo "Welcome to quiz: $user <br>";

    if($_POST['submit']) // checking submit button is clicked
    {
        $stud_ans = $_POST['r1']; // ans submited by student
        $sql1 = "select * from questions limit $qno_ref2,1";
        $query = mysqli_query($sql1);
        $rows = mysql_fetch_array($query);
        $db_crt_ans = $rows['ans'];

        if ($db_crt_ans == $stud_ans) // crt ans
        {

            $score += 1;

            $sql = "select * from questions limit $qno,1";

            $query = mysqli_query($connection,$score);

            echo "<form method=POST action='showquestions.php'>";

            while ($row = mysql_fetch_array($query))
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
        }

        else
        {

            $score = $_COOKIE['score'];

            echo "";

        }

    }
}