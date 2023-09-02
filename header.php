<?php global $themesbazar; ?>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://themesbazar.com">
<title><?php wp_title('');  ?></title>  
      
      
<link rel="icon" href="<?php echo $themesbazar['favicon']['url']?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo $themesbazar['favicon']['url']?>" type="image/x-icon" />       
             
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-thumbnail' ); ?>
<meta property="og:title" content="<?php the_title(); ?>" /> 
<meta property="og:description" content="" />  
<meta property="og:image" content="<?php echo $image[0]; ?>" /> 
<meta property="og:video" content="" /> 
<meta property="og:video:width" content="560" />  
<meta property="og:video:height" content="340" />  
<meta property="og:video:type" content="application/x-shockwave-flash" />

        
        <?php wp_head();?>
		<?php include('assets/css/dynamic-css.php');?>	
		
    </head>
    <body>
                  
                   
        <!--=======================
            top-header-start
        ==========================-->
   <div class="top-header-section">
       <div class="container-fluid">
          
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-9 konakanchi">
               <?php echo $themesbazar['top-hed']?>  
                
				<div class="top-social">
					<a href="<?php echo $themesbazar['social-link']['facebook-url']; ?>" target="_blank" title="facebook"> <i class="fa fa-facebook"></i></a>
					<a href="<?php echo $themesbazar['social-link']['twitter-url']; ?>" target="_blank" title="twitter"> <i class="fa fa-twitter"></i></a>
					<a href="<?php echo $themesbazar['social-link']['googleplus-url']; ?>" target="_blank" title="google-plus"> <i class="fa fa-google-plus"></i></a>
					<a href="<?php echo $themesbazar['social-link']['instagram-url']; ?>" target="_blank" title="instagram"> <i class="fa fa-instagram fa-md"></i></a>
					<a href="<?php echo $themesbazar['social-link']['youtube-url']; ?>" target="_blank" title="youtube"> <i class="fa fa-youtube"></i></a>
				</div>
            </div>
        </div>
           
       </div>
   </div>
             
        <!--=======================
            top-header-End
        ==========================-->
                                      
                    <!--=======================
                       header-section-start
                    ==========================-->
    <div class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2 col-xs-6">
                    <div class="logo">
                           <a href="<?php echo home_url('/'); ?>"><img src=" <?php echo $themesbazar['logo_upload']['url']?>" alt="Logo" width="100%"></a>
                    </div>
                </div>
                
               
                    <div class="col-md-9 col-sm-9">
                        <div class="header-padding">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="header-addeess">
                                     <i class="<?php echo $themesbazar['header-icon-one']?>"></i> 
                                        <li> <strong><?php echo $themesbazar['phone-t']?></strong> </li>
                                        <li> <?php echo $themesbazar['phone-nu']?> </li>
                                    </div>

                                </div>  


                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="header-addeess">
                                         <i class="<?php echo $themesbazar['header-icon-two']?>"></i>
                                        <li> <strong><?php echo $themesbazar['gmail-t']?></strong> </li>
                                        <li><?php echo $themesbazar['gmail-a']?></li>
                                    </div>

                                </div> 

                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="header-addeess">
                                        <i class="<?php echo $themesbazar['header-icon-three']?>"></i> 
                                        <li> <strong><?php echo $themesbazar['loction-t-one']?></strong> </li>
                                        <li><?php echo $themesbazar['loction-t-two']?></li>
                                   </div>

                                </div>  
                            </div>
                        </div>
                    
                    
                 </div>
            </div>
        </div>
    </div>

                    <!--=======================
                        header-section-End
                    ==========================-->           
                   
                   
                   
                   
     <!------------ Menu & Search section Start -------------->

		<section class="menu_section" id="myHeader">
            <div class="container">
                <div class="row">
                	<div class="col-xs-12 col-md-12 col-sm-12">
                		<div id="menu-area" class="menu_area">
		                    <div class="menu_bottom">
                                <nav role="navigation" class="navbar navbar-default mainmenu">
                            <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <!-- Collection of nav links and other content for toggling -->
                                    <div id="navbarCollapse" class="collapse navbar-collapse">
                                        <?php /* Primary navigation */
											wp_nav_menu( array(
											'theme_location' => 'main-menu',
											'menu_class'    => 'nav navbar-nav',
											'fallback_cb' => 'default_main_menu',
											'walker' => new wp_bootstrap_navwalker())
											  );
											?>
                                    </div>
                                </nav>
		                                    
		                    </div><!-- /.header_bottom -->

		                </div>
                	</div>
                	
                </div>
            </div>
        </section>


		<!------------ scrool Start -------------->

