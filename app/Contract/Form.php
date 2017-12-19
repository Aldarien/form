<?php
namespace App\Contract;

use App\Definition\Contract;
use Form\Form as FormService;

class Form
{
	use Contract;
	
	protected static function newInstance()
	{
		return new FormService();
	}
	public static function __callstatic($name, $params)
	{
		$instance = self::getInstance();
		if (method_exists($instance, $name)) {
			return call_user_func_array([$instance, $name], $params);
		}
		throw new \BadMethodCallException($name . ' not found in Form.');
	}
}
?>