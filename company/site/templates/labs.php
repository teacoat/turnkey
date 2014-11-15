<?php snippet('labheader') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article class="labs">
  	<?php echo kirbytext($page->text()) ?>

  	  	<?php 
  	  		$labprojects = $pages->find('labs')
  	  							->children()
  	  							->visible();
  	  	?>
  	  	<?php foreach($labprojects as $project): ?>
  	  		<a class="projectwrapper" href="<?php echo $project->url() ?>">
  	  			<h1><?php echo $project->title() ?></h1>
  	  			<span class="url"><?php echo $project->link() ?></span>
  	  			<?php 
              $image = $project->images()->first();
              echo thumb($image, array('width' => 300, 'height' => 170, 'crop' => true));
            ?>
  	  		</a>
  	  		
  		<?php endforeach ?>  
  </article>

</section>

<?php snippet('footer') ?>