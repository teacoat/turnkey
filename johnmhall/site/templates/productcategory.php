<?php snippet('header') ?>
<?php snippet('menu') ?>
<!-- <?php snippet('submenu') ?> -->

<section class="content products">

  <article>

	  			<?php foreach($page->children() as $product): ?>
		  			<a class="productwrapper" href="<?php echo $product->url() ?>">
		  		  		<?php echo thumb($product->files()->find('main.jpg'), array('width' => 170, 'crop' => true)) ?>
		  		  	</a>
		  		<?php endforeach ?>
	  		
	  		</div>
  		
  </article>

</section>

<?php snippet('footer') ?>