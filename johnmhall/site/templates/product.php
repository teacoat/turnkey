<?php snippet('header') ?>
<?php snippet('menu') ?>
<!-- <?php snippet('submenu') ?> -->

<section class="content product">

  <article>
  		<div class="productgallery">
  			<div class="gallerybigimage">
	  			<?php echo thumb($page->files()->find('main.jpg'), array('width' => 400, 'crop' => true)) ?>
  			</div>

  			<span class="productthumb current">
  				<?php echo thumb($page->files()->find('main.jpg'), array('width' => 400, 'crop' => true)) ?>
  			</span>

  			<?php foreach($page->images() as $image): ?>
  				<?php if($image->filename() != 'main.jpg'){ ?>
	  				<span class="productthumb">
	  					<?php echo thumb($image, array('width' => 400, 'crop' => true)) ?>
	  				</span>
  				<?php } ?>
  			<?php endforeach ?>
  		</div>
  		
  		<div class="productdetails">
	  		<h2><?php echo $page->title(); ?></h2>
	  		<p><?php echo $page->description(); ?></p>
	  		<!-- <span>$<?php echo $page->price(); ?></span> -->
	  	</div>
  </article>

</section>

<?php snippet('footer') ?>

<script type="text/javascript">

	$(document).ready(function(){
		$('.productthumb').click(function(){
			$('.gallerybigimage img').attr('src', $(this).children('img').attr('src'));
			$('.current').removeClass('current');
			$(this).addClass('current');
		})
	});

</script>