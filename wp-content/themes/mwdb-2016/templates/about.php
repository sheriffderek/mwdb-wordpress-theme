<?php
/*
	Template name: About page
*/
?>


<?php

  $imagePath = get_template_directory_uri() . "/images";

?>

<?php get_header(); ?>
<!-- ====================================== -->

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class='container about content' rel='about' style='opacity: 0;'>
<div class='inner-w'>

  <h1>About</h1>

    <div class='text-w'>
      <?php the_content(); ?>

      <a class='button' href='mailto:info@mellonwinslowdb.com' target='_email'>Contact us</a>
    </div>

</div>
</section>


<section class='container fluff-w' style='background-image: url(<?php the_post_thumbnail_url(); ?>);' rel='fluff'>
<div class='inner-w'>

  <div class='image-w fluff' >


  </div>

</div>
</section>


<?php endwhile; endif; // end if ?>

<!-- ====================================== -->
<?php get_footer(); ?>