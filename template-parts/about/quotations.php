<div id="quotations">
    <div class="main-column">
        <div class="carousel" data-slick='{"dots": true}'>
            <?php // loop through the rows of data
            if( have_rows('quotations') ): 
                while ( have_rows('quotations') ) : the_row(); ?>
                    <div class="slide">
                        <i class="fas fa-quote-right"></i>
                        <h3 class="quote"><?php echo get_sub_field('quote'); ?></h3>
                        <h4 class="author"><?php echo get_sub_field('author'); ?></h4>
                    </div>
            <?php endwhile; 
            endif; ?>
        </div>
    </div>
</div>