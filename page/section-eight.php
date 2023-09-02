  <?php global $themesbazar; ?>   	
  
                             <!--==========================
                              Video section Start
                            ===========================--> 
    <div class="video-seciton wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="video-section-wrpp">
                        <div class="video-seciton-title">
                             <?php echo $themesbazar['video-t']?>
                        </div>

                        <div class="video-seciton-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-image.png" alt="">
                        </div>
                    </div>
                        
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="video-list owl-carousel">
						<?php 
						$themes_bazar = new WP_Query(array(
							'post_type' => 'video',
							'posts_per_page' =>1,
							'offset' => 0,
							
						));
						while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
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
                          
                         <?php endwhile ?>
                        
						<?php 
						$how_post= $themesbazar['how_post_video'];
						$total_how_post=$how_post-1;
						$themes_bazar = new WP_Query(array(
							'post_type' => 'video',
							'posts_per_page' => $total_how_post,
							'offset'     =>1,
						));
						while($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
						
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
                          
                          <?php endwhile; ?>  
                      
                                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>   
                            <!--==========================
                                Video Section End
                            ===========================--> 
                                                                                         
                                  
                                   
                                   