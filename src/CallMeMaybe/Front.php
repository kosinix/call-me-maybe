<?php
namespace CallMeMaybe;

use \DomDocument;

class Front extends Core\AutoInject {
	
	// Run should only contain hooks and filters
	public function run( ){
		$settings = $this->plugin->get('fetcher')->get_settings();
		
		if($settings['enable']){
			// Add custom css
			add_action('wp_head', array($this, 'custom_css' ));

			// Add markup
			add_action('wp_footer', array($this, 'wp_footer' ));
		}
		
    }

	public function custom_css(){
		$settings = $this->plugin->get('fetcher')->get_settings();

		switch($settings['color_scheme']){
			case 'blue':
				$settings['bg_color'] = 'rgba(0, 115, 170, 0.9)';
				$settings['icon_color'] = '#fff';
				$settings['border_color'] = '#fff';
				break;
			case 'dark':
				$settings['bg_color'] = 'rgba(18, 19, 20, 0.9)';
				$settings['icon_color'] = '#fff';
				$settings['border_color'] = '#fff';
				break;
			case 'light':
				$settings['bg_color'] = 'rgba(255, 255, 255, 0.9)';
				$settings['icon_color'] = '#222222';
				$settings['border_color'] = '#222222';
				break;
			case 'yellow':
				$settings['bg_color'] = 'rgba(255, 185, 0, 0.9)';
				$settings['icon_color'] = '#fff';
				$settings['border_color'] = '#fff';
				break;
			default:
				$settings['bg_color'] = 'rgba(0, 153, 0, 0.9)';
				$settings['icon_color'] = '#fff';
				$settings['border_color'] = '#fff';
		}
		$this->plugin->get('view')->render('styles.php', $settings);
		
	}

	public function wp_footer(){
		$settings = $this->plugin->get('fetcher')->get_settings();
		
		$this->plugin->get('view')->render('call-button.php', $settings);
	}

}
