<?php
/**
 * @package basewp
 */
 
if ( ! function_exists('basewp_option') ) {
	function basewp_option($id, $fallback = false, $param = false ) {
		global $basewp_options;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($basewp_options[$id]) && $basewp_options[$id] !== '' ) ? $basewp_options[$id] : $fallback;
		if ( !empty($basewp_options[$id]) && $param ) {
			$output = $basewp_options[$id][$param];
		}
		return $output;
	}
}