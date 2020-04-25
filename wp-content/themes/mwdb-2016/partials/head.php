
<head>
	
	<?php // set charicter set ?>
	<meta charset='UTF-8'>

	<?php //  ?>
	<link rel='shortcut icon' href='<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico?v=2' />

	<?php // site title ?>
	<title><?php the_field('meta_site_title', 'option');?></title>

	<?php // site description ?>
	<meta name='description' content="<?php the_field('meta_site_description', 'option');?>">

	<?php // set viewport ?>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>

	<?php // pull in styles among other things ?>
	<?php wp_head(); ?>

	<?php // facebook open-graph ?>
	<?php include('facebook-opengraph.php'); ?>

	<?php //include('google-analytics.php'); ?>

</head>
