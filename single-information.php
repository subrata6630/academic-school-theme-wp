<?php  
get_header();
global $themesbazar;

?> 

	        

	        
        
                   
					<!--================================
							Information-single-Page-start
                      ===============================-->        
   <div class="information-single-page">
       <div class="container">
            <div class="row">
						<?php
						while ( have_posts() ) : the_post(); ?>
                <div class="col-md-12">
                    <div class="information-title">
                        <?php the_title(); ?>
                    </div> 
                    <div class="singel-information-content">
						<?php the_content(); ?>
                    </div>
                    
                    <div class="single-dawonlod">
                        <a href="<?php echo get_post_meta(get_the_ID(),'inform-file', true); ?>"><i class="fa fa-download"></i>Download </a>
                    </div>
                    
                </div>
				<?php 
					endwhile;
					wp_reset_query();

				?>
            </div>
       </div>
   </div>
					<!--================================
							Information-single-Page-End
                      ===============================-->
	        
        
                  
                  
                  
                  
          		<?php get_footer();?>
