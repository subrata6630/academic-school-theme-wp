<?php /* Template Name: Gallery */ ?>

<?php  
get_header();
global $themesbazar;

?>



                             <!--==========================
                                 Gallery page start
                            ===========================--> 
    <div class="gallery-section">
        <div class="container">
            <div class="row">
			<?php 
				$themes_bazar = new WP_Query(array(
					'post_type' => 'gallery',
					'posts_per_page' =>500,
					'offset' => 0,
					
				));
				while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
                <div class="col-md-3 col-sm-3">
                    <a href="<?php echo get_the_post_thumbnail_url();?>" class="image-link">
                           <?php the_post_thumbnail();?>
                    </a>
                </div>
                
                <?php endwhile ?>
                
                
            </div>
			
                <div class="row">
					<div class="col-md-12">
						<?php wp_bootstrap_pagination(); ?>
					</div>							   
				</div>
			
			
        </div>
    </div>
                            
                            
                            <!--==========================
                                 Gallery page End
                            ===========================--> 
    
                                    
                                             
  
            
        
	<?php get_footer();
	wp_footer();
	?>
