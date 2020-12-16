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
<h2>¿Cuántas Materias tomará este Verano?</h2>
<form action="footer.mondodeposito.inc.php" method="GET"></form>
<label for="Cuantas Materias">Numero de Materias: </label><br>
<input type="text" name="materia"><br>
<label for="contra">Numero de Cuenta Bancaria:  </label><br>
<input type="text" name="cuentabancaria"><br>
<input type="submit" name="Siguiente" value="Siguiente">
</form>
</div>
</main>
</body>
</html>