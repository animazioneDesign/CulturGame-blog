<?php snippet('head') ?>


<script src="assets/js/sketch.js"></script>
<div id="banner">
        <div class="main-title-container">
            <div class="main-title">
                <h1>
                    <?= $page->Titolo()->html() ?>
                </h1>
                <h2>
                    <?= $page->Sottotitolo()->html() ?>
                </h2>
            </div>
        </div>
</div>
<div class="containers"></div>
    <div class="content">   
        <div class="text">
        
            <p >
            <?= $page->Testo()->html() ?>
            </p>
           
        </div> 
        <div class="line"></div>
        <!-- ->flip() -->
        <?php foreach($site->page('blog')->children()->listed() as $article):?>
       
        <div class="container">

   
        <div  class="a">
            <?= $article->author()->html()  ?> 
        </div>
        
        <div class="b">
        <article>
        <h3><?= $article->title()  ?></h3> <h5><?= $article->Date('d.m.Y')->html()  ?></h5>
            <p><?= $article->text()->excerpt(200) ?></p>
            <a href="<?= $article->url() ?>">Continua a leggere</a>
            
          

            <span>
          <img src="<?= asset('assets/css/img/Arrow.svg')->url();  ?>" alt="Link to the full article page" width="20" height="10">
        </span>

        </article>
        </div>

        <div class="c"> 
        <?php if($image = $article->image()): ?>
        <img src="<?= $image->url() ?>"  width='350' height='auto'>
        <?php endif ?>
    </div>
</div>
<?php endforeach ?>

<!-- <?php snippet('footer') ?> -->


