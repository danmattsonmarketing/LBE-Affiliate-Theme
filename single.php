<?php get_header(); ?>

<!-- INDEX -->
  <div class="container">
    <div class="main-pad">
      <section>

        <?php if ( have_posts() ) : 
          // Start the loop.
          while ( have_posts() ) : the_post();
            ?>
        
            <div class="post">
              <h1><strong><?php the_title(); ?></strong></h1>
              <p><?php the_content(); ?></p>
              <div class="clearfix"></div>

              <?php echo do_shortcode('[related_posts]'); ?>
              <div class="clearfix"></div>
            </div>

            <?php
          // End the loop.
          endwhile;
        endif;
        ?>

        

        <?php dynamic_sidebar( 'womness-homepage-bottom-sidebar' ); ?> 

      </section>
      
      <aside id="sidebar">
        <?php dynamic_sidebar( 'womness-post-sidebar' ); ?> 
      </aside>

      <div class="clearfix"></div>

<?php get_footer(); ?>