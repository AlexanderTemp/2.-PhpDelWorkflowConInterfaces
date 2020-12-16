<?php
session_start();
include "connec.inc.php";
$codflujo=$_GET["cf"];
$codproceso=$_GET["cp"];
$sqle ="select * from flujo ";
$sqle.="where codflujo='$codflujo' ";
$sqle.="and codproceso='$codproceso'";
//echo $sqle;
$resultado = mysqli_query($conn, $sqle);
$fila = mysqli_fetch_row($resultado);
?>
<form action="controlador.php" method="GET" />
<?php
include "cabecera.".$fila[5];
//echo "cabecera.".$fila[5];
include $fila[5];
//echo $fila[5];
?>
<br/>
<input type="hidden" name="pantalla" value="<?php echo $fila[5];?>"/>
<input type="hidden" name="codflujo" value="<?php echo $fila[0];?>"/>
<input type="hidden" name="codproceso" value="<?php echo $fila[1];?>"/>
<input type="submit" name="Anterior" value="Anterior"/>
<input type="submit" name="Siguiente" value="Siguiente"/>
