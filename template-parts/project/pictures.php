<div class="project-pictures">
    <?php if( have_rows('pictures') ):
        while ( have_rows('pictures') ) : the_row(); ?>
            <div class="picture-wrapper">
                <?php if(get_sub_field('project-picture')) : ?>
                    <img data-src="<?php echo get_sub_field('project-picture')['url']; ?>" data-aos="fade-up" data-aos-delay="0">
                <?php endif; ?>

                <?php if(get_sub_field('project-video')) : ?>
                    <div class="iframe-wrapper" data-aos="fade-up" data-aos-delay="0">
                        <?php the_sub_field('project-video'); ?>
                    </div>
                <?php endif; ?>

                <h3 data-aos="fade-up" data-aos-delay="50"><?php the_sub_field('picture-legend'); ?></h3>
            </div>
        <?php endwhile;
    endif; 
    ?>
</div>