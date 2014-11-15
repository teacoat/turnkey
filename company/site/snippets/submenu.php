<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; 

?>
<?php if($items && $items->count()): ?>
<nav class="submenu">
  <div class="navinner">
    <?php foreach($items AS $item): ?>
    <span class="navitem">
    	<a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>">
    		<?php echo html($item->title()) ?>
    	</a>
    </span>
    <span class="divider">&nbsp;/&nbsp;</span>
    <?php endforeach ?>            
  </div>
</nav>
<?php endif ?>
