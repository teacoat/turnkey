<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article id="homecontent">
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<?php snippet('footer') ?>