<title>&lt;title&gt;: The Document Title element - HTML: Hypertext Markup Language | MDN</title>


<script>

    function ab(res)
    {
        var url = "'mut.php?residue='+res";
        window.location = url ;

    }

    function abc(residue,position)
    {

        var url = '"mut.php?residue="+residue+"&pos="+position+';
        window.location = url ;


    }


</script>


<?php
$connection = mysqli_connect("localhost","root","");
mysqli_select_db($connection,"mutdb");

$sql = "select distinct RESIDUES from mutdb";
$query = mysqli_query($connection,$sql);

echo "<form method='GET' action='mut.php'>";
if(isset($_GET['residue']))
{
    $residue = $_GET['residue'];
    echo "<select onchange=ab(this.value) name=s1>";
    echo "<option>$residue";
    echo "</select>";
}
else
{

    echo "<select onchange=ab(this.value) name=s1>";
    while($row = mysqli_fetch_array($connection,$query))
    {
        $residues = $row['RESIDUES'];
        echo "<option>$residues";
    }
    echo "</select>";

}

$sql1 = "select * from mutdb where RESIDUES = '$residue'";
$query1 = mysqli_query($connection,$sql1);
echo "<select onchange=abc(this.value) >";
while($row = mysqli_fetch_array($connection,$query1))
{
    $position = $row['POSITION'];
    echo "<option>$position";
}
echo "</select>";

if(isset($_GET['residue']))
{
    $pos = $_GET['pos'];
    $res = $_GET['residue'];

    if(isset($pos))
    {
        echo "<select onchange=abc('res',this.value) name=s2>";
        echo "<option>$pos";
        echo "</select>";
    }
    else
    {
    
        $sql1 = "select distint POSITION from mutdb where RESIDUES = '$res";
        $query1 = mysqli_query($connection,$sql1);
        echo "<select onchange=abc('$res',this.value) >";
        while($row = mysqli_fetch_array($connection,$query1))
        {
            $position = $row['POSITION'];
            echo "<option>$position";
        }
        echo "</select>";
    }
}
echo "</form>";
?>