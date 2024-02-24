<?php

/*
Plugin Name: MTS Cost Calculator
Plugin URI: https://webmkit.com/mts-cost-calculator
Author: webmk
Author URI: https://webmkit.com
Description: something
Version:1.0.0
Text Domain: mts
Domain Path: /languages

*/

if(! defined('ABSPATH')){
	exit;
}


require_once __DIR__ . '/vendor/autoload.php';



/** 
* The main plugin class
*/
final class MstCostCalculator{

	/**
	* Plugin Version
	* @var string
	*/
	const mts_cost_calculator_version = '1.0.0';

	/**
	* class constructor
	*/
	private function __construct(){
		$this->define_constants();
		register_activation_hook( __FILE__ , [$this, 'activate'] );
		add_action('plugins_loaded', [$this, 'init_plugin']);
	}


	/**
	* Initailize a single instance
	* @return \MstCostCalculator
	*/
	public static function init(){
		static $instance = false;
		if(! $instance ){
			$instance = new self();
		}
		return $instance;
	}

	public function define_constants(){
		define('MST_COST_CALCULATOR_VERSION', self::mts_cost_calculator_version);
		define('MST_COST_CALCULATOR_FILE', __FILE__ );
		define('MST_COST_CALCULATOR_PATH', __DIR__ );
		define('MST_COST_CALCULATOR_URL', plugins_url('', MST_COST_CALCULATOR_FILE) );
		define('MST_COST_CALCULATOR_ASSETS', MST_COST_CALCULATOR_URL . '/assets');
	}

	public function activate(){
		$installed = get_option('mts_cost_calculator_installed');
		if(! $installed){
			update_option('mts_cost_calculator_installed', time() );
		}
		update_option('mts_cost_calculator__version', MST_COST_CALCULATOR_VERSION );
	}

	public function init_plugin(){

		if( is_admin() ){
			new Mts\Admin();	
		}else{
			new Mts\Frontend();
		}

		// load plugin assets
		new Mts\Assets();

	}

}



/**
* Initializes the main plugin
* @return \MstCostCalculator
*/
function mts_cost_calculator(){
	return MstCostCalculator::init();
}
mts_cost_calculator();