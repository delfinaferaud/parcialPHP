<?php

$listaRutas=[ 
    'home'=> [
    'titulo' => 'Página principal',
    ],
    'listado' => [
    'titulo' => 'Libros',
    ],
    'detalle' => [
    'titulo' => 'Información del libro',
    ],
    'contacto' => [
    'titulo' => 'Contacto',
    ],
    '404' => [
    'titulo' => 'Página no encontrada',
    ],
];
    

$seccion = $_GET['seccion'] ?? 'home';

if(!isset($listaRutas[$seccion])) {
$seccion = '404';
}

$rutaOpciones = $listaRutas[$seccion];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" href="favicon.ico" sizes="any"> -->
    <!-- <link rel="icon" href="favicon.svg" type="image/svg+xml"> -->
    <!-- <link rel="apple-touch-icon" href="favicon-ios.png"> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC"
      crossorigin="anonymous"
    />
    <title><?= $rutaOpciones['titulo'];?> :: Tienda de libros</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="layout">
        <header class="main-header">
            <p class="brand">Tienda de libros</p>
            <p>Conocé los libros destacados del último año</p>
        </header>
        <nav class="main-nav">
            <div class="container-fixed">
                <ul>
                    <li><a href="index.php?seccion=home">Home</a></li>
                    <li><a href="index.php?seccion=listado">Libros</a></li>
                    <li><a href="index.php?seccion=contacto">Contacto</a></li>
                </ul>
            </div>
        </nav>
        <main class="main-content">
            <?php
        require __DIR__ . '/views/' . $seccion . '.php';

        // Por ejemplo, se arma:
        // require_once __DIR__ . '/views/home.php';
        // require_once __DIR__ . '/views/noticias.php';
        // require_once __DIR__ . '/views/iniciar-sesion.php';
        // require_once __DIR__ . '/views/registrarse.php';
        ?>
        </main>
        <footer class="main-footer">
            <p>&copy; Da Vinci - 2025</p>
        </footer>
    </div>
</body>

</html>