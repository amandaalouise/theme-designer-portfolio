<?php
get_header(); ?>
<div class="page__content">
    <div class="sidenav text-center">
        <div class="nav-open-btn w-100">
            <i class="material-icons menu-icon">
                menu
            </i>
        </div>
    </div>
    <div class="content">
        <div id="main" class="scroll-container">
            <section>
                <?php get_template_part( 'template-parts/landing' ); ?>
            </section>

            <?php 

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1
            );
            
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post();
            ?>

                <section>
                    <?php get_template_part( 'template-parts/post' ); ?>
                </section>

            <?php                  
                }
            }            
            wp_reset_postdata();
            
            ?>

            <section class="section5">
                <?php get_template_part( 'template-parts/contact' ); ?>
            </section>
        </div>
    </div>
</div>
<?php
get_footer(); ?>