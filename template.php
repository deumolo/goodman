<?php
/*
Template Name: Nombre
*/
?>

<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
    <!-- CONTENIDO -->

    <?php endwhile; ?>  
    <?php else : ?>
        <article id="post-not-found">
            <header>
              <h1><?php _e("Not Found", "bonestheme"); ?></h1>
            </header>
            <section class="post_content">
              <p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
            </section>
            <footer>
            </footer>
        </article>
    <?php endif; ?>      
          
<?php get_footer(); ?>