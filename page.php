<?php get_header(); ?>



    <?php while ( have_posts() ) : the_post(); ?>
      <section>        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <h2 class="post-title"><?php the_title(); ?></h2>
          <?php if ( has_post_thumbnail() ) { the_post_thumbnail('large'); } ?>
          <?php the_content(); ?>
          
          <?php edit_post_link('edit', ' <small class="edit">', '</small>'); ?>
          
        </article>
      </section>
    <?php endwhile; ?>



<?php get_footer(); ?>