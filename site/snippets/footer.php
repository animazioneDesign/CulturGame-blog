</body>
<div class="footer">
  <p>Footer</p>
  <?php
$image =  $page->logo1()->toFiles();
  ?>
  <img src="<?= $image->url() ?>" alt="">
<?php   ?>
</div>