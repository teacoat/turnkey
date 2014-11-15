<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article class="projectcontent">
  	<h1><?php echo $page->title() ?></h1>
  	<a class="url" href="http://<?php echo $page->link() ?>"><?php echo $page->link() ?></a>
  	
  	<div id="text">
	    <?php echo kirbytext($page->text()) ?>
	</div>

	<div id="gallery">
		  	<?php foreach($page->images() as $image): ?>
				<a href="<?php echo $image->url() ?>" rel="shadowbox[gallery]">
					<?php echo thumb($image, array('width' => 400)); ?>
				</a><br>
			<?php endforeach ?>
	</div>

  </article>

</section>

<?php snippet('footer') ?>