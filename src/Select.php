<?php
namespace Form;

class Select extends Element
{
	public function show()
	{
		return '<select' . parent::show() . '>';
	}
}
?>