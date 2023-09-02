<?php /* Template Name: latest-news */ ?>

<?php  
get_header();
global $themesbazar;

?>
   

           
         

                             <!--==========================
                                section Ten start
                            ===========================--> 
    <div class="blog-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="blog-section-wrpp">
                        <div class="blog-seciton-title">
                            <?php echo $themesbazar['latest-t']?>
                        </div>

                        <div class="blog-seciton-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
			<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$args = array(
					'post_type' => 'latest',
					'paged' => $paged
				); $the_query = new WP_Query($args); if( $the_query->have_posts() ) : ?> 
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-4 col-sm-4">
                    <div class="blog-wrpp">
					   <div class="blog-image">
							<?php the_post_thumbnail(); ?> 
					   </div>

					   <div class="blog-padding">
							<div class="blog-date">
							   <ul>
								    <li><?php echo get_post_meta(get_the_ID(),'latest-date', true); ?></li>
							   </ul>
						   </div>

							<div class="blog-title">
							  <a href="<?php the_permalink()?>"><?php the_title() ?></a>
							</div>

							<div class="blog-content">
							   <?php echo excerpt($themesbazar['excerpt-latest']); ?>
							</div>
					   </div>
					   <div class="read-more-btn">
						   <a href="<?php the_permalink()?>"><?php echo $themesbazar['latest-btn']?> </a>
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
                                section Ten End
                            ===========================--> 
                                    
    <?php get_footer();
	wp_footer();
	?>