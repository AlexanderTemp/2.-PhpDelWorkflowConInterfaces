<?php
$cuantasMaterias=$_GET["materia"];
$cuentabancaria=$_GET["cuentabancaria"];
$montoaporte=$cuantasMaterias*3;
$ci=$_SESSION["ci"];
$sqll="insert into depositobancario values ($ci, $montoaporte, $cuentabancaria);";
$cf='F1';
$cp='P3';
header("Location: flujo.php?cf=$cf&cp=$cp");
?>