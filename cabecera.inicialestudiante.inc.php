<?php
//$carnet=$_SESSION["ci"];
/*$_SESSION["id"]=2;
$sqlf ="select * from academico3.alumno ";
$sqlf.="where id=".$_SESSION["id"];
$resultadof = mysqli_query($conn, $sqlf);
$filaf = mysqli_fetch_row($resultadof);
$id=$filaf[0];
$nombre=$filaf[1];
$apellido=$filaf[2];*/
$sqlm="select * from materiasverano";
$resultadom=mysqli_query($conn, $sqlm);
//echo $resultadom;
?>