<?php
require_once __DIR__ . '/../classes/Libro.php';
$libros = (new Libro)->obtenerLibros();
?>
<section class="mt-5">
    <h2 class="mb-5 fs-1 fw-bold text-center">Libros seleccionados</h2>
    <div class="container-fluid mt-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4">
            <?php
            foreach ($libros as $libro):
                ?>
                <div class="d-flex">

                    <div class="card">
                        <article class="row g-0 h-100">
                            <div class="col-md-4 d-flex align-items-stretch">
                                <div class="">
                                    <img src="<?= $libro->img; ?>" alt="<?= $libro->titulo; ?>" class="img-fluid rounded">
                                </div>
                            </div>
                            <div class="col-md-8 d-flex">
                                <div class="card-body w-100">
                                    <h2 class="card-title"><?= $libro->titulo; ?></h2>
                                    <span class="card-subtitle"><?= $libro->autor; ?></span>
                                    <p class="card-text mt-1">Género: <?= $libro->genero; ?></p>
                                    <button class="cart" type="button"
                                        onclick="window.location.href='index.php?seccion=detalle&id=<?= $libro->id; ?>'">
                                        Ver más
                                    </button>
                                </div>
                            </div>

                        </article>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
</section>