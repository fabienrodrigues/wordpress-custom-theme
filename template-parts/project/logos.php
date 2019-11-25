<div class="project-logos">
    <?php if( have_rows('logos-list') ):
        echo('<h2>Ils en parlent</h2>');

        echo('<div class="wrapper">');
        
        while ( have_rows('logos-list') ) : the_row(); ?>
            <?php
                $link =     get_sub_field('link-logo');
                $picture =  get_sub_field('picture-logo');
            ?>

            <?php if($link) : ?>
                <a href="<?php echo $link ?>" target="_blank" title="<?php echo get_sub_field('picture-logo')['name']; ?>" class="logo-item">
            <?php else : ?>
                <div class="logo-item">
            <?php endif; ?>

                <?php if($picture) : ?>
                    <img data-src="<?php echo get_sub_field('picture-logo')['url']; ?>" data-aos="fade-up" data-aos-delay="0">
                <?php endif; ?>

            <?php if($link) : ?>
                </a>
            <?php else : ?>
                </div>
            <?php endif; ?>
        <?php endwhile;

        echo('</div>');
    endif; 
    ?>
</div>