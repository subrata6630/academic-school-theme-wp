   <?php global $themesbazar; ?>  

   
                            <!--==========================
                               Latest Section start
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
                <div class="col-md-12">
                     <div class="blog-list owl-carousel">
				
						
					<?php 
					$themes_bazar = new WP_Query(array(
						'post_type' => 'latest',
						'posts_per_page' =>1,
						'offset' => 0,
						
					));
					while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
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
						
						<?php endwhile ?>
									
                    	<?php 
						$how_post= $themesbazar['how_post_latest'];
						$total_how_post=$how_post-1;
						$themes_bazar = new WP_Query(array(
							'post_type' => 'latest',
							'posts_per_page' => $total_how_post,
							'offset'     =>1,
						));
						while($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?> 
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
						
						<?php endwhile ?>
				

                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
                                             
                            <!--==========================
                                Latest Section End
                            ===========================--> 
                                    