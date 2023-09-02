	 <?php global $themesbazar; ?>   						
							
							<!--==========================
                              Acadcmics section Start
                            ===========================--> 
    <div class="acadcmic-seciton wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="acadcmic-section-wrpp">
                        <div class="acadcmic-seciton-title">
                           <?php echo $themesbazar['acadcmi-t']?>
                        </div>

                        <div class="acadcmic-seciton-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-image.png" alt="">
                        </div>
                    </div>
                        
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="acadcmic-list owl-carousel">
                        <?php 
							$themes_bazar = new WP_Query(array(
								'post_type' => 'acadcmics',
								'posts_per_page' =>1,
								'offset' => 0,
								
							));
							while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
							
                        <div class="acadcmic-wrpp">
                            <div class="acadcmic-image">
                                 <img src="<?php echo get_post_meta(get_the_ID(),'acadcmic-p', true); ?>" alt="">
                            </div>
                         
                            <div class="acadcmic-name">
                               <a href=""><?php echo get_post_meta(get_the_ID(),'acadcmic-t', true); ?></a> 
                            </div>       
                        </div>
                        <?php endwhile ?>

						
						<?php 
						$how_post= $themesbazar['how_post_acadcmics'];
						$total_how_post=$how_post-1;
						$themes_bazar = new WP_Query(array(
							'post_type' => 'acadcmics',
							'posts_per_page' => $total_how_post,
							'offset'     =>1,
						));
						while($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>  
						  
                        <div class="acadcmic-wrpp">
                            <div class="acadcmic-image">
                                 <img src="<?php echo get_post_meta(get_the_ID(),'acadcmic-p', true); ?>" alt="">
                            </div>
                         
                            <div class="acadcmic-name">
                               <a href="<?php the_permalink()?>"><?php echo get_post_meta(get_the_ID(),'acadcmic-t', true); ?></a> 
                            </div>       
                        </div>
                              <?php endwhile ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>   
                            <!--==========================
                                Acadcmic Section End
                            ===========================--> 