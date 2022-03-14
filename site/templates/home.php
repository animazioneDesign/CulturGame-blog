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
    </div> <?php foreach($site->page('blog')->children()->listed()->flip() as $article):?>
       
    <div class="container">

   
        <div  class="a">
            <?= $article->author()->html()  ?> 
        
        </div>
        
        <div class="b">
        <article>
            <p><?= $article->text()->excerpt(300) ?></p>
            <a href="<?= $article->url() ?>">Continua a leggere…</a>
        </article>
        </div>

        <div class="c"> 
        <?php if($image = $article->image()): ?>
        <img src="<?= $image->url() ?>"  width='400' height='auto'>
        <?php endif ?>
        </div>

 
</div>

<?php endforeach ?>
<?php snippet('footer') ?>