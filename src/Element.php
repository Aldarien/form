<?php
namespace Form;

class Element
{
	protected $id;
	protected $name;
	protected $classes;
	
	public function show()
	{
		$output = ' id="' . $this->id . '" name="' . $this->name . '"';
		if ($this->classes != '') {
			$output .= ' class="' . $this->classes . '"';
		}
		return $output;
	}
	public function set(array $params)
	{
		foreach ($params as $attr => $value) {
			$method = 'add' . str_replace('_', '', ucwords($attr));
			if (method_exists($this, $method)) {
				$this->{$method}($value);
				continue;
			}
			$method = 'set' . str_replace('_', '', ucwords($attr));
			if (method_exists($this, $method)) {
				$this->{$method}($value);
				continue;
			}
		}
	}
	public function addClass(string $class)
	{
		if ($this->classes != '' and $this->classes != null) {
			$classes = explode(' ', $this->classes);
		} else {
			$classes = [];
		}
		$classes []= $class;
		$this->classes = implode(' ', $classes);
	}
	public function setId(string $id)
	{
		$this->id = $id;
	}
	public function setName(string $name)
	{
		$this->name = $name;
	}
}
?>