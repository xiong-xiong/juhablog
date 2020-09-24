<article>
    <a class="xiong-articlebox" href="<?php the_permalink();?>">
        <header>
            <h3><?php the_title( );?></h3>
           
            <p>Originally built: <em><?php echo get_the_date('j.n.Y'); ?> </em></p>
            <p><?php the_excerpt();?></p>
        
        </header>

    </a>
</article>