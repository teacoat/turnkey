<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>

  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>

  <header id='header'>
  	<a href="<?php echo url() ?>">
      <div id="logo">
    		<h1>
    			
    				<!--<?php echo html($site->title()) ?>-->
    				TURN<span>KEY</span>
    			
    		</h1>

    		<span class="divider"></span>
    		
    		<div id="tagline">
    			your digital presence
    		</div>
    	</div>
    </a>
  </header>