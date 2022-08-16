<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookCloud</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="jquery-3.2.1.js">
    <script src="jquery-3.2.1.js"></script>
    <script src="filtro.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://kit.fontawesome.com/608a310407.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <script>
        swal({
            title:"Elige una de las Sagas para ver informacion y todos sus libros",
            text:"Click devuelta a la opcion de Colecciones",
            icon:"success"});
    </script>
    <div class="contenedor">                
        <nav class="navegador">
                <div class="nav">
                  <ul class="menu">
                        <li><a href="index.php">Home</a></li>   
                        <li><a href="categorias.php">Categorias <i class="fas fa-sort-down"></i></a></li>
                        <div class="cart"><i class="material-icons">shopping_cart</i></div>
                        <div class="buscador"><i class="material-icons">search</i><input type="text" class="buscador_txt" placeholder="Buscar productos aqui.." required></div>
                        <div class="inline-block text-center justify-center text-white">
                            <a href="#" class="block p-0" id="colect-nav"><i class="fas fa-bars"></i> Colecciones</a>
                            <div class="category_list">
                                <ul class="list-nav inline-block hidden w-22 absolute z-50 left-0 right-0 bg-blue-800 text-left text-sm">
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" id="boton">Harry Potter</a></li>                                    
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" id="boton1" category="jt">Juegos De Tronos</a></li>
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" category="cd">Las Cronicas De Dune</a></li>
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" category="cs">Cazadores de Sombras</a></li>
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" category="sw">Star Wars</a></li>
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" category="tw">The Witcher</a></li>
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" category="jh">Juegos Del Hambre</a></li>
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" category="cb">La Cuidad Blanca</a></li>
                                    <li class="block p-5"><a class="category_items inline hover:bg-red-300 rounded p-6" href="#" category="pt">Pilares de la Tierra</a></li>
                                </ul>                                
                            </div>
                        </div>
                        <li><a href="cuenta.html">Mi cuenta</a></li>
                    </ul>
                </div>                
        </nav>
    <div class="fondo1">
        <div class="box_p">


            <!--PORTADA CON TITULO -->
            <div class="hp hidden" id="hp">
                <div class="portada w-full mx-auto bg-cover border-4 border-black text-center" style="background-image: url(/harry.jpg)">
                    <p class="mx-auto text-black capitalize text-4xl bg-white">Harry Potter</p>
                </div>
                <!--BIBLIOGRAFIA -->
                <div class="text-white text-center bg-black p-2 ">
                    <p>Los libros de Harry Potter componen la popular serie de novelas de fantasía escritas por J. K. Rowling y las películas de Warner Bros basadas en ellas. El último libro se divide en dos películas. El principal protagonista de las mismas es el joven mago Harry Potter.

                        Las novelas están escritas en tercera persona de un modo omnisciente limitado. J. K. Rowling muestra una habilidad para convencer de un modo lógico que existe un mundo mágico: lleno de magos, maldad y criaturas fantásticas. La Saga de Harry Potter ha sido comparada muchas veces con otras sagas similares (en la base de un mundo fantástico, mágico) en las que cabe destacar Las Crónicas de Narnia de C.S. Lewis (de la que cabe decir J. K. Rowling obtuvo cierta inspiración en la relación de cómo entrar a un mundo mágico: Armario (Narnia)-Andén 9 y 3/4 (Harry Potter); y la no menos conocida saga de El Señor de los Anillos de J.R.R. Tolkien.</p>
                </div>
                <!-- PERSONAJES IMPORTANTES--> 
                <h1 class="mx-auto text-center font-bold text-4xl mt-5 bg-black text-white">LIBROS</h1>
                <div class="cuadro p-5 bg-black w-full flex">
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/Harry/harry-portada.png);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/Harry/harry-portada2.png);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/Harry/harry-portada3.png);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/Harry/harry-portada4.png);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/Harry/harry-portada5.png);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/Harry/harry-portada6.png);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/Harry/harry-portada7.png);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/Harry/harry-portada8.png);"></div>
                </div>
            </div>
            
            <!--PORTADA CON TITULO -->
            <div class="jt hidden" id="jt">
                <div class="portada w-full mx-auto bg-cover border-4 border-black text-center" style="background-image: url(/libros/JT/fondo1.jpg)">
                    <p class="mx-auto text-black capitalize text-4xl bg-white">Juegos De Tronos</p>
                </div>
                <!--BIBLIOGRAFIA -->
                <div class="text-white text-center bg-black p-2 ">
                    <p>Canción de Hielo y Fuego es una multipremiada serie de novelas de fantasía heroica escritas por el novelista y guionista estadounidense George R. R. Martin, su primer tomo fue publicado en 1996. Se sitúa en un mundo ficticio medieval llamado Poniente, pero también en un vasto continente oriental, conocido como Essos. Sus arcos argumentales giran principalmente en torno a las luchas políticas y guerras civiles ocasionadas en la carrera por acceder al Trono de Hierro.</p>
                </div>
                <!-- PERSONAJES IMPORTANTES--> 
                <h1 class="mx-auto text-center font-bold text-4xl mt-5 bg-black text-white">LIBROS</h1>
                <div class="cuadro p-5 bg-black w-full flex">
                
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/JT/1.jpg);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(/libros/JT/2.jpg);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(libros/JT/3.jpg);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(libros/JT/4.jpg);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(libros/JT/5.jpg);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(libros/JT/6.jpg);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(libros/JT/7.jpg);"></div>
                    <div class="harry bg-center bg-no-repeat" style="background-image: url(libros/JT/8.jpg);"></div>
                </div>
            </div>
            
        </div>
    </div>

    <?php include("./layouts/footer.php"); ?>


<script>
    const menuButton = document.querySelector('#colect-nav');

    menuButton.addEventListener('click', e  => {
        const menu = document.querySelector('.list-nav');
        
        menu.classList.toggle('hidden');
    });
</script>

<script>
    +function(){  
    const menuButton2 = document.querySelector('#boton');
    console.log('click')
    menuButton2.addEventListener('click', e  => {
        e.preventDefault();
        var menu = document.querySelector('.hp');

        menu.classList.toggle('hidden');
    });  }()
</script>

<script>
    +function(){  
    const menuButton2 = document.querySelector('#boton1');
    console.log('click')
    menuButton2.addEventListener('click', e  => {
        e.preventDefault();
        var menu = document.querySelector('.jt');

        menu.classList.toggle('hidden');
    });  }()
</script>


</body>