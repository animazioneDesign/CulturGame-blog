<?php snippet('head') ?>
 


 
 
    <div class="content">   
    <div class="main-title">
                <h1>
                    <?= $page->Titolo()->html() ?>
                </h1>
                <h2>
                    <?= $page->Sottotitolo()->html() ?>
                </h2>
            </div>
        <div class="text">
        
            <p >
            <?= $page->Testo()->html() ?>
            </p>
           
        </div> 
        <div class="line"></div>
        <!-- ->flip() -->
        <?php foreach($site->page('blog')->children()->listed()->sortBy('date', 'desc') as $article):?>
            
       
        <div class="container">

   
        <div  class="a">
        <?php if($image = $article->image()): ?>
            
        <img class="image-home" src="<?= $image->url() ?>"  width='390' height='auto'>
        <?php endif ?>

            <!-- <?= $article->author()->html()?>  -->
        </div>
        
        <div class="b">
        <article>
        
        <h3 class="title-article">
            
      

        <a href="<?= $article->url() ?>">  <?= $article->title()?></h3></a>

            <p><?= $article->text()->excerpt(350) ?></p>
            <a href="<?= $article->url() ?>">Continua a leggere</a>
            
            
          

         <span>
            <img src="<?= asset('assets/css/img/Arrow.svg')->url();  ?>" alt="Link to the full article page" width="20" height="10">
        </span>
        </br>
        <h5 class="home-date"><?= $article->Date('d.m.Y')->html()?></h5>
        </article>
        </div>

        <div class="c"> 

    </div>
</div>
<?php endforeach ?>

<!-- <?php snippet('footer') ?> -->


