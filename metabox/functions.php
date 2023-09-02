<?php


function metabox_home(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'first-section',
			'title' => 'Extra Fields',
			'object_types' => array('home-gallery'),
			'fields' => array(
					
					array(
						'id' => 'home-photo',
						'name' => 'Home Gallery Image Upload',
						'type' => 'file',
						
					),	
			)

	);
	
	return $product_meta;	
}
add_filter('cmb2_meta_boxes','metabox_home');



function metabox_product_acadcmi(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'third-section',
			'title' => 'Acadcmic Image Upload',
			'object_types' => array('acadcmics'),
			'fields' => array(
					
					array(
						'id' => 'acadcmic-p',
						'name' => 'Acadcmic Image Upload',
						'type' => 'file',
						
					),	
					
					array(
						'id' => 'acadcmic-t',
						'name' => 'Acadcmic Title',
						'type' => 'text',
						
					),
					
					
		
					
			)

	);
	
	return $product_meta;	
}
add_filter('cmb2_meta_boxes','metabox_product_acadcmi');



function metabox_product_Video(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'four-section',
			'title' => 'Video Upload',
			'object_types' => array('video'),
			'fields' => array(
					
					array(
						'id' => 'video-l',
						'name' => 'Video Link Upload',
						'type' => 'oembed',
						
					),	
					
					array(
						'id' => 'video-t',
						'name' => 'Video Title',
						'type' => 'text',
						
					),
					
					
		
					
			)

	);
	
	return $product_meta;	
}
add_filter('cmb2_meta_boxes','metabox_product_Video');



function metabox_product_blog(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'five-section',
			'title' => 'Latest News Date Option',
			'object_types' => array('latest'),
			'fields' => array(
									
					array(
						'id' => 'latest-date',
						'name' => ' Latest News  Date',
						'type' => 'text',
						
					),
					
		
		
					
			)

	);
	
	return $product_meta;	
}
add_filter('cmb2_meta_boxes','metabox_product_blog');



function metabox_product_infor(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'six-section',
			'title' => 'Information Download From Upload',
			'object_types' => array('information'),
			'fields' => array(
					array(
						'id' => 'inform-t',
						'name' => 'Download Title',
						'type' => 'text',
						
					),
					
					array(
						'id' => 'inform-viw',
						'name' => 'Viwe Title',
						'type' => 'text',
						
					),
					
					array(
						'id' => 'inform-file',
						'name' => 'Form Image & PDF Upload',
						'type' => 'file',
						
					),	
		
					
			)

	);
	
	return $product_meta;	
}
add_filter('cmb2_meta_boxes','metabox_product_infor');



function metabox_product_post_s(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'seven-section',
			'title' => 'Information  Upload',
			'object_types' => array('post'),
			'fields' => array(
					array(
						'id' => 'number-t',
						'name' => 'Number Text',
						'type' => 'text',
						
					),
					
					array(
						'id' => 'teacher-deg',
						'name' => 'Designation Text',
						'type' => 'text',
						
					),	
					
				array(
						'id' => 'teacher_imgage',
						'name' => 'Image Upload',
						'type' => 'file',
					),
					
					array(
						'id' => 'info-dati',
						'name' => 'Information Datiles',
						'type' => 'wysiwyg',
					),	
					
					
		
					
			)

	);
	
	return $product_meta;	
}
add_filter('cmb2_meta_boxes','metabox_product_post_s');




/*
function metabox_product(array $product_meta){
	
	$product_meta[] = array(
	
			'id' => 'first-section',
			'title' => 'Fist Metabox',
			'object_types' => array('product', 'post'),
			'fields' => array(
					array(
						'id' => 'developer',
						'name' => 'Developer Version',
						'type' => 'text',
						
					),
			)

	);
	
	return $product_meta;
}
add_filter('cmb2_meta_boxes','metabox_product');


Output=========
<?php echo get_post_meta(get_the_ID(),'developer', true); ?>

*/


