<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookCloud</title>
    <script src="jquery-3.2.1.js"></script>
    <script src="script.js"></script>
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="jquery-3.2.1.js">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body class="body-categoria">
<?php include("./layouts/header.php"); ?>

<div class="fondo1">
<div class="wrap">
    <h1>Categorias</h1>
    <div class="store-wrapper">
        <div class="category_list">
            <a href="#" class="category_item" category="all">Todo</a>
            <a href="#" class="category_item" category="ciencia-ficcion">Ciencia Ficcion</a>
            <a href="#" class="category_item" category="terror">Terror</a>
            <a href="#" class="category_item" category="educativo">Educativo</a>
            <a href="#" class="category_item" category="drama">Drama</a>
            <a href="#" class="category_item" category="romantico">Romantico</a>
        </div>
        <section class="products-list">
            <div class="product-item" category="ciencia-ficcion">
                <img src="libros/libroc1.jpg" alt="" >
                <a href="#">The Arrivals</a>
            </div>
            <div class="product-item" category="ciencia-ficcion">
                <img src="libros/libroc2.jpg" alt="">
                <a href="#">Enceladus</a>
            </div>
            <div class="product-item" category="ciencia-ficcion">
                <img src="libros/libroc3.jpg" alt="" >
                <a href="#">Un Mundo Invertido</a>
            </div>
            <div class="product-item" category="ciencia-ficcion">
                <img src="libros/libroc4.jpg" alt="" >
                <a href="#">Viajeros De La Noche</a>
            </div>
            <div class="product-item" category="ciencia-ficcion">
                <img src="libros/libroc5.jpg" alt="" >
                <a href="#">Nieve En Marte</a>
            </div>
            <div class="product-item" category="terror">
                <img src="libros/librot1.jpg" alt="" >
                <a href="#">Dead Ends</a>
            </div>
            <div class="product-item" category="terror">
                <img src="libros/librot2.jpg" alt="" >
                <a href="#">Demonio de Libro</a>
            </div>
            <div class="product-item" category="terror">
                <img src="libros/librot4.jpg" alt="" >
                <a href="#">Cementerio Sin Lapidas Y Otras Historias</a>
            </div>
            <div class="product-item" category="terror">
                <img src="libros/librot5.jpg" alt="" >
                <a href="#">El Bazar De Los Malos Sueños</a>
            </div>
            <div class="product-item" category="terror">
                <img src="libros/librot6.jpg" alt="" >
                <a href="#">El Exorcista</a>
            </div>
            <div class="product-item" category="educativo">
                <img src="libros/libroed1.jpg" alt="" >
                <a href="#">Spicología Social</a>
            </div>
            <div class="product-item" category="educativo">
                <img src="libros/libroed2.jpg" alt="" >
                <a href="#">Lengua 6</a>
            </div>
            <div class="product-item" category="educativo">
                <img src="libros/libroed3.jpg" alt="" >
                <a href="#">Esencia</a>
            </div>
            <div class="product-item" category="educativo">
                <img src="libros/libroed4.jpg" alt="" >
                <a href="#">Retos Educativos Para El Siglo XXI</a>
            </div>
            <div class="product-item" category="educativo">
                <img src="libros/libroed5.jpg" alt="" >
                <a href="#">Politica E Ideología</a>
            </div>
            <div class="product-item" category="educativo">
                <img src="libros/libroed6.jpg" alt="" >
                <a href="#">Poesia De Los Números</a>
            </div>
        </section>
    </div>
</div>


<?php include("./layouts/footer.php"); ?>
</body>
</html>