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
<h1>Nombre Usuario:</h1><br>
<h1><?php $nombreusu=$_SESSION["idusuario"];
echo $nombreusu;?></h1>
</a>
</div> 
</div>
</header>
<main class="main">
<div class="usuario-con">
<h2>Introduzca número de Carnet</h2>
<label for="Cuantas Materias">carnet: </label><br>
<input type="text" name="carnet"><br>
<input type="submit" name="Siguiente" value="Siguiente">
</div>
</main>
</body>
</html>