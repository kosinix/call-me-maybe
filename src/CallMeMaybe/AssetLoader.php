<?php

namespace CallMeMaybe;
/**
* Class for handling styles and scripts
*/
class AssetLoader extends Core\AutoInject{
	public function run() {
		
		// Admin scripts
		add_action( 'admin_enqueue_scripts', array($this, 'admin_scripts'), 10);
	}

    public function admin_scripts($hook){
        if( $hook == 'settings_page_call-me-maybe' ){ // Limit loading to certain admin pages
            
            wp_enqueue_style( 'call-me-maybe-style', $this->plugin->get('url').'css/style.css', array(), $this->version  );

            // Allow translation to script texts
            wp_register_script( 'call-me-maybe-script', $this->plugin->get('url').'js/script.js', array('jquery'), $this->plugin->get('version') );
            wp_localize_script( 'call-me-maybe-script', 'call_me_maybe_vars',
                array(
                    'nonce' => wp_create_nonce( 'call_me_maybe_ajax' )
                )
            );
            wp_enqueue_script( 'call-me-maybe-script' );
        }
    }
}