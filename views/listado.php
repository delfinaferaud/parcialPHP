<?php
require_once __DIR__ . '/../classes/Libro.php';
$libros = (new Libro)->todas();
?>
<section>
    <div class="mt-4 container-fluid">

        <div>
            <h2><tm1-ui-dbr-image tm1-instance="Instance Name" tm1-cube="Cube Name"
                    tm1-elements='Comma separated element list' ng-model="model">
                </tm1-ui-dbr-image></h2>
            <p class="news-lead">Qué está pasando.</p>
        </div>

        <div class="news-list row row-cols-1 row-cols-md-2 row-cols-xl-2 row-cols-xxl-3">
            <?php
            foreach ($libros as $libro):
                ?>
                <div class="d-flex">

                    <div class="card mb-3">
                        <div class="row g-0 h-100">
                            <div class="col-md-4 d-flex align-items-stretch">
                                <div class="w-100 d-flex">
                                    <picture class="news-item_imagen">
                                        <source srcset="<?= 'img/' . $libro->img; ?>" media="all and (max-width: 46.875em)">
                                        <img src="<?= $libro->img; ?>" alt="<?= $libro->titulo; ?>"
                                            class="img-fluid rounded-start w-100">
                                    </picture>
                                </div>
                            </div>
                            <div class="col-md-8 d-flex">
                                <div class="card-body w-100">
                                    <span class="card-title"><?= $libro->titulo; ?> - </span>
                                    <span class="card-subtitle"><?= $libro->autor; ?></span>
                                    <p class="card-text mt-1">Género: <?= $libro->genero; ?></p>
                                    <button class="cart" type="button"
                                        onclick="window.location.href='index.php?seccion=detalle'">
                                        Ver más
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
            endforeach;
            ?>
        </div>
    </div>
    </div>
</section>