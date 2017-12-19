<?php
use PHPUnit\Framework\TestCase;

class FormTest extends TestCase
{
	public function testFormCreate()
	{
		$output = '<form method="post" action="submit.php" class="form-horizontal">';
		$result = form('create', ['action' => 'submit.php']);
		
		$this->assertEquals($output, $result);
	}
	public function testFormEnd()
	{
		$output = '</form>';
		$result = form('end');
		
		$this->assertEquals($output, $result);
	}
}
?>