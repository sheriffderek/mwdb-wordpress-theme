<?php
// Silence is golden?
?>


<?php get_header(); ?>
<!-- ====================================== -->


	<?php 
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post(); ?>

			<?php // echo get_the_title(); ?>

		<?php } // end while
	} // end if
	?>


<!-- ====================================== -->
<?php get_footer(); ?>