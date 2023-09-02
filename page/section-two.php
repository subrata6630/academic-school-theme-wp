<?php global $themesbazar; ?>   



                           <!--==========================
                                About section Start
                            ===========================--> 
        <div class="about-section wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
           <div class="container">
                <div class="box-shadow">
					<?php 
						$themes_bazar = new WP_Query(array(
							'post_type' => 'about',
							'posts_per_page' =>1,
							'offset' => 0,
							
						));
						while ($themes_bazar->have_posts()) : $themes_bazar->the_post(); ?>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="about-title">
                               <?php the_title() ?>

                            </div>

                            <div class="about-content">
                               <?php echo excerpt($themesbazar['excerpt-about']); ?><a href="<?php the_permalink();?>"><?php echo $themesbazar['read-more']?></a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="about-image">
                                  <?php the_post_thumbnail(); ?> 
                            </div>
                        </div>
                    </div>
					<?php endwhile ?>
                </div>
            </div>
        </div>

                           <!--==========================
                                About section End
                            ===========================--> 
                            