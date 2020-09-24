<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
            <article class="xiong-single-article">
                <div class="xiong-article-wrapper">
                  <header>
                    <h2><?php the_title( );?></h2>
                    <strong><?php the_field('author');?></strong>
                    <hr>
                    <?php get_template_part( 'templates/meta'); ?>
                    
                  </header>
                  <content>
                    <p><?php the_content( );?></p>
                    <p>
                    <?php 
                    if (has_category('books')){
                      echo "
                    
                      <h3>My opinion</h3>";}?>
                      
                      <?php the_field('opinion');?>
                    </p>
                    <p>
                    <?php 
                    if (has_category('books')){
                      echo "
                      <h3>For who?</h3>";}?>
                      <?php the_field('who');?>
                      
                    </p>
                   
                  </content>
                </div>
            </article>
        
      </div><!--/col8 -->
      <div class="col-md-4">
        <aside class="xiong-post-sidebar">
          
            <img src="<?php the_field('cover');?>" class="xiong-coverphoto">

            <hr>
             <?php 
                    if (has_category('books')){

              echo '<h3 class="rounded">Top books right now</h3>
              <ol class="topbooks">';
                
                global $post;
                $args = array( 'tag'=> 'topbooks', 'orderby' => 'meta_value_num', 'meta_key' => 'top_books_order', 'order' => 'ASC', 'posts_per_page' => 5 );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : 
                  setup_postdata( $post ); 
                 echo '<li>
                    <a href="'; the_permalink(); echo'">
                       <h4>'; the_title( ); echo'</h4><em>by';  the_field('author'); echo'</em>';
                        the_post_thumbnail( );
                   echo '</a>
                  </li>';
                endforeach;
                wp_reset_postdata(); 
              echo '</ol>';
              } else {
              ?>

              <?php } ?>
        </aside>
      </div><!--/col4-->
    </div><!--/row -->
  </div><!--/container -->
</section>

<?php endwhile; endif; ?>

<?php get_footer();?>