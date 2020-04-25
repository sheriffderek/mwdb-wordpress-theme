
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


  <ul class='project-list' rel='x'>

    <?php while ( $purveyor_query->have_posts() ) {
      $purveyor_query->the_post();  global $post; // for slug
      // ================================== 
      ?>



      <li class='project' id='<?php echo $post->post_name; ?>' rel='x'>
        <a href='<?php the_permalink(); ?>' rel='x'>
          <figure class='image-w' rel='x'>
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

<? }

// restore original post data
wp_reset_postdata();
// =========================================
?>