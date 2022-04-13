<?php snippet('head') ?>
 
<!-- <script src="../assets/js/sketch.js"></script> -->
<div id="banner">
    <div class="main-title-container-article">
        <div class="main-title-article">      
                <span>
                    <div class="arrow">
                        <a href="<?= url('home') ?>">
                            <img src="<?= asset('assets/css/img/Arrow2.svg')->url();  ?>" alt="Link to the full article page" width="100" height="auto">
                </span></a>
        </div>
                <h1>
                    <!-- titolo articolo -->
                    <?= $page->title()->html() ?>
                </h1>
        
                <h2>
                    <!-- autori -->
                    <?= $page->author()->html()  ?> 
                </h2>


            </div>
    </div>
</div>
<div class="main-article">

<ul class="tags">
<?= $page->tag()->html()  ?> 
  </ul>

    <div class="article-a">

    </div> 
    <div class="article-b">
            <div class="titolo-aggiuntivo">
                <!-- titolo articolo -->
                <h9><?= $page->textsub() ?></h9>
            </div>
            <!-- immagine copertina -->
            <?php if($image = $page->image()): ?>
                <img src="<?= $image->url() ?>"  width='100%' height='auto'>
            <?php endif ?>
            <!-- testo principale -->
            <p><?= $page->text()->kirbytext() ?></p>

    </div> 
    <div class="article-c">
    
    </div> 
</div>   
<!-- <?php snippet('footer') ?> -->