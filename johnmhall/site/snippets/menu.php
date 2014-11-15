	<nav class="menu">

	    <?php foreach($pages->visible() AS $p): ?>
	    <span class="divider">&nbsp;&#8226;&nbsp;</span>
	    <span>
	    	<a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>">
		    	<?php echo html($p->title()) ?>
		    </a>
		</span>
	    <?php endforeach ?>

	</nav>

</header>