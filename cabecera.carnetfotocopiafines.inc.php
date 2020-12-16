<?php
$variablematerias = $_SESSION["materiamonto"];
$cuenta = $_SESSION["cuentabancarias"];
$montoaporte=$cuenta*3;
$ci=$_SESSION["ci"];
$sql="insert into depositobancario values ($ci, $montoaporte, $cuenta);";
echo $sql;
?>