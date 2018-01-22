<?php get_header(); ?>

<!-- INDEX -->
  <div class="container">
    <div class="main-pad">

      <section>
        <?php 
        if (is_category()) {
          ?>
          <h1><?php single_cat_title(); ?></h1>
          <?php
        }
        
        if ( have_posts() ) : 
          // Start the loop.
          while ( have_posts() ) : the_post();
            ?>
        
            <div id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

              <?php
              $block_class = '';

              if (has_post_thumbnail()) { 
                ?>
                <a href="<?php echo get_permalink(); ?>" class="post-content-thumb"><?php the_post_thumbnail( 'medium', array( 'class' => 'imgresponsive' )); ?></a>
                <?php
                $block_class = 'has_thumb';
              } 
              ?>

              <div class="post-content-block <?php echo $block_class; ?>">
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?>
                <a href="<?php echo get_permalink(); ?>">Read more</a></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <?php
          // End the loop.
          endwhile;
        endif;
        ?>

        <?php
        if (is_front_page()) {
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          if ($paged == 1) {

            $value = get_option( 'womness_pagination_home', '' );
            if ($value == 'yes') {
              ?>
              <div class="pagination-links">
                <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
                <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
              </div>
              <?php
            }
          }
          else {
            ?>
            <div class="pagination-links">
              <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
              <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
            </div>
            <?php
          }
        }
        else {
          ?>
          <div class="pagination-links">
            <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
            <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
          </div>
          <?php
        }
        ?>

        <?php dynamic_sidebar( 'womness-homepage-bottom-sidebar' ); ?> 
      </section>

      <aside id="sidebar">
        <?php dynamic_sidebar( 'womness-homepage-sidebar' ); ?> 
      </aside>

      <div class="clearfix"></div>

<?php get_footer(); ?>