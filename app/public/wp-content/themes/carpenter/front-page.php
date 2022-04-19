<?php get_header(); ?>
<!-- Set up your HTML -->
<article class="owl-carousel owl-theme">
    <div class="item">
        <img src="<?php the_field('first_carousel_picture'); ?>" alt="">
        <hgroup>
            <h2><?php the_field('first_carousel_title'); ?></h2>
            <p><?php the_field('first_carousel_text'); ?></p>
        </hgroup>
    </div>
    <div class="item">
        <img src="<?php the_field('second_carousel_picture'); ?>" alt="">
        <hgroup>
            <h2><?php the_field('second_carousel_title'); ?></h2>
            <p><?php the_field('second_carousel_text'); ?></p>
        </hgroup>
    </div>
    <div class="item">
        <img src="<?php the_field('third_carousel_picture'); ?>" alt="">
        <hgroup>
            <h2><?php the_field('third_carousel_title'); ?></h2>
            <p><?php the_field('third_carousel_text'); ?></p>
        </hgroup>
    </div>
</article>
</header>

<!-- services -->
<section class="services">
    <article class="container">

        <div>
            <img src="<?php the_field('first_icon_in_services_section'); ?>" alt="">
            <h4><?php the_field('first_title_under_the_icon'); ?></h4>
            <p><?php the_field('first_text_under_the_icon'); ?></p>
        </div>

        <div>
            <img src="<?php the_field('second_icon_in_services_section'); ?>" alt="">
            <h4><?php the_field('second_title_under_the_icon'); ?></h4>
            <p><?php the_field('second_text_under_the_icon'); ?>?</p>
        </div>

        <div>
            <img src="<?php the_field('third_icon_in_services_section'); ?>" alt="">
            <h4><?php the_field('third_title_under_the_icon'); ?></h4>
            <p><?php the_field('third_text_under_the_icon'); ?></p>
        </div>

        <div>
            <img src="<?php the_field('fourth_icon_in_services_section'); ?>" alt="">
            <h4><?php the_field('fourth_title_under_the_icon'); ?></h4>
            <p><?php the_field('fourth_text_under_the_icon'); ?></p>
        </div>
    </article>

</section>

<!-- about -->
<section id="about" class="about">
    <article class="container">
        <div>
            <h2><?php the_field('main_title_in_the_about_section'); ?></h2>
            <p><?php the_field('text_in_the_about_section'); ?></p>
        </div>
    </article>
</section>

<!-- welcome -->
<section id="services" class="welcome">
    <hgroup class="container">
        <h2><?php the_field('main_title_in_the_blog_section'); ?></h2>
        <p><?php the_field('text_under_the_title_in_the_blog_section'); ?></p>
    </hgroup>
    <article class="container">
       <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 3
         
        )); ?>

        <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        <div class="card">
            <div class="card-header">
            <?php echo the_post_thumbnail(); ?>
            </div>
            <div class="card-body">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn"><?php echo ('Learn more'); ?></a>
            </div>
        </div>
         <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>


    </article>
</section>

<!-- experiance -->
<section class="experience">
    <hgroup class="container">
        <h2><?php the_field('main_title_in_the_experience_section'); ?></h2>
    </hgroup>
    <article class="container">
        <div class="wrapper">
            <img src="<?php the_field('first_icon_in_the_experience_section'); ?>" alt="">
            <h3><?php the_field('first_number_in_the_experience_section'); ?></h3>
            <p><?php the_field('first_text_in_the_experience_section'); ?></p>
        </div>
        <div class="wrapper">
            <img src="<?php the_field('second_icon_in_the_experience_section'); ?>" alt="">
            <h3><?php the_field('second_number_in_the_experience_section'); ?></h3>
            <p><?php the_field('second_text_in_the_experience_section'); ?></p>
        </div>
        <div class="wrapper">
            <img src="<?php the_field('third_icon_in_the_experience_section'); ?>" alt="">
            <h3><?php the_field('third_number_in_the_experience_section'); ?></h3>
            <p><?php the_field('third_text_in_the_experience_section'); ?></p>
        </div>
        <div class="wrapper">
            <img src="<?php the_field('fourth_icon_in_the_experience_section'); ?>" alt="">
            <h3><?php the_field('fourth_number_in_the_experience_section'); ?></h3>
            <p><?php the_field('fourth_text_in_the_experience_section'); ?></p>
        </div>
        <div class="wrapper">
            <img src="<?php the_field('fifth_icon_in_the_experience_section'); ?>" alt="">
            <h3><?php the_field('fifth_number_in_the_experience_section'); ?></h3>
            <p><?php the_field('fifth_text_in_the_experience_section'); ?></p>
        </div>
    </article>
</section>

<!-- what we do -->
<section id="project" class="whatWeDo">
    <hgroup class="container">
        <h2><?php the_field('main_title_in_what_we_do_section'); ?></h2>
        <p><?php the_field('text_under_the_title_in_what_we_do_section'); ?></p>
    </hgroup>
    <article class="container">
       
        <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'project',
            'posts_per_page' => 4
         
        )); ?>

        <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post();
        ?>
        
        <div class="card">
            <a href="#">
                <div class="card-header">
                <?php echo the_post_thumbnail(); ?>
                </div>
            </a>
            <div class="card-body">
                <h3><?php the_title(); ?></h3>
            </div>
        </div>
        
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>

    
    </article>
    <hgroup class="container">
        <a href="<?php the_permalink(); ?>" class="btn"><?php echo ('View All'); ?></a>
    </hgroup>
</section>

<!-- team -->
<section id="team" class="team">
    <hgroup class="container">
        <h2><?php the_field('main_title_in_the_team_section'); ?></h2>
        <p><?php the_field('text_under_the_title_in_the_team_section'); ?></p>
    </hgroup>
    <article class="container">
        
        <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'teams',
            'posts_per_page' => 4
         
        )); ?>

        <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post();
        ?>

        <div class="card">
            <div class="card-header">
                <?php echo the_post_thumbnail(); ?> 
            </div>
            <div class="card-body">
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
            </div>
            <div class="card-footer">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        
    </article>
</section>

<?php get_footer(); ?>
