<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/* 
	* define assets helper function.
	* @auth: F. NGONDJI
	* @date: 17/02/2016
	*/

	/* To access css repository lightly*/
	if ( ! function_exists('css_url')) {
		function css_url($nom) {
			return base_url() . 'assets/css/' . $nom . '.css';
		}
	}
	/* To access javascript repository lightly*/
	if ( ! function_exists('js_url')) {
		function js_url($nom) {
			return base_url() . 'assets/javacript/' . $nom . '.js';
		}
	}
	
	/* To access images repository lightly*/
	if ( ! function_exists('img_url')) {
		function img_url($nom) {
			return base_url() . 'assets/images/' . $nom;
		}
	}
	
	/* To call img directive */
	if ( ! function_exists('img')) {
		function img($nom, $alt = '') {
			return '<img src="' . img_url($nom) . '" alt="' . $alt . '" />';
		}
	}
	
	/* To call js directive */
	
	if ( ! function_exists('script_btsrp')) {
		function script_btsrp($nom){
			return '<script type="text/javascript" src="'.$nom.'" ></script>';
		}
	}
	
	/* Add function to call bootstrap Framework repo */
	
	/* To call bootstrap css file */
	if ( ! function_exists('btsrp_css_url')) {
		function btsrp_css_url($nom) {
			return base_url(). 'assets/bootstrap/css/' .$nom.'.css';
		}
	}
	/* To call bootstrap JS file */
	if ( ! function_exists('btsrp_js_url')) {
		function btsrp_js_url($nom) {
			return base_url(). 'assets/bootstrap/js/' .$nom.'.js';
		}
	}
	/* To call bootstrap fonts file */
	if ( ! function_exists('btsrp_fonts_url')) {
		function btsrp_fonts_url($nom) {
			return base_url(). 'assets/bootstrap/fonts' .$nom;
		}
	}

?>