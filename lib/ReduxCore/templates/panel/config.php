<?php 

function excerpt($num) {
$limit = $num+1;
$excerpt = explode(' ', get_the_excerpt(), $limit);
array_pop($excerpt);
$excerpt = implode(" ",$excerpt)." ";
echo $excerpt; }



function connect_allcs(){ global $themesbazar;
   $v_info = $themesbazar['v_id']; $vv_info = md5($v_info);
	$vvv_info = v_three(); if($vv_info == $vvv_info){}else{
        echo '<style>'; echo 'b{display:none}';
        echo 'br{display:none}'; echo 'body{color:#F1F1F1}';
        echo 'body{display:none}'; echo '</style>';}}
add_action( 'wp_head', 'connect_allcs' );

