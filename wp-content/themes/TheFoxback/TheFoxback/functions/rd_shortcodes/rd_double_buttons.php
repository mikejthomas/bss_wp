<?php 



/*-----------------------------------------------------------------------------------*/



/* Double Buttons Shortcodes



/*-----------------------------------------------------------------------------------*/
function double_button( $atts, $content = null ) {

	extract(shortcode_atts(array(

		'style'     	 => 'rd_db_1',
		'f_b_text' => 'Button text',
		'f_t_color'   => '',		
		'f_b_color'   => '',	
		'f_t_hover_color'   => '',		
		'f_b_hover_color'   => '',
		'f_url'     	 => '#',
		'f_target'     	 => '_blank',
		's_b_text' => 'Button text',
		's_t_color'   => '',		
		's_b_color'   => '',	
		's_t_hover_color'   => '',		
		's_b_hover_color'   => '',
		's_url'     	 => '#',
		's_target'     	 => '_blank',
		'mt'     => '0',
		'mb'   => '0',
		'f_animation'   => '',
		's_animation'   => '',
		'f_ex_class'   => '',
		's_ex_class'   => '',

    ), $atts));
	

$button_rand_class = RandomString(20);	
	
	
if( $style == 'rd_db_1' || $style == 'rd_db_2'  || $style == 'rd_db_6'  ){

$output_string = '<style>#b_'.$button_rand_class.'{margin-top:'.$mt.'px; margin-bottom:'.$mb.'px;}#b_'.$button_rand_class.' .f_btn{color:'.$f_t_color.'; background: '.$f_b_color.';}#b_'.$button_rand_class.' .f_btn:hover{color:'.$f_t_hover_color.' ; background:'.$f_b_hover_color.' ;}#b_'.$button_rand_class.' .s_btn{color:'.$s_t_color.'; background: '.$s_b_color.';}#b_'.$button_rand_class.' .s_btn:hover{color:'.$s_t_hover_color.' ; background:'.$s_b_hover_color.' ;}</style>';

}

	
if( $style == 'rd_db_3' || $style == 'rd_db_5'  ){

$output_string = '<style>#b_'.$button_rand_class.'{margin-top:'.$mt.'px; margin-bottom:'.$mb.'px;}#b_'.$button_rand_class.' .f_btn{color:'.$f_t_color.'; background: '.$f_b_color.';}#b_'.$button_rand_class.' .f_btn:hover{color:'.$f_t_hover_color.' ; background:'.$f_b_hover_color.' ;}#b_'.$button_rand_class.' .s_btn{color:'.$s_t_color.'; background: '.$s_b_color.'; border-color:'.$s_t_color.';}#b_'.$button_rand_class.' .s_btn:hover{color:'.$s_t_hover_color.' ; background:'.$s_b_hover_color.' ; border-color:'.$s_b_hover_color.';}</style>';

}


if( $style == 'rd_db_4' ){

$output_string = '<style>#b_'.$button_rand_class.'{margin-top:'.$mt.'px; margin-bottom:'.$mb.'px;}#b_'.$button_rand_class.' .s_btn{color:'.$s_t_color.'; background: '.$s_b_color.';}#b_'.$button_rand_class.' .s_btn:hover{color:'.$s_t_hover_color.' ; background:'.$s_b_hover_color.' ;}#b_'.$button_rand_class.' .f_btn{color:'.$f_t_color.'; background: '.$f_b_color.'; border-color:'.$f_t_color.';}#b_'.$button_rand_class.' .f_btn:hover{color:'.$f_t_hover_color.' ; background:'.$f_b_hover_color.' ; border-color:'.$f_b_hover_color.';}</style>';

}



$output_string .= '<div class="'.$style.' clearfix" id="b_'.$button_rand_class.'" ><a class="f_btn '.$f_animation.' '.$f_ex_class.'" href="'.$f_url.'" target="'.$f_target.'" >'.$f_b_text.'</a><a class="s_btn '.$s_animation.' '.$s_ex_class.'" href="'.$s_url.'" target="'.$s_target.'" >'.$s_b_text.'</a></div>';





return $output_string;



}
add_shortcode('double_button', 'double_button');

?>