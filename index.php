<?php get_header(); ?>
      
      <section>

        <!-- <h2>Words</h2> -->
        <ul class="main-ul">
        <?php $my_query = new WP_Query( 'category_name=blog' );
        // print '<pre>'; 
        // print_r($my_query); 
        // print '</pre>';
        while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

          <?php if (get_post_format() == false): ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endif ?>
        <?php endwhile; ?>
        </ul>

        <!-- <p><a href="<?php echo esc_url( home_url( '/category/blog' ) ); ?>">more words</a></p> -->
                  
      </section>

      <!-- <section>

        <h2>Links</h2>
        <ul>
          <?php $my_query = new WP_Query( 'post_format=post-format-link' );
          while ( $my_query->have_posts() ) : $my_query->the_post();
          // $do_not_duplicate = $post->ID; ?>
            <li><a target="_blank" href="<?php echo get_link_url(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        </ul>

      </section> -->

<?php get_footer(); ?>