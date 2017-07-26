jQuery(document).ready(function () {
    jQuery('#vbsso_menu').width(
        jQuery('#vbsso_menu').parent().parent().width() - jQuery('#vbsso_avatar').outerWidth(true) - 1 // -1 for Firefox - ????
    );

    jQuery('#vbsso_stats_notifications').click(function(){
        if (!jQuery('#vbsso_stats_holder').is(":visible")) {
            jQuery(this).css('background-image', 'url(wp-content/plugins/vbsso/assets/images/arrow_up.png)');
            jQuery('#vbsso_stats_holder').width(jQuery(this).parent().width()).slideDown('fast');
        } else {
            jQuery('#vbsso_stats_holder').slideUp('fast');
            jQuery(this).css('background-image', 'url(wp-content/plugins/vbsso/assets/images/arrow_down.png)');
        }
    });
});