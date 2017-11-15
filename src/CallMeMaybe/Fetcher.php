<?php
namespace CallMeMaybe;

/**
* Simple class for fetching db data
*/
class Fetcher extends Core\AutoInject {
	
	public function get_settings(){
		$settings = get_option('call_me_maybe_settings', array());
		return array_merge($this->defaults(), $settings);
	}

	public function defaults(){
		return array(
            'enable' => '1',
            'phone_num' => '',
            'show_on_width' => 375,
            'button_width' => 40,
            'button_height' => 40,
            'color_scheme' => 'green',
            'pos_x' => '50%',
            'pos_y' => '100%',
			'offset_x' => '-50%',
            'offset_y' => '-110%',
        );
	}

	
}
