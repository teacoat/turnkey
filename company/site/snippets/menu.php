<nav class="menu">
  <div class="navinner">
    <?php foreach($pages->visible() AS $p): ?>
    <span class="navitem">
    	<a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>">
    		<?php echo html($p->title()) ?>
    	</a>
    </span>
    <span class="divider">&nbsp;/&nbsp;</span>
    <?php endforeach ?>
  </div>
</nav>