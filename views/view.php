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
		
		// from the model
		$date = $this->model->date;
		// create the user list
		$userList = $this->model->userList;
		
		$userUpdateForm = "";
		$isUpdateUserFormVisible = false;
		$username = "";
		$name = "";
		$email = "";
		$idUser = "";
		
		$showerror = $this->model->showerror;
		$errorMessage = $this->model->errormessage;
		$successUpdateMessage = $this->model->successUpdateMessage;
		$showUpdateSuccessMessage = $this->model->showUpdateSuccessMessage;
		
		if ($this->model->isUpdateUserFormVisible) {
			$isUpdateUserFormVisible = true;
			$username = $this->model->userInfo ["name"];
			$surname = $this->model->userInfo ["surname"];
			$email = $this->model->userInfo ["email"];
			$idUser = $this->model->userID;
		}
		
		// include the basic HTML5 template
		include ("template_html.php");
	}
}

?>