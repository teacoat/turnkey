<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content contact">

  <article>
    <div class="text">
	    <?php echo kirbytext($page->hours()) ?>
    	<?php snippet('map', array('address' => '43 Grand River Street, Paris, Ontario')) ?>
    </div>
    
    <?php snippet('contactform') ?>

    
  </article>

</section>

<?php snippet('footer') ?>