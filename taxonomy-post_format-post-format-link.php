<?php get_header(); ?>


    <h2>Links</h2>
    
    <ul>
      <?php 
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $the_query = new WP_Query( 'post_format=post-format-link&posts_per_page=1000&paged=' . $paged );
      while ( $the_query->have_posts() ) : $the_query->the_post();
      // $do_not_duplicate = $post->ID; ?>
        <li><a target="_blank" href="<?php echo get_link_url(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
    </ul>

    <nav id="pagi">
      <?php previous_posts_link('Previous'); ?>
      <?php next_posts_link('Next', $the_query->max_num_pages); ?>
    </nav>

    <?php wp_reset_postdata() ?>

<?php get_footer(); ?>