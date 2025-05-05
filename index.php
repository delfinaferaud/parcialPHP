<?php

$listaRutas = [
    'home' => [
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
    'procesar' => [
        'titulo' => 'Suscripcion',
    ],
];


$seccion = $_GET['seccion'] ?? 'home';

if (!isset($listaRutas[$seccion])) {
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous" />
    <title><?= $rutaOpciones['titulo']; ?> :: Tienda de libros</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <header>
        <nav class="navbar sticky-top navbar-expand-md text-center" data-bs-theme="dark">
            <div class="container">
                <div class="navbar-brand div-title d-flex justify-content-center align-items-center">
                    <h1>
                        <a href="index.php?seccion=home" class="text-decoration-none px-3">Libros</a>
                    </h1>
                </div>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#barraNavegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="barraNavegacion">

                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?seccion=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?seccion=listado">Libros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?seccion=contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <main class="main-content">
        <?php
        require __DIR__ . '/views/' . $seccion . '.php';
        ?>
    </main>
    <footer>
        <p class="mb-0">&copy; Da Vinci - 2025</p>
    </footer>
    </div>
</body>

</html>