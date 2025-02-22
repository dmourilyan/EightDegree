<?php
class EightDegree_Validation_no_html extends EightDegree_Options{	

	/**
	 * Field Constructor.
	 *
	 * Required - must call the parent constructor, then assign field and value to vars, and obviously call the render field function
	 *
	 * @since EightDegree_Options 1.0.0
	*/
	function __construct($field, $value, $current) {
		parent::__construct();
		$this->field = $field;
		$this->field['msg'] = (isset($this->field['msg'])) ? $this->field['msg'] : __('You must not enter any HTML in this field, all HTML tags have been removed.', EightDegree_TEXT_DOMAIN);
		$this->value = $value;
		$this->current = $current;
		$this->validate();
	}

	/**
	 * Field Render Function.
	 *
	 * Takes the vars and validates them
	 *
	 * @since EightDegree_Options 1.0.0
	*/
	function validate() {
		$newvalue = strip_tags($this->value);

		if($this->value != $newvalue){
			$this->warning = $this->field;
		}

		$this->value = $newvalue;
	}
}
