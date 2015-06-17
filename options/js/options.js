/*global $, jQuery, document, tabid:true, eightdegree_opts, confirm, relid:true*/

jQuery(document).ready(function () {

    if (jQuery('#last_tab').val() === '') {
        jQuery('.eightdegree-opts-group-tab:first').slideDown('fast');
        jQuery('#eightdegree-opts-group-menu li:first').addClass('active');
    } else {
        tabid = jQuery('#last_tab').val();
        jQuery('#' + tabid + '_section_group').slideDown('fast');
        jQuery('#' + tabid + '_section_group_li').addClass('active');
    }

    jQuery('input[name="' + eightdegree_opts.opt_name + '[defaults]"]').click(function () {
        if (!confirm(eightdegree_opts.reset_confirm)) {
            return false;
        }
    });

    jQuery('.eightdegree-opts-group-tab-link-a').click(function () {
        relid = jQuery(this).attr('data-rel');

        jQuery('#last_tab').val(relid);

        jQuery('.eightdegree-opts-group-tab').each(function () {
            if (jQuery(this).attr('id') === relid + '_section_group') {
                jQuery(this).delay(400).fadeIn(1200);
            } else {
                jQuery(this).fadeOut('fast');
            }
        });

        jQuery('.eightdegree-opts-group-tab-link-li').each(function () {
            if (jQuery(this).attr('id') !== relid + '_section_group_li' && jQuery(this).hasClass('active')) {
                jQuery(this).removeClass('active');
            }
            if (jQuery(this).attr('id') === relid + '_section_group_li') {
                jQuery(this).addClass('active');
            }
        });
    });

    if (jQuery('#eightdegree-opts-save').is(':visible')) {
        jQuery('#eightdegree-opts-save').delay(4000).slideUp('slow');
    }

    if (jQuery('#eightdegree-opts-imported').is(':visible')) {
        jQuery('#eightdegree-opts-imported').delay(4000).slideUp('slow');
    }

    jQuery('#eightdegree-opts-form-wrapper').on('change', 'input, textarea, select', function () {
        if(this.id === 'google_webfonts' && this.value === '') return;
        jQuery('#eightdegree-opts-save-warn').slideDown('slow');
    });

    jQuery('#eightdegree-opts-import-code-button').click(function () {
        if (jQuery('#eightdegree-opts-import-link-wrapper').is(':visible')) {
            jQuery('#eightdegree-opts-import-link-wrapper').fadeOut('fast');
            jQuery('#import-link-value').val('');
        }
        jQuery('#eightdegree-opts-import-code-wrapper').fadeIn('slow');
    });

    jQuery('#eightdegree-opts-import-link-button').click(function () {
        if (jQuery('#eightdegree-opts-import-code-wrapper').is(':visible')) {
            jQuery('#eightdegree-opts-import-code-wrapper').fadeOut('fast');
            jQuery('#import-code-value').val('');
        }
        jQuery('#eightdegree-opts-import-link-wrapper').fadeIn('slow');
    });

    jQuery('#eightdegree-opts-export-code-copy').click(function () {
        if (jQuery('#eightdegree-opts-export-link-value').is(':visible')) {jQuery('#eightdegree-opts-export-link-value').fadeOut('slow'); }
        jQuery('#eightdegree-opts-export-code').toggle('fade');
    });

    jQuery('#eightdegree-opts-export-link').click(function () {
        if (jQuery('#eightdegree-opts-export-code').is(':visible')) {jQuery('#eightdegree-opts-export-code').fadeOut('slow'); }
        jQuery('#eightdegree-opts-export-link-value').toggle('fade');
    });
});
