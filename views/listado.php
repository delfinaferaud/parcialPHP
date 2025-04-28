<?php
require_once __DIR__ . '/../classes/Noticia.php';

// Traemos las noticias.
// Como ahora todas (obtenerNoticias) es un método de Noticia, necesitamos crear una
// instancia de la clase.
// $noticia = new Noticia;
// $noticias = $noticia->todas();
// Lo anterior lo podemos reducir a un solo paso.
$noticias = (new Noticia)->todas();
?>
<section class="news">
    <div>
        <h1>Noticias</h1>
        <p class="news-lead">Qué está pasando.</p>
    </div>
    <div class="news-list">
    <?php
    foreach($noticias as $noticia):
    ?>
        <div class="card">
            <article class="news-item">
                <div class="news-item_content card-body">
                    <a href="index.php?seccion=noticias-leer&id=<?= $noticia->noticia_id;?>">
                        <h2><?= $noticia->titulo;?></h2>
                    </a>
                    <p><?= $noticia->sinopsis;?></p>
                </div>
                <picture class="news-item_imagen">
                    <source srcset="<?= 'imgs/big-' . $noticia->imagen;?>" media="all and (min-width: 46.875em)">
                    <img src="<?= 'imgs/' . $noticia->imagen;?>" alt="<?= $noticia->imagen_descripcion;?>">
                </picture>
            </article>
        </div>
    <?php
    endforeach;
    ?>
</section>