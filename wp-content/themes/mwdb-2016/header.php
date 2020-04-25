<!doctype html>
<html>

<?php // head ?>
<?php require('partials/head.php'); ?>

<?php

  $imagePath = get_template_directory_uri() . "/images";

?>

<body <?php body_class('mellon-winslow'); ?>>


	<?php include('partials/icons.php'); ?>

<?php //----------------------------------------- ?>


<header class='container header' rel='header'>
<div class='inner-w'>

	<a href='<?php bloginfo('siteurl'); ?>' class='image-w logo'>
		<img src='<?php echo $imagePath; ?>/logo.png' alt=''>
	</a>

  <nav class='main-menu'>
    <?php include('partials/menu.php'); ?>
  </nav>

</div>
</header>


<div class='loading' rel='size-loading'><div class='spinner'></div></div>