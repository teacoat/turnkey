<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content">

	<div id="team">
		<h1>The Team</h1>

		<?php echo $page->text() ?>

		  	<?php 
		  		$members = $pages->find('team')->children()->visible();
		  	?>
		  	<?php foreach($members as $member): ?>
		  		<div class="memberwrapper">
		  			<?php echo kirbytext($member->image()) ?>
		  			<h1><?php echo $member->title() ?></h1>
		  			<h3><?php echo $member->role() ?></h3>
		  			<a href="http://<?php echo $member->link() ?>" class="url"><?php echo $member->link() ?></a>
		  			<span><?php echo $member->text() ?></span>
		  		</div>
			<?php endforeach ?>  

	</div>

</section>

<?php snippet('footer') ?>