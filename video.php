	<?php /* Template Name: Video */ ?>

<?php  
get_header();
global $themesbazar;

?>						
							
							
							
							<!--==========================
                              Video section Start
                            ===========================--> 
    <div class="video-page wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
        <div class="container">
            <div class="row">
			
			<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type' => 'video',
					'paged' => $paged
				); $the_query = new WP_Query($args); if( $the_query->have_posts() ) : ?> 
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="col-md-4 col-sm-4">
                   
					<div class="video-wrpp">
						<div class="video-item">
							<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
							   <?php $url =  esc_url(get_post_meta( get_the_ID(), 'video-l', 1 ));
								?>
								<?php  echo wp_oembed_get( $url );  ?>
							</div>
							<div class="video-title">
							   <a href="<?php the_permalink()?>"><?php echo get_post_meta(get_the_ID(),'video-t', true); ?></a> 
							</div> 
						</div>
					</div>
			 
                </div>
				         
                     <?php endwhile ?>
                        
						
                      
				<div class="col-md-12 options border-bottom">

					<!-- pagination -->
					<ul class="pagination pull-left">
					<li><?php echo get_previous_posts_link( '<span class="glyphicon glyphicon-backward"></span>' ); ?></li>
						<li><?php echo get_next_posts_link( '<span class="glyphicon glyphicon-forward"></span>', $the_query->max_num_pages ); ?></li>
						
					</ul>

				</div>
				<!-- /.options -->  

				<?php wp_reset_postdata(); ?>

				<?php else:  ?>

				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>
                         
				
				
            </div>
        </div>
    </div>   
                            <!--==========================
                                Video Section End
                            ===========================--> 
                                                                                         
                                  
    	<?php get_footer();
	wp_footer();
	?>                               