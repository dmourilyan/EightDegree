<?php
class EightDegree_Options_date {

    /**
     * Field Constructor.
     *
     * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
     *
     * @since EightDegree_Options 1.0.0
    */
    function __construct($field = array(), $value ='', $parent) {
        $this->field = $field;
		$this->value = $value;
		$this->args = $parent->args;
    }

    /**
     * Field Render Function.
     *
     * Takes the vars and outputs the HTML for the field in the settings
     *
     * @since EightDegree_Options 1.0.0
    */
    function render() {
        $class = (isset($this->field['class'])) ? $this->field['class'] : '';
        echo '<input type="text" id="' . $this->field['id'] . '" name="' . $this->args['opt_name'] . '[' . $this->field['id'] . ']" value="' . $this->value . '" class="' . $class . ' eightdegree-opts-datepicker" />';
        echo (isset($this->field['desc']) && !empty($this->field['desc'])) ? ' <span class="description">' . $this->field['desc'].'</span>' : '';
    }

    /**
     * Enqueue Function.
     *
     * If this field requires any scripts, or css define this function and register/enqueue the scripts/css
     *
     * @since EightDegree_Options 1.0.0
    */
    function enqueue() {
        wp_enqueue_style('eightdegree-opts-jquery-ui-css');
        wp_enqueue_script(
            'eightdegree-opts-field-date-js', 
            EightDegree_OPTIONS_URL . 'fields/date/field_date.js', 
            array('jquery', 'jquery-ui-core', 'jquery-ui-datepicker'),
            time(),
            true
        );
    }
}
