<?php

namespace CallMeMaybe\Core;

/**
 * Class that auto injects service locator object
 */
class AutoInject {

    protected $plugin;

	public function inject( $plugin ){
        $this->plugin = $plugin;
    }
}