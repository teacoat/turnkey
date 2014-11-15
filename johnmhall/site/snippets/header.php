<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>

  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">

  <link href='http://fonts.googleapis.com/css?family=Tinos:400italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

  <?php echo css('assets/styles/reset.css') ?>
  <?php echo css('assets/styles/styles.css') ?>

</head>

<body>

  <header>
    <h1>
    	<a href="<?php echo url() ?>">
    		John M. Hall
    		<!-- <img src="<?php echo url() ?>/assets/images/logo.jpg"> -->
    	</a>
    </h1>
  	<h2>The House Of Quality Linens</h2>