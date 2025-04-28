<?php
require_once __DIR__ . '/../classes/Noticia.php';
$id = $_GET['id'];
$noticia = (new Noticia)->porId($id);

if($noticia):
?>
    <article class="news-item">
        <div class="news-item_content card-body">
            <h1><?= $noticia->titulo; ?></h1>
            <p><?= $noticia->sinopsis; ?></p>
        </div>
        <picture class="news-item_imagen">
            <source srcset="<?= 'imgs/big-' . $noticia->imagen; ?>" media="all and (min-width: 46.875em)">
            <img src="<?= 'imgs/' . $noticia->imagen; ?>" alt="<?= $noticia->imagen_descripcion; ?>">
        </picture>

        <div><?= $noticia->cuerpo;?></div>
    </article>
<?php
else:
/*?>
    <h1>No exista la noticia indicada</h1>
<?php*/
    require_once __DIR__ . '/404.php';
endif;
?>