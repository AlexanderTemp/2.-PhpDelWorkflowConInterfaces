<?php
//session_start();
include "connec.inc.php";
if(! empty( $_GET['materia'] ))
{
   session_start();
   $_SESSION["materiamonto"]=$_GET["materia"];
   $_SESSION["cuentabancarias"]=$_GET["cuentabancaria"]; 
   $cf="F1";
   $cp="P3"; 
   header("Location: flujo.php?cf=$cf&cp=$cp");
}


$codflujo=$_GET["codflujo"];
$codproceso=$_GET["codproceso"];
$pantalla=$_GET["pantalla"];
$pantalla="controlador.".$pantalla;
include $pantalla;
if (isset($_GET["Siguiente"]))
{
$sql ="select * from flujo ";
$sql.="where codflujo='$codflujo' ";
$sql.="and codproceso='$codproceso'";
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_row($resultado);
$cf=$fila[0];
$cp=$fila[2];
}
if (isset($_GET["Anterior"]))
{
$sql ="select * from flujo ";
$sql.="where codflujo='$codflujo' ";
$sql.="and codprocesosiguiente='$codproceso'";	
$resultado = mysqli_query($conn, $sql);
$fila = mysqli_fetch_row($resultado);
$cf=$fila[0];
$cp=$fila[1];
}

header("Location: flujo.php?cf=$cf&cp=$cp");