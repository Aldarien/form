<?php
namespace Form;

class Input extends Element
{
	protected $type;
	protected $value;
	
	public function show()
	{
		$output = '<input type="' . $this->type . '"' . parent::show();
		if ($this->value != '') {
			$output .= ' value="' . $this->value . '"';
		}
		$output .= '>';
		return $output;
	}
	public function setValue(string $value)
	{
		$this->value = $value;
	}
}
?>