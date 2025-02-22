<?php
class EightDegree_Options_info {

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
        $class = (isset($this->field['class'])) ? ' ' . $this->field['class'] : '';
        echo '</td></tr></table><div class="eightdegree-opts-info-field' . $class . '">' . $this->field['desc'] . '</div><table class="form-table no-border"><tbody><tr><th></th><td>';
    }
}
