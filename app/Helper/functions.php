<?php
function form(string $method, $params = null) {
	return \App\Contract\Form::{$method}($params);
}
?>