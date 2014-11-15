<?php snippet('header') ?>
<?php snippet('menu') ?>
<!--<?php snippet('submenu') ?> -->

<section class="content products">

  <article>

  	<?php foreach($page->children() as $category): ?>
  		<a href="<?php echo $category->url() ?>" class="productsection2">
  			<?php echo thumb($category->files()->find('main.jpg'), array('width' => 170, 'crop' => true)) ?>
	  		<h3><?php echo $category->title() ?></h3>
	  	</a>
  	<?php endforeach ?>
  		
  		<!--<?php foreach($page->children() as $category): ?>
  			
  			<div class="productsection">

	  			<h3><?php echo $category->title() ?></h3>

	  			<?php foreach($category->children() as $product): ?>
		  			<a class="productwrapper" href="<?php echo $product->url() ?>">
		  		  		<?php echo thumb($product->files()->find('main.jpg'), array('width' => 170, 'crop' => true)) ?>
		  		  	</a>
		  		<?php endforeach ?>
	  		
	  		</div>
  		
  		<?php endforeach ?>-->
  </article>

</section>

<?php snippet('footer') ?>