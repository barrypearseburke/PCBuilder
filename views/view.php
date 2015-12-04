<?php
/**
 * 
 * @author Luca
 * @abstract this view is in charge of...
 * @version 1.0
 */
class View {
	private $model;
	private $controller;
	public function __construct($controller, $model) {
		$this->controller = $controller;
		$this->model = $model;
	}
	public function getHTMLOutput() {
		// prepare all the variables for the template
		
		// from the config.inc.php
		$title = TITLE_WEB_APP;
		$quote = QUOTE;
		$footer = FOOTER;
		

		
		// include the basic HTML5 template
		include ("template_html.php");
	}
}

?>