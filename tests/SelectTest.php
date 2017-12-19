<?php
use PHPUnit\Framework\TestCase;
use Form\Select;

class SelectTest extends TestCase
{
	public function testShow()
	{
		$output = '<select id="id" name="name" class="class">';
		$select = new Select();
		$select->set(['id' => 'id', 'name' => 'name', 'class' => 'class']);
		$result = $select->show();
		
		$this->assertEquals($output, $result);
	}
}
?>