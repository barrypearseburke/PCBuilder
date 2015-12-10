<?php
/**
 * 
 * @author Eoin and barry
 * @abstract this controller is in charge of...
 * @version 1.0
 */
include "validationSuite.php";
include "login_success.php";
class Controller {
	private $model;
	private $action;
	public function __construct($model, $action) {
		$this->model = $model;
		$this->action = $action;
		
		switch ($action) {
			case "delete" :
				$this->deleteUser ();
				break;
			case "insertUser" :
				$this->insertNewUser ();
				break;
			case "updateUser" :
				$this->prepareUserForm ();
				break;
			case "updateUserInfo" :
				$this->updateUserInfo ();
				break;
			case "login":
				$this->login();
		}
		
		// default actions// we dont want one
		//$this->defaultActions ();
	}

	public function login(){
		if (!empty ($_REQUEST ["username"]) && !empty ($_REQUEST ["password"])){
		//send email to validator
		$_REQUEST ["password"] = md5($_REQUEST ["password"]);
		$this->model->login($_REQUEST ["username"], $_REQUEST ["password"]);


	}

	}

	public function deleteUser() {
		if (! empty ( $_REQUEST ["idUser"] ))
			if (is_numeric ( $_REQUEST ["idUser"] ))
				if ($_REQUEST ["idUser"] >= 0)
					$this->model->deleteUser ( $_REQUEST ["idUser"] );
	}
	public function insertNewUser() {
		// validate the inputs (name, surname, email, password)
		if (!empty ($_REQUEST ["fname"]) && !empty ($_REQUEST ["lname"]) && !empty ($_REQUEST ["email"]) && !empty ($_REQUEST ["password"])) {

			//md5 the password

			$_REQUEST ["password"] = md5($_REQUEST ["password"]);
			$this->model->insertNewUser($_REQUEST ["fname"], $_REQUEST ["lname"], $_REQUEST ["email"], $_REQUEST ["password"]);
		}
	}
	public function prepareUserForm() {
		if (! empty ( $_REQUEST ["idUser"] ))
			if (is_numeric ( $_REQUEST ["idUser"] ))
				if ($_REQUEST ["idUser"] >= 0)
					$this->model->prepareUpdateUserForm ( $_REQUEST ["idUser"] );
	}
	public function updateUserInfo() {
		// validate the inputs (name, surname, email, password)
		if (! empty ( $_REQUEST ["idUser"] ) && ! empty ( $_REQUEST ["name"] ) && ! empty ( $_REQUEST ["surname"] ) && ! empty ( $_REQUEST ["email"] )) {
			$this->model->isUpdateUserFormVisible = True;
			
			// create an instance of the validation function suite
			$validationSuite = new validation_functions ();
			
			// validate email
			if ($validationSuite->isEmailValid ( $_REQUEST ["email"] )) {
				$this->model->updateExistingUser ( $_REQUEST ["idUser"], $_REQUEST ["name"], $_REQUEST ["surname"], $_REQUEST ["email"] );
				$this->model->setUpdateUserSuccessMessage ($_REQUEST ["idUser"]);
			} else {
				$this->model->setUpdateUserErrorMessage ($_REQUEST ["idUser"]);
			}
		}
	}
	public  function login_success(){
		$login_success = new login_success();
		$login_success->login();
		}

	public function sessionslogin($uname){
		$ses = new Session();
		$ses->login($uname);

	}
//	public function defaultActions() {
//		$this->model->date = date ( "F j, Y, g:i a" );
//		$this->model->prepareUserList ();
//	}
}
?>