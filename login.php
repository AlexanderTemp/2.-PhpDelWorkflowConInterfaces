<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
include "connec.inc.php";
$log=$_GET['usuario'];
$cont=$_GET['contra'];
///con include puedo tener acceso a las variables de el otro archivo
$sql="select * from usuariosyadministrativos where idusuario='$log' and contra='$cont' ";
$res=mysqli_query($conn,$sql);
$fila=mysqli_fetch_row($res);
if(!empty($res) AND mysqli_num_rows($res) > 0){
session_start();
$_SESSION['idusuario']=$log;
$_SESSION['ci']=$fila[6];
$_SESSION['tiempoini']=date('Y-m-d H:i:s');
$_SESSION['rol']=$fila[4];
$rol = $fila[3];
if(strcmp($rol, "estudiante") == 0)
{
$sql1="select * from flujo where rol = '$rol'";
$resultado=mysqli_query($conn, $sql1);
$filas=mysqli_fetch_row($resultado);
$cf=$filas[0];
$cp=$filas[1];
$pantalla=$filas[5];
$_SESSION["pantalla"]=$filas[5];
header("Location: flujo.php?cf=$cf&cp=$cp");
}
if(strcmp($rol, "kardex") == 0)
{
$sql1="select * from flujo where rol = '$rol'";
$resultado=mysqli_query($conn, $sql1);
$filas=mysqli_fetch_row($resultado);
$cf=$filas[0];
$cp=$filas[1];
$pantalla=$filas[5];
$_SESSION["pantalla"]=$filas[5];
header("Location: flujo.php?cf=$cf&cp=$cp");
}
if(strcmp($rol, "cajera") == 0)
{
$sql1="select * from flujo where rol = '$rol'";
$resultado=mysqli_query($conn, $sql1);
$filas=mysqli_fetch_row($resultado);
$cf=$filas[0];
$cp=$filas[1];
$pantalla=$filas[5];
$_SESSION["pantalla"]=$filas[5];
header("Location: flujo.php?cf=$cf&cp=$cp");
}
//echo var_dump($_SESSION);
//header("location: usuario.php");
//echo 1;
}else{
echo "Usuario o Constraseña incorrecta";
}
///$extraccion = mysqli_fetch_array($res);
///print_r($res)ç
///print_r($extraccion)
?>
</body>
</html>