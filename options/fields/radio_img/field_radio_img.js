/*global jQuery*/
/*
 *
 * EightDegree_Options_radio_img function
 * Changes the radio select option, and changes class on images
 *
 */
function eightdegree_radio_img_select(relid, labelclass) {
    jQuery(this).prev('input[type="radio"]').prop('checked');
    jQuery('.eightdegree-radio-img-' + labelclass).removeClass('eightdegree-radio-img-selected');
    jQuery('label[for="' + relid + '"]').addClass('eightdegree-radio-img-selected');
}
