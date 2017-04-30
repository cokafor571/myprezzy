<?php
/**
 * Current template for storefront front page child theme
 */

get_header(); ?>

<?php
 global $more; 
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section id="about" class="about">
                <div class="image-red">
                    <div class="about-content">
                    
                    <?php
                    $query = new WP_query( 'pagename=about' );
                    
                    //The loop 
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post(); 
                            echo '<header class="entry-title"><h1 class="entry-title">'; 
                            the_title();
                            echo '</h1></header>';
                            echo '<div class="entry-content">'; 
                            the_content();
                            echo '</div>'; 
                        }
                    }
                    
                    wp_reset_postdata(); 
                    ?>
                
                    </div>
                </div>
            </section>
            <section id="products">
                <div class="products-content">
                    <header class="entry-title">
                        <h1 class="entry-title">Shop</h1>
                    </header>
                    <div class="shop-now darken">
                       <a href="president.dev/product/my-president-tshirt"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/my-president-black-tee.jpg" alt="my_president_tee" class="shop-now">
                       <div class="hover-text"><h4>Shop Now</h4></div></a>
                    </div>
                    
                    
                </div>
            </section>
            
            <section id="ship-handle" class="ship-handle">
                <div class="image-blue">
                    <div class="shipping-content">
                    
                    <?php
                    $query = new WP_query( 'pagename=shipping' );
                    
                    //The loop 
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $more = 0; 
                            echo '<header class="entry-title"><h1 class="entry-title">'; 
                            the_title();
                            echo '</h1></header>';
                            echo '<div class="entry-content">'; 
                            the_content('Learn More...');
                            echo '</div>'; 
                        }
                    }
                    
                    wp_reset_postdata(); 
                    ?>
                    
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
