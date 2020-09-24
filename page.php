<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
            <article class="xiong-single-article">
                <?php the_post_thumbnail('banner' );?>
                <div class="xiong-article-wrapper">
                  <header>
                    <h3><?php the_title( );?></h3>
                  </header>
                  <content>

                    <p><?php the_content( );?></p>
                    
                  </content>
                </div>
            </article>
        
      </div><!--/col8 -->
      <div class="col-md-4">
        <aside class="xiong-front-sidebar">
          <nav class="xiong-sidebar-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu', 'container_class' => 'sidebar-nav', 'container' => 'nav' )); ?> 
          </nav>
        </aside>
      </div><!--/col4-->
    </div><!--/row -->
  </div><!--/container -->
</section>

<?php endwhile; endif; ?>

<?php get_footer();?>
      
     