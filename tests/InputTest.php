<?php
use PHPUnit\Framework\TestCase;
use Form\Input;

class InputTest extends TestCase
{
	public function testShow()
	{
		$output = '<input type="text" id="id" name="name" class="class" value="1" />';
		$input = new Input();
		$input->set(['type' => 'text', 'id' => 'id', 'name' => 'name', 'value' => 1, 'class' => 'class']);
		$result = $input->show();
		
		$this->assertEquals($output, $result);
	}
}
?>