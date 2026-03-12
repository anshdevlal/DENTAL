<?php
/**
 * The main template file
 * 
 * If no specialized template is available like front-page.php or page.php,
 * WordPress falls back to this file.
 */

get_header();
?>

    <main id="primary" class="site-main">
        <div class="container elementor-section">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    
                    the_content();
                    
                endwhile;
            else :
                echo '<p>No content found.</p>';
            endif;
            ?>
        </div>
    </main>

<?php
get_footer();
