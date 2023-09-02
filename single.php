<?php  
get_header();
global $themesbazar;

?> 

	        
        
                   
					<!--================================
							Single-Page-start
                      ===============================-->        
   <div class="single-page">
       <div class="container">
	   				 <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="single-title">
                          <?php the_title(); ?>
                    </div>   
                    
                    <div class="single-p-deg">
                        <?php echo get_post_meta(get_the_ID(),'teacher-deg', true); ?>
                    </div>
                </div>
                
                <div class="col-md-12">
                    <div class="single-page-image">
                       <img src="<?php echo get_post_meta(get_the_ID(),'teacher_imgage', true); ?>" alt="">
                    </div>
                        
                    <div class="single-page-content">
                        <?php echo get_post_meta(get_the_ID(),'info-dati', true); ?>
                        
                    </div>
                   
                </div>
                
            </div>
			<?php endwhile;?>
                <?php endif;?>	
			
			
       </div>
   </div>
					<!--================================
							Single-Page-End
                      ===============================-->
	        
        
                  
                  
                  
    <?php get_footer();?>