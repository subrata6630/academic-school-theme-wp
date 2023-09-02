   <?php global $themesbazar; ?>   
                            
                            <!--==========================
                                Speech section Start
                            ===========================--> 
        <div class="speech-section  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
            <div class="container">
                <div class="row">
				<?php 
						$themes_bazar = new WP_Query(array(
							'post_type' => 'speech',
							'posts_per_page' =>2,
							'offset' => 0,
							
						));
						while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
                    <div class="col-md-6 col-ms-6">
                       <div class="box-shadow">
                           <div class="speech-wrpp">
                                <div class="speech-title">
                                    <?php the_title() ?>
                                </div>
                                <div class="speech-image">
                                    <?php the_post_thumbnail(); ?> 
                                </div>
                                <div class="speech-content">
                                   <?php echo excerpt($themesbazar['excerpt-speech']); ?><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more']?></a>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php endwhile ?>

                    
                </div>
            </div>
        </div>                    
                            

                            <!--==========================
                                Speech section End
                            ===========================-->
                            
                            