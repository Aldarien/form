<?php
namespace Form;

class Option extends Element
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
	public function setValue($value)
	{
		$this->value = $value;
	}
	public function setHtml($value)
	{
		$this->html = $value;
	}
	public function setSelected(bool $value)
	{
		$this->selected = $value;
	}
}
?>