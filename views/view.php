<?php

class View {
	private $model;
	private $controller;
	public function __construct($controller, $model) {
		$this->controller = $controller;
		$this->model = $model;
	}
	public function getHTMLOutput($page) {
		// prepare all the variables for the template



		// include the basic HTML5 template
		include($page);

	}
}
?>