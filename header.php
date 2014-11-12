<!DOCTYPE html>
<html lang="en-GB">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="DC.title" content="Prydonian Digital" />
<meta name="ICBM" content="51.4779645, 0.0142191" />
<meta name="geo.position" content="51.4779645, 0.0142191" />	
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>
<body <?php body_class(); ?>>

<header itemscope itemtype="http://schema.org/Organization">
	<h1><a itemprop="url" href="<?php bloginfo('url'); ?>"><div itemprop="name"><?php bloginfo('name'); ?></div></a></h1>
</header>

<div class="container">