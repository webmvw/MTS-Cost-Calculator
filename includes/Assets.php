<?php 
namespace Mts;

/**
* The Assets class
*/
class Assets{
	
	function __construct(){
		add_action('wp_enqueue_scripts', [$this, 'enqueue_assets']);
		add_action('admin_wp_enqueue_scripts', [$this, 'enqueue_assets']);
	}

	public function enqueue_assets(){
		//register script
		wp_register_script('mts-script', MST_COST_CALCULATOR_ASSETS.'js/frontend.js', false, filemtime(MST_COST_CALCULATOR_PATH.'/assets/js/frontend.js'), true);
		// enqueue script
		wp_enqueue_script('mts-script');



		// register style
		wp_register_style('mts-style', MST_COST_CALCULATOR_ASSETS.'css/frontend.css', false, filemtime(MST_COST_CALCULATOR_PATH.'/assets/css/frontend.css'), true);

		// enqueue style
		wp_enqueue_style('mts-style');
	}

}