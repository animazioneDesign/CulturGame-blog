<?php snippet('head') ?>
<div id='containers'class="containers"></div>
    <div class="content">   
        <div class="text">
            <h1>
                <?= $page->Titolo()->kirbytext() ?>
            </h1>
            <h2>
                <?= $page->Sottotitolo()->kirbytext() ?>
            </h2>
            <p >
            <?= $page->Testo()->kirbytext() ?>
            </p>
    </div>
    <div class="container">

    <?php foreach($site->page('blog')->children()->listed()->flip() as $article):?>
        
        <div  class="a">
            <?= $article->author()->html() ?> 
        </div>
        
        <div class="b">
        <article>
            <p><?= $article->text()->excerpt(300) ?></p>
            <a href="<?= $article->url() ?>">Continua a leggere…</a>
        </article>
        </div>

        <div class="c"> c</div>

    <?php endforeach ?>
</div>

<?php snippet('footer') ?>