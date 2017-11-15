jQuery(document).ready(function($){
    var $form = $('#call-me-maybe-form'),
        $submitBtn = $('#call-me-maybe-submit'),
        $defaultBtn = $('#call-me-maybe-defaults');

    $submitBtn.on('click', function(e){
        e.preventDefault();

        var fields = $form.serializeArray();

        // console.log(fields);

        // Disable input 
        disableForm($form);
        $submitBtn.data('html', $submitBtn.html()).html('Saving... Please wait...');
        
        var jqXHR = $.post(
            ajaxurl, // Automatically added by WordPress in wp-admin
            {
                action: 'call_me_maybe_save',
                nonce: call_me_maybe_vars.nonce,
                fields: fields
            },
            null,
            'json'
        ).done(function(result){ // done
            console.log(result);
        }).fail(function(jqXHR, textStatus, error){ // err
            var error = jqXHR.responseJSON || error;
            console.log('error', error);
        }).always(function(result){
            enableForm($form);
            $submitBtn.html( $submitBtn.data('html') );
        });

    });
    
    $defaultBtn.on('click', function(e){
        e.preventDefault();

        // Disable input  
        disableForm($form);
        $defaultBtn.data('html', $defaultBtn.html()).html('Restoring... Please wait...');

        var jqXHR = $.post(
            ajaxurl, // Automatically added by WordPress in wp-admin
            {
                action: 'call_me_maybe_restore',
                nonce: call_me_maybe_vars.nonce
            },
            null,
            'json'
        ).done(function(result){ // done
            console.log(result);
            window.location.reload(false); 
        }).fail(function(jqXHR, textStatus, error){ // err
            var error = jqXHR.responseJSON || error;
            console.log('Error', error);
        }).always(function(result){
            enableForm($form);
            $defaultBtn.html( $defaultBtn.data('html') );
        });
    });

    function disableForm($form){
        $form.find('input, select, checkbox, radio, textarea, button').prop('disabled', true);
    }
    function enableForm($form){
        $form.find('input, select, checkbox, radio, textarea, button').prop('disabled', false);
    }
});