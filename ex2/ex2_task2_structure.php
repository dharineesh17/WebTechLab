<?php
/*
    Author : Dharineesh K S
    Regno  : 123013012
*/
header("content-type:image/png");
$ligand_id = $_GET["ids"];
$con = mysqli_connect("localhost","root","") or die("Error in connection");
mysqli_select_db($con,"imp") or die("Database is not exists");

$sql = "select str from ligands where id='$ligand_id'";
$query = mysqli_query($con,$sql) or die("Error in sql query syntax");
$row = mysqli_fetch_array($query) or die("Error in mysql fetch syntax");
$struct = $row['str'];
echo "$struct";

mysqli_close($con)
?>