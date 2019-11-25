<div id="team">
    <div class="main-column">
        <?php if( have_rows('team') ):
            while ( have_rows('team') ) : the_row();
                echo '<h2 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="0">' . get_sub_field('title_team') . '</h2>';
                echo '<h3 data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="100">' . get_sub_field('subtitle_team') . '</h3>';
                echo '<div class="team-wrapper">';
                if( have_rows('job_item') ):
                    $delay_count_number = 3;
                    while ( have_rows('job_item') ) : the_row();
                        $picture = get_sub_field('job_picture')['url'];
                        $title = get_sub_field('job_title');
                        $text = get_sub_field('job_text');
                        echo '<span class="job-item" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-delay="' . $delay_count_number * 50 . '"><span class="inner-item"><img src="' . $picture . '"><h3 class="job-title">' . $title . '</h3><span class="job-text">' . $text . '</span><a href="' . site_url() . '/contacts" class="button"><i class="fas fa-bullhorn"></i>Contacter ' . $title . '</a></span></span>';

                        $delay_count_number++;
                    endwhile;
                endif;
                echo '</div>';
            endwhile;
        endif; 
        ?>
    </div>
</div>