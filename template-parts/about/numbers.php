<div id="numbers">
    <div class="main-column">
        <?php if( have_rows('numbers') ):
            while ( have_rows('numbers') ) : the_row();
                echo '<h2 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="0">' . get_sub_field('title_numbers') . '</h2>';
                echo '<h3 data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="100">' . get_sub_field('subtitle_numbers') . '</h3>';
                echo '<div class="numbers-wrapper" data-aos data-aos-id="numbers">';
                if( have_rows('number_item') ):
                    $delay_count_number = 3;
                    while ( have_rows('number_item') ) : the_row();
                        $value = get_sub_field('value');
                        $name = get_sub_field('name');
                        echo '<span class="number-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-delay="' . $delay_count_number * 50 . '"><span class="number" data-value="' . $value . '">' . $value . '</span><span class="name">' . $name . '</span></span>';

                        $delay_count_number++;
                    endwhile;
                endif;
                echo '</div>';
            endwhile;
        endif; 
        ?>
    </div>
</div>