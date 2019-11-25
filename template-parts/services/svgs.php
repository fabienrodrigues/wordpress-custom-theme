<div class="main-column">    
    <?php if( have_rows('block_text_svg') ):
        while ( have_rows('block_text_svg') ) : the_row(); ?>
            <div class="row">
                <?php $textSide = get_sub_field('text-left-field'); ?>
                
                <div class="col-12 col-md-6 d-flex align-items-center" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="0">
                    <div class="svg-wrapper">
                        <?php the_sub_field('svg-field'); ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex align-items-center <?php if($textSide == 'left') echo 'order-md-first'; ?>" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="100">
                    <div class="text-wrapper">
                        <?php the_sub_field('text'); ?>
                        <div class="splitter"></div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; 
    ?>
</div>