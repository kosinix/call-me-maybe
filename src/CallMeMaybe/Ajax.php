<?php

namespace CallMeMaybe;

class Ajax extends Core\AutoInject {
    function run(){
        

        // Save
        add_action( 'wp_ajax_call_me_maybe_save', array($this, 'saveData'));

        // Restore
        add_action( 'wp_ajax_call_me_maybe_restore', array($this, 'resetData'));
    }
    
    function saveData (){
        $post = $_POST;

        $this->_nonce_check($post);

        if(!isset($post['fields'])){

            wp_send_json(__('Missing fields.', 'call-me-maybe'), 400);
        }

        $fields = $post['fields'];

        // wp_send_json(__('Test ajax error.', 'call-me-maybe'), 400);
        // throw new \Exception('Test server error');

        $data = array();

        array_walk($fields, function($value, $key) use(&$data){
            $data[$value['name']] = $value['value'];
        });

        update_option('call_me_maybe_settings', $data);

        wp_send_json(
            array(
                'message' => __('Changes saved', 'call-me-maybe' ),
                'data' => $data
            )
        );
        
    }

    function resetData(){
        $post = $_POST;

        $this->_nonce_check($post);

        
        // wp_send_json(__('Test ajax error.', 'call-me-maybe'), 400);
        // throw new \Exception('Test server error');
        
        delete_option('call_me_maybe_settings');
        
        wp_send_json(
            array(
                'message' => __('Default settings restored', 'call-me-maybe' ),
                'data' => $result
            )
        );
        
    }
    
    protected function _nonce_check($post){
        if ( false === wp_verify_nonce( $post['nonce'], 'call_me_maybe_ajax' ) ) {
            wp_send_json(__('Wrong NONCE value.', 'call-me-maybe'), 400);
        }
    }

    
}