<?php global $themesbazar; ?>

<style>

.menu_section {
	z-index: 9999;
	background: <?php echo $themesbazar['menu-background']?>;
	transition: .8s;
}

.sticky {
    position: fixed;
    top: 0;
    width: 100%;
    transition: .8s;
    border-bottom:4px solid <?php echo $themesbazar['menu-activ']?>;

}

.menu_bottom { 
    background: <?php echo $themesbazar['menu-background']?>;
 }

.menu_area .menu_bottom .mainmenu a, .navbar-default .navbar-nav > li > a {
	color:<?php echo $themesbazar['menu-font']['color']?>;
	font-size: <?php echo $themesbazar['menu-font']['font-size']?>;
	text-transform: uppercase; 
	padding: 23px 16px;
	
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, 
.navbar-default .navbar-nav > .active > a:focus {
    color: <?php echo $themesbazar['menu-font']['color']?>;
    margin: 0px;
    background-color: <?php echo $themesbazar['menu-activ']?>;
}

.mainmenu .collapse ul > li:hover > a{
	background: <?php echo $themesbazar['menu-activ']?>;
}

.mainmenu .collapse ul ul > li:hover > a, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus, 
.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover{
	background: <?php echo $themesbazar['menu-activ']?>;
	color: #fff!important;
}

.mainmenu .collapse ul ul, 
.mainmenu .collapse ul ul
.dropdown-menu{
    background:<?php echo $themesbazar['menu-background']?>;
}
.mainmenu .collapse ul ul ul,
.mainmenu .collapse ul ul ul
.dropdown-menu{
 background:<?php echo $themesbazar['menu-background']?>;

}



.footer-section{
    background: <?php echo $themesbazar['footer_background']?>;
    padding: 60px 0;
}

.footer-menu ul li a{
    color: <?php echo $themesbazar['footer-font']['color']?>;
    font-size: <?php echo $themesbazar['footer-font']['font-size']?>;
    transition: .3s;
}


.f-address-content {
	font-size: <?php echo $themesbazar['footer-font']['font-size']?>;
	color: <?php echo $themesbazar['footer-font']['color']?>;
	padding: 5px 0;
	margin-left: 10px;
	margin-top: 10px;
}
.footer-icon {
	position: absolute;
	left: 0;
	text-align: center;
	font-size: 18px;
	color: <?php echo $themesbazar['footer-font']['color']?>;
	content: "";
	margin-top: -1px;
}

.footer-menu-title {
	font-size:<?php echo $themesbazar['footer-tite']['font-size']?>;
	color: <?php echo $themesbazar['footer-tite']['color']?>;
	text-align: left;
	padding-bottom: 10px;
	font-weight: 600;
}


.bottom-footer-section{
    background: <?php echo $themesbazar['boottom_footer']?>;
    padding: 15px 0;
}



</style>