
PROJECT LOOP

<?php
// =========================================
// Define the rules/arguments
$purveyor_args = array(
  'post_type'     => 'project',
  'showposts'     => '-1',
  'order'         => 'DESC'
);

// The Query
$purveyor_query = new WP_Query($purveyor_args);

// The Loop
if ( $purveyor_query->have_posts() ) { ?>
<?php //======================================== ?>


  <ul class='project-list'>

    <?php while ( $purveyor_query->have_posts() ) {
      $purveyor_query->the_post();
      // ================================== 
      ?>



      <li class='project'>
        <a href='<?php the_permalink(); ?>'>
          <figure class='image-w'>
            <?php the_post_thumbnail(); ?>
          </figure>
          <span class='text-w'>
            <h2 class='title'><?php the_field('project_title'); ?></h2>
          </span>
        </a>
      </li>



      <?php 
      // ==================================
    } ?>

  </ul>


<?php //======================================== ?>
<?php } else { ?>

  <?php // what happens if there are no posts? ?>

<? }  // restore original post data
        wp_reset_postdata();
// =========================================
?>