<?php
/*
	Template name: Under construction
*/

	$imagePath = get_template_directory_uri() . "/images";
?>


<?php get_header(); ?>
<!-- ====================================== -->


 	<div class='center-center'>

		<div class='image-w logo' style='max-width: 300px;'>
			<img src='<?php echo $imagePath; ?>/logo.png' alt=''>
			<h1 class='visually-hidden' style='width: 0px; height: 0px; overflow: hidden;'>
				Mellon Winslow Design + Build
			</h1>
			<a class='contact-us' href='mailto:info@mellonwinslowdb.com' target='email'>
				Contact
			</a>
		</div>

		<div class='text-w'>

			<?php if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>
						
						<?php the_content(); ?>

				<?php }
			} ?>



		</div>

	</div>


<!-- ====================================== -->
<?php get_footer(); ?>
