<?php
require_once __DIR__ . '/../classes/Libro.php';
$id = $_GET['id'];
$libro = (new Libro)->obtenerPorId($id);

if ($libro):
    ?>

    <article class="container mt-5">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-s-12 col-lg-3 text-center mb-4">
                <img src="<?= $libro->img; ?>" alt="<?= $libro->titulo; ?>" class="img-fluid rounded">
            </div>
            <div class="col-md-8 col-xs-12 col-s-12 col-lg-9 mb-4 fs-5">
                <h2 class=" fs-1 fw-bold"><?= $libro->titulo; ?></h2>
                <h3 class="mb-4 fw-medium"><?= $libro->autor; ?></h3>
                <p class=""><?= $libro->descripcion; ?></p>
                <p class="fw-light">Género: <?= $libro->genero; ?></p>
                <p class="fw-light">Año de publicación: <?= $libro->anio; ?></p>

                <button class="cart" type="button" onclick="window.location.href='index.php?seccion=listado'">
                    Volver al listado
                </button>
            </div>
        </div>
    </article>
    <?php
else:
    require_once __DIR__ . '/404.php';
endif;
?>