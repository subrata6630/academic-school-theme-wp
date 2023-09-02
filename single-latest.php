<?php  
get_header();
global $themesbazar;

?>

				<div class="single-latest-page">
        <div class="container">
            <div class="row">
				
                <div class="col-md-10 col-md-offset-1">
                    <?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
                    <div class="single-latest-page-image">
                       <?php  the_post_thumbnail(); ?>
                    </div>
                    
                    <div class="blog-date">
                       <ul>
						  
						   <li><?php echo get_post_meta(get_the_ID(),'latest-date', true); ?></li>
					   </ul>
                   </div>
                   
                    <div class="single-latest-page-title">
                       <?php the_title() ?>
                   </div>
                   
                    <div class="single-latest-page-content">
                        <?php the_content() ?> 
                    </div>
                </div>
				
				<?php endwhile;?>
				<?php endif;?>
				
               
            </div>
        </div>
    </div>
    
    
								<!--==========================
                                      Counter-Section start
                                    ===========================-->  
        <div class="counter-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
            <div class="container">
                <div class="row">
                     
                    <div class="col-md-3 col-sm-3">
                        <div class="counter-contant ">
                           <div class="count-border">
                            <h2><span> <?php echo $themesbazar['item-t-one']?></span>+</h2>
                            <p> <?php echo $themesbazar['item-cont-one']?></p>
                           </div>
                           
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="counter-contant">
                            <div class="count-border">
                               <h2><span><?php echo $themesbazar['item-t-two']?></span>+</h2>
                            <p><?php echo $themesbazar['item-cont-two']?></p>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-3">
                        <div class="counter-contant">
                            <div class="count-border">
                                <h2><span><?php echo $themesbazar['item-t-three']?></span>+</h2>
                            <p><?php echo $themesbazar['item-cont-three']?></p>
                            </div>
                        </div>
                    </div> 
                        
                    <div class="col-md-3 col-sm-3">
                        <div class="counter-contant">
                            <div class="count-border">
                               <h2><span><?php echo $themesbazar['item-t-four']?></span>+</h2>
                            <p><?php echo $themesbazar['item-cont-four']?></p>
                            </div>
                        </div>
                    </div> 
                       
                   
                    
                </div>
            </div>
        </div> 
 
                     
                     <!--==========================
                        Counter-Section End
                    ===========================--> 
                                                            
   
                            <!--==========================
                                Single page End
                            ===========================--> 
                                    
                                    
                                    
                                             
  <?php get_footer();
	wp_footer();
	?>