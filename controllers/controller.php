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
			case "addNewPart":
				$this->newPart();
				break;
			case "logout":
				$this->logout();
				break;
			case "displayparts";
				$this->getparts();
				break;

			case "resetpw";
				$this->resetpw();
				break;


			case "upload";
				$this->upload();
				break;
		}

	}


	public function upload(){
//w3 schools file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check !== false) {

		$uploadOk = 1;
	} else {

		$this->model->errormessage = UPLOADSUCCESS;
		$this->model->bademail();

	}
}

if ($uploadOk == 0) {
	echo "Sorry, your file was not uploaded.";
} else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

		$this->model->errormessage = UPLOADSUCCESS;
		$this->model->bademail();
	} else {
		$this->model->errormessage = UPLOADFAIL;
		$this->model->bademail();
	}
}


}



	public  function resetpw(){


		if (!empty ($_REQUEST ["fname"]) && !empty ($_REQUEST ["lname"]) && !empty ($_REQUEST ["email"]) && !empty ($_REQUEST ["password"])) {

			//md5 the password



			if($this -> isemailvalid($_REQUEST ["email"]));
			{
				$_REQUEST ["password"] = md5($_REQUEST ["password"]);

				$this->model->resetpw($_REQUEST ["fname"], $_REQUEST ["lname"], $_REQUEST ["email"], $_REQUEST ["password"]);
			}}
		else {

			$this->model->errormessage = BADEMAIL;
			$this->model->bademail();
		}

	}




	public function getparts()
	{
		if (empty ($_REQUEST ["type"])) {
			$_REQUEST ["type"] = "is not null";

		} else {

			$_REQUEST ["type"] = "='{$_REQUEST ["type"]}'";
		} //this is so that if there is a value, It is entered into the db where type =value, and if there isent a value, the same sql statment will work without changes


		if (empty ($_REQUEST ["Component"])) {
			$_REQUEST ["Component"] = "is not null";

		} else {

			$_REQUEST ["Component"] = "='{$_REQUEST ["Component"]}'";
		}


		if (empty ($_REQUEST ["TDP"])) {
			$_REQUEST ["TDP"] = "is not null";

		} else {

			$_REQUEST ["TDP"] = "='{$_REQUEST ["TDP"]}'";


		}

		if (empty ($_REQUEST ["Info"])) {
			$_REQUEST ["Info"] = "is not null";

		} else {

			$_REQUEST ["Info"] = "='{$_REQUEST ["Info"]}'";
		}

		if (empty ($_REQUEST ["price"])) {
			$_REQUEST ["price"] = "is not null";

		} else {

			$_REQUEST ["price"] = "='{$_REQUEST ["price"]}'";

		}
		$username = "'{$_SESSION['username']}'";

		$this->model->getparts($username, $_REQUEST ["type"], $_REQUEST ["Component"], $_REQUEST ["TDP"], $_REQUEST ["Info"], $_REQUEST ["price"]);

	}



	public function login(){
		if (!empty ($_REQUEST ["username"]) && !empty ($_REQUEST ["password"])){
		//send email to validator

			if($this -> isemailvalid($_REQUEST ["username"]));
			{


				$_REQUEST ["password"] = md5($_REQUEST ["password"]);
				$this->model->login($_REQUEST ["username"], $_REQUEST ["password"]);
			}

	}
		else {

			$this->model->errormessage = BADEMAIL;
			$this->model->bademail();
		}
	}

	public function newPart(){

		if (!empty ($_REQUEST ["type"]) && !empty ($_REQUEST ["Component"]) && !empty ($_REQUEST ["TDP"]) && !empty ($_REQUEST ["Info"]) && !empty ($_REQUEST ["price"]))

            if (isset($_SESSION['username'])) {
                $owner = $_SESSION["username"];
                //send to model
                $this->model->newPart($owner, $_REQUEST ["type"], $_REQUEST ["Component"], $_REQUEST ["TDP"], $_REQUEST ["Info"], $_REQUEST ["price"]);

            }
            //tell them error
        }

	public function logout()
	{
//		$this->logout = LOGOUT;
//		$this->logoutvar = true;
		$session = new Session();
		$session->destroy();
	}

	public function deleteUser() {
		if (! empty ( $_REQUEST ["idUser"] ))
			if (is_numeric ( $_REQUEST ["idUser"] ))
				$_REQUEST ["idUser"] = (int)($_REQUEST ["idUser"]);
				if ($_REQUEST ["idUser"] >= 0)
					$this->model->deleteUser ( $_REQUEST ["idUser"] );
	}
	public function insertNewUser() {
		// validate the inputs (name, surname, email, password)
		if (!empty ($_REQUEST ["fname"]) && !empty ($_REQUEST ["lname"]) && !empty ($_REQUEST ["email"]) && !empty ($_REQUEST ["password"])) {

			//md5 the password



			if($this -> isemailvalid($_REQUEST ["username"]));
			{
				$_REQUEST ["password"] = md5($_REQUEST ["password"]);

				$this->model->insertNewUser($_REQUEST ["fname"], $_REQUEST ["lname"], $_REQUEST ["email"], $_REQUEST ["password"]);
		}}
		else {

			$this->model->errormessage = BADEMAIL;
			$this->model->bademail();
		}

	}
	public function prepareUserForm() {
		if (! empty ( $_REQUEST ["idUser"] ))
			if (is_numeric ( $_REQUEST ["idUser"] ))
				if ($_REQUEST ["idUser"] >= 0)
					$this->model->prepareUpdateUserForm ( $_REQUEST ["idUser"] );
	}

	public  function login_success(){
		$login_success = new login_success();
		$login_success->login();
		}

	public function sessionslogin($uname){
		$ses = new Session();
		$ses->login($uname);
	}

	public function isemailvalid($validemail)
	{
		// create an instance of the validation function suite
		$validationSuite = new validation_functions ();

		// validate email
		if (($validationSuite->isEmailValid ( $validemail))) {

			return true;
		}
		else
			$this->model->bademail();
			return false;
	}
}
?>