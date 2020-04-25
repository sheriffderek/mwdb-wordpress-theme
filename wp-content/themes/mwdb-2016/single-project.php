<?php

?>


<?php get_header(); ?>
<!-- ====================================== -->



<section class='container spotlight content' style='opacity: 0;'>
<div class='inner-w'>
	
	<ul class='detail-list'>
		<li class='detail'>
			<div class='image-w'>
				<?php the_post_thumbnail(); ?>
			</div>
		</li>
		<li class='detail info'>
			<div class='text-w'>
				<h1><?php the_field('project_title'); ?></h1>
				
				<?php if ( get_field('tag_line') ) { ?>
					<h2><?php the_field('tag_line'); ?></h2>
				<?php } ?>
				
				<?php if ( get_field('project_short_description') ) { ?>
					<div class='description'>
						<?php the_field('project_short_description'); ?>
					</div>
				<?php } ?>

				<div class='credits'>
					<?php if ( get_field('project_designer') ) { ?>
						<h3>Designer: <?php the_field('project_designer'); ?></h3>
					<?php } ?>
					<?php if ( get_field('project_photography') ) { ?>
						<h4>Photographs: <?php the_field('project_photography'); ?></h4>
					<?php } ?>
				</div>

			</div>
		</li>


	<?php if ( have_rows('project_detail') ):

		while ( have_rows('project_detail') ) : the_row(); ?>

<?php // ==================================================== ?>


		<li class='detail'>
			<div class='image-w'>
				<img src="<?php the_sub_field('detail_image'); ?>" alt=''>
			</div>
		</li>


<?php // ==================================================== ?>

		<?php endwhile;

			else :

			// no rows found

	endif; ?>


	<?php //the_field('end_cap'); ?>

		<li class='detail other-projects'>
			<div class='text-w'>
			<h2>Other projects:</h2>

			
			<?php include('project-titles-loop.php'); ?>


			</div>
		</li>

	</ul>

</div>
</section>



<!-- ====================================== -->
<?php get_footer(); ?>
