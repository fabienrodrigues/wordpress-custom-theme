<div id="keysteps">
    <?php if( have_rows('block_keysteps') ):
        while ( have_rows('block_keysteps') ) : the_row(); ?>
            <h2 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="0"><?php the_sub_field('title'); ?></h2>
            <h3 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="100"><?php the_sub_field('subtitle'); ?></h3>

            <div class="main-column">
                <div class="row">
                    <?php if( have_rows('steps') ):
                        $delay_count_number = 3;
                        while ( have_rows('steps') ) : the_row(); ?>
                            <div class="col">
                                <div class="step-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="<?php echo($delay_count_number * 50); ?>" data-aos-id="step-item">
                                    <h4 class="step-title"><?php the_sub_field('step_title'); ?></h4>
                                    <div class="percent">
                                        <div class="value" data-value="<?php the_sub_field('percent'); ?>"></div>
                                        <span></span>
                                    </div>
                                    <div class="step-content">
                                        <p><?php the_sub_field('step_text'); ?></p>
                                    </div>
                                    <a href="<?php echo get_sub_field('button')['url']; ?>" class="button">
                                        <?php the_sub_field('btn_icon'); ?>
                                        <?php echo get_sub_field('button')['title']; ?>
                                    </a>
                                </div>
                            </div>
                            
                        <?php
                        $delay_count_number++;
                        endwhile;
                    endif; 
                    ?>
                </div>
            </div>
        <?php endwhile;
    endif; 
    ?>
</div>