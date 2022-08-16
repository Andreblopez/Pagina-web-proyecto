<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookCloud</title>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
<?php include("./layouts/header.php"); ?>
    <div class="contenedor">                
        
        <div class="inicio"></div>
        <h1 class="titulo">BookCloud</h1>
        <p class="subtitulo">Haz crecer a niveles inesperados tu intelecto e imaginación</p>          
        <section class="box">
          <ul class="minimenu">
              <li><a href="#">Novedades</a></li>
              <li><a href="#">Mas vendidos</a></li>
              <li><a href="#">Recomendados</a></li>
          </ul>
          <ul>
              <li class="foto"><img src="libros/libro3.jpg"></li>
              <li class="foto"><img src="libros/libro3.jpg"></li>
              <li class="foto"><img src="libros/libro3.jpg"></li>
              <li class="foto"><img src="libros/libro3.jpg"></li>
              <li class="foto"><img src="libros/libro3.jpg"></li>
              <li class="foto"><img src="libros/libro3.jpg"></li>
          </ul>
        </section>

</div>    
<?php include("./layouts/footer.php"); ?>
</body>
</html>