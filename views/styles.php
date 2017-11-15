<style>
.call-me-maybe {
    display: none;
}
@media screen and (max-width: <?php echo (int)$show_on_width; ?>px) { /* Screen <= 320 */
    .call-me-maybe {
        position: fixed;
        left: <?php echo strip_tags($pos_x); ?>;
        transform: translate(<?php echo strip_tags($offset_x); ?>, <?php echo strip_tags($offset_y); ?>);
        top: <?php echo strip_tags($pos_y); ?>;
        width: <?php echo (int)$button_width; ?>px;
        height: <?php echo (int)$button_height; ?>px;
        display: block;
        background: <?php echo strip_tags($bg_color); ?>;
        border-radius: 50px;
        padding: 8px;
        border: 2px solid <?php echo strip_tags($border_color); ?>;
        z-index: 9999;
    }
    .call-me-maybe svg path {
        fill: <?php echo strip_tags($icon_color); ?>;
    }
}
</style>