<?php 
namespace Mts\Admin;
/** 
* The Menu Handler class
*/
class Menu{
	function __construct(){
		add_action('admin_menu', [$this, 'admin_menu'] );
	}

	public function admin_menu(){
		add_menu_page( __('Mts Cost Calculator','mts'), __('Mts Cost Calculator', 'mts'), 'manage_options', 'mts-cost-calculator', [$this, 'plugin_page'], 'dashicons-welcome-learn-more' );
	}

	public function plugin_page(){
		echo "Dashboard";
	}
}