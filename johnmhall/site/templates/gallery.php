<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content gallery">
  <article>
  	<?php foreach($page->images() as $image): ?>
  		<a href="<?php echo $image->url() ?>" data-title="<?php echo $image->caption() ?>" data-lightbox="gallery">
  	  		<?php echo thumb($image, array('width' => 200, 'crop' => true)) ?>
  	  	</a>
  	<?php endforeach ?>
  </article>

</section>

<?php snippet('footer') ?>