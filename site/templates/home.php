<?php snippet('head') ?>


<script src="assets/js/sketch.js"></script>
<div id="banner">
      <h4>CulturGame</h4>
    </div>
<div id='containers'class="containers"></div>
    <div class="content">   
        <div class="text">
            <!-- <h1>
                <?= $page->Titolo()->kirbytext() ?>
            </h1>
            <h2>
                <?= $page->Sottotitolo()->kirbytext() ?>
            </h2> -->
            <p >
            <?= $page->Testo()->kirbytext() ?>
            </p>

        </div> 
        <div class="line"></div>
        <?php foreach($site->page('blog')->children()->listed()->flip() as $article):?>
       
        <div class="container">

   
        <div  class="a">
            <?= $article->author()->html()  ?> 
        </div>
        
        <div class="b">
        <article>
        <h3><?= $article->title()->excerpt(600) ?></h3>
            <p><?= $article->text()->excerpt(600) ?></p>
            <a href="<?= $article->url() ?>">Continua a leggere</a>
        </article>
        </div>

        <div class="c"> 
        <?php if($image = $article->image()): ?>
        <img src="<?= $image->url() ?>"  width='300' height='auto'>
        <?php endif ?>
    </div>

 
</div>

<?php endforeach ?>
<?php snippet('footer') ?>