<?php
namespace Form;

class Form
{
	protected $method;
	protected $bootstrap;
	protected $action;
	protected $files;
	
	protected $elements;
	
	public function __construct()
	{
		$this->method = 'post';
		$this->bootstrap = true;
		$this->files = false;
		$this->elements = [];
	}
	public function create($params)
	{
		foreach ($params as $attr => $value) {
			$attr = strtolower($attr);
			if (property_exists($this, $attr)) {
				$this->$attr = $value;
			}
		}
		return $this->show();
	}
	public function show()
	{
		$output = '<form';
		$output .= ' method="' . $this->method . '"';
		$output .= ' action="' . $this->action . '"';
		if ($this->bootstrap) {
			$output .= ' class="form-horizontal"';
		}
		if ($this->files) {
			$output .= ' enctype="multipart/form-data"';
		}
		$output .= '>';
		return $output;
	}
	public function text($params = null)
	{
		$input = new Input();
		$input->set($params);
		$input->setType('text');
		if ($this->bootstrap) {
			$input->addClass('form-control');
		}
		return $input->show();
	}
	public function submit($params = null)
	{
		$input = new Input();
		$input->set($params);
		$input->setType('submit');
		if ($this->bootstrap) {
			$input->addClass('form-control');
		}
		return $input->show();
	}
	public function select($params = null)
	{
		$select = new Select();
		$select->set($params);
		if ($this->bootstrap) {
			$select->addClass('form-control');
		}
		return $select->show();
	}
	public function endSelect()
	{
		return '</select>';
	}
	public function option($params = null)
	{
		$option = new Option();
		$option->set($params);
		if ($this->bootstrap) {
			$option->addClass('form-control');
		}
		return $option->show();
	}
	public function end()
	{
		return '</form>';
	}
}
?>