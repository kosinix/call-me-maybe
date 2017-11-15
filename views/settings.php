<div class="wrap">
    <h1><?php _e('Call Me Maybe Settings', 'call-me-maybe'); ?></h1>
    <?php 
    // parse_str('limit=&tag=1', $out);
    // print_r(http_build_query($out)); ?>
    <form id="call-me-maybe-form" class="call-me-maybe-form" action="">
        
        <div>
            <div>
                <label for="enable"><?php _e('Show Button', 'call-me-maybe'); ?></label>
            </div>
            <div>
                <div>
                    <input type="hidden" name="enable" value="0">
                    <input <?php checked($enable, '1'); ?> type="checkbox" name="enable" id="enable" value="1">
                    <label for="enable"><?php _e('Enable', 'call-me-maybe'); ?></label>
                </div>
            </div>
        </div>
        <div>
            <div>
                <label for="phone_num"><?php _e('Phone', 'call-me-maybe'); ?></label>
            </div>
            <div>
                <div>
                    <input id="phone_num" name="phone_num" type="text" value="<?php echo esc_attr($phone_num); ?>" placeholder="">
                </div>
            </div>
        </div>
        <div>
            <div>
                <label for="show_on_width"><?php _e('Show On Width', 'call-me-maybe'); ?></label>
            </div>
            <div>
                <div>
                    <label for="show_on_width"><span><?php _e('Show only if screen is less than or equal to:', 'call-me-maybe'); ?></span></label> <br>
                    <input id="show_on_width" name="show_on_width" type="text" value="<?php echo esc_attr($show_on_width); ?>" placeholder="">
                    <span>px</span>
                </div>
            </div>
        </div>
        <div>
            <div>
                <label for="button_width"><?php _e('Properties', 'call-me-maybe'); ?></label>
            </div>
            <div>
                <div>
                    <label for="button_width"><span><?php _e('Width:', 'call-me-maybe'); ?></span></label> <br>
                    <input id="button_width" name="button_width" type="text" value="<?php echo esc_attr($button_width); ?>" placeholder="">
                    <span>px</span>
                </div>
                <div>
                    <label for="button_height"><span><?php _e('Height:', 'call-me-maybe'); ?></span></label> <br>
                    <input id="button_height" name="button_height" type="text" value="<?php echo esc_attr($button_height); ?>" placeholder="">
                    <span>px</span>
                </div>
                <div>
                    <label for="color_scheme"><span><?php _e('Color Scheme:', 'call-me-maybe'); ?></span></label> <br>
                    <select name="color_scheme" id="color_scheme">
                        <option <?php selected($color_scheme, 'green'); ?> value="green"><?php _e('Green', 'call-me-maybe'); ?></option>
                        <option <?php selected($color_scheme, 'blue'); ?> value="blue"><?php _e('Blue', 'call-me-maybe'); ?></option>
                        <option <?php selected($color_scheme, 'light'); ?> value="light"><?php _e('Light', 'call-me-maybe'); ?></option>
                        <option <?php selected($color_scheme, 'dark'); ?> value="dark"><?php _e('Dark', 'call-me-maybe'); ?></option>
                        <option <?php selected($color_scheme, 'yellow'); ?> value="yellow"><?php _e('Yellow', 'call-me-maybe'); ?></option>
                        <option <?php selected($color_scheme, 'pink'); ?> value="pink"><?php _e('Pink', 'call-me-maybe'); ?></option>
                    </select>
                </div>
            </div>
        </div>
        <div>
            <div>
                <label for="button_width"><?php _e('Position', 'call-me-maybe'); ?></label>
            </div>
            <div>
                <div>
                    <label for="pos_x"><span><?php _e('Left:', 'call-me-maybe'); ?></span></label> <br>
                    <input id="pos_x" name="pos_x" type="text" value="<?php echo esc_attr($pos_x); ?>" placeholder="From left of screen..."> + 
                    <input id="offset_x" name="offset_x" type="text" value="<?php echo esc_attr($offset_x); ?>" placeholder="Offset X">
                </div>
                <div>
                    <label for="pos_y"><span><?php _e('Top', 'call-me-maybe'); ?></span></label> <br>
                    <input id="pos_y" name="pos_y" type="text" value="<?php echo esc_attr($pos_y); ?>" placeholder="From top of screen..."> + 
                    <input id="offset_y" name="offset_y" type="text" value="<?php echo esc_attr($offset_y); ?>" placeholder="Offset Y">
                </div>
                
            </div>
        </div>
        
        <button id="call-me-maybe-submit" class="button-primary" type="submit"><?php _e('Save Settings', 'call-me-maybe'); ?></button>
        <button id="call-me-maybe-defaults" class="button-secondary" type="submit"><?php _e('Restore Defaults', 'call-me-maybe'); ?></button>
    </form>
</div>
