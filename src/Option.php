<?php
namespace Form;

class Option
{
	protected $value;
	protected $html;
	protected $selected;
	
	public function show()
	{
		$output = '<option value="' . $this->value . '"';
		if ($this->selected) {
			$output .= ' selected="selected"';
		}
		$output .= '>' . $this->html . '</option>';
		return $output;
	}
}
?>