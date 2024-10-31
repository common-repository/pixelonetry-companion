<?php
/**
 * Template part for displaying Call To Action Section
 *
 * @package Spiral_Lite_One_Page
 */

?>
<?php 
	if ( ! function_exists( 'pixelonetry_companion_elina_cta' ) ) :
	function pixelonetry_companion_elina_cta() {
	$hs_cta						=	get_theme_mod('hs_cta','1');		
	$cta_title					= get_theme_mod('cta_title','DO YOU HAVE ANY PROJECT ?');
	$cta_description			= get_theme_mod('cta_description','Let’s Talk About Business Soluations With Us');
	$cta_btn_lbl1				= get_theme_mod('cta_btn_lbl1','Join With Us');
	$cta_btn_link1				= get_theme_mod('cta_btn_link1');
	if($hs_cta == '1') { 
?>
<secton id="action">
<div class="container">
<div class="row">
    <?php
if( $cta_title ) {
    echo '<div class="col-lg-6">';
    echo '<h2>' . wp_kses_post( $cta_title ) . '</h2>';        
    //echo wpautop( wp_kses_post( $call_to_action_section_content ) );
    echo '</div>';

    if( $cta_btn_lbl1 && $cta_btn_link1 ) {
        echo '<div class="col-lg-6"><p>';
        echo '<a href="' . esc_url( $cta_btn_link1 ) . '" class="btn btn-contour btn-big">' . esc_html( $cta_btn_lbl1 ) . '</a>';
        echo '</p></div>';
    }
}
?>
</div>
</div>
</section>
  
  <?php	
	}}
endif;
if ( function_exists( 'pixelonetry_companion_elina_cta' ) ) {
$section_priority = apply_filters( 'elina_section_priority', 16, 'pixelonetry_companion_elina_cta' );
add_action( 'elina_sections', 'pixelonetry_companion_elina_cta', absint( $section_priority ) );
}