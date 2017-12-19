<?php
use PHPUnit\Framework\TestCase;
use Form\Option;

class OptionTest extends TestCase
{
	public function testShow()
	{
		$output = '<option value="1" selected="selected">2</option>';
		$option = new Option();
		$option->set(['value' => 1, 'selected' => true, 'html' => 2]);
		$result = $option->show();
		
		$this->assertEquals($output, $result);
	}
}
?>