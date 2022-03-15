<?php snippet('head') ?>
 
<script src="../assets/js/sketch.js"></script>
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
                    <?= $page->title()->html() ?>
                </h1>
        
                <h2>
                    <?= $page->author()->html()  ?> 
                </h2>
            </div>
    </div>
</div>
<div class="main-article">
    <div class="article-a">

    </div> 
    <div class="article-b">
            <div class="titolo-aggiuntivo">
                <h9><?= $page->textsub() ?></h9>
            </div>
            <?php if($image = $page->image()): ?>
                <img src="<?= $image->url() ?>"  width='100%' height='auto'>
            <?php endif ?>
            <p><?= $page->text() ?></p>

    </div> 
    <div class="article-c">
    
    </div> 
</div>   
<!-- <?php snippet('footer') ?> -->