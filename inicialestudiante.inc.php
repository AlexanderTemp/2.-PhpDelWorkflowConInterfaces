<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="estilosindex.css">
</head>
<body>
<header class="sitio-header inicio">
<div class="contenedor contenido-header">
<div class="barra">
<a href="/index.html">
<h1>Nombre Usuario: </h1>
<h1><?php $nombreusu=$_SESSION["idusuario"];
echo $nombreusu;?></h1>
</a>
</div> 
</div>
</header>
<main class="main">

<div class="usuario-con">
<h2>Materias Habilitadas para Inscripción</h2>
<table class="tabla-notasusu">
<tr>
<th><h2>Sigla Materia</h2></th>
<th><h2>Descripción</h2></th>
</tr>
<?php
while($tablamat=$resultadom->fetch_assoc()){
echo "<tr>";
$siglamat=$tablamat['siglamat'];
$materiaa=$tablamat['nombremateria'];
echo "<td><h3>$siglamat</h3></td>";
echo "<td><h3>$materiaa</h3></td>";         
echo "</tr>";
}
?>
</table>
</div>
</main>
</body>
</html>