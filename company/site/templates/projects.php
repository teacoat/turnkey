<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article class="projects">
  	<?php 
  		$projects = $pages->find('projects')
  							->children()
  							->visible();
  	?>
  	<?php foreach($projects as $project): ?>
  		<a class="projectwrapper" href="<?php echo $project->url() ?>">
  			<h1><?php echo $project->title() ?></h1>
  			<span class="url"><?php echo $project->link() ?></span>
        <?php 
          $image = $project->images()->first();
          echo thumb($image, array('width' => 300));
        ?>
  		</a>
  		
	<?php endforeach ?>  
  </article>

</section>

<?php snippet('footer') ?>