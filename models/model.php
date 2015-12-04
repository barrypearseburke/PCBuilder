<?php
/**
 * 
 * @author Luca
 * @abstract this model is in charge of...
 * @version 1.0
 */
// includes the DB manager
include ("DB/pdoDBManager.php");
include ("DB/DAO/UsersDAO.php");
class Model {
	// private variables
	private $DBManager = null;
	private $dbLink = null;
	private $usersDAO = null;
	
	// public variables
	public $str;
	public $date;
	public $userList;
	public $isUpdateUserFormVisible;
	public $userInfo;
	public $userID;
	public $errormessage;
	public $showerror = False;
	public $showUpdateSuccessMessage = false;
	public $successUpdateMessage;
	
	public function __construct() {
		$this->DBManager = new pdoDBManager ();
		$this->DBManager->openConnection ();
		$this->usersDAO = new UsersDAO ( $this->DBManager );
	}
	public function prepareUserList() {
		$this->userList = $this->usersDAO->get ();
	}
	public function deleteUser($userId) {
		$this->usersDAO->delete ( $userId );
	}
	public function insertNewUser($name, $surname, $email, $password) {
		$this->usersDAO->insertNewUser ( $name, $surname, $email, $password );
	}
	public function prepareUpdateUserForm($userID) {
		$this->isUpdateUserFormVisible = true;
		$this->userInfo = $this->usersDAO->get ( $userID );
		$this->userID = $userID;
	}
	public function updateExistingUser($existingID, $name, $surname, $email) {
		$this->usersDAO->updateExistingUser ( $existingID, $name, $surname, $email );
	}
	public function setUpdateUserErrorMessage($userID) {
		$this->showerror = True;
		$this->errormessage = ERROR_EXISTING_USER;
		$this->prepareUpdateUserForm($userID);
	}
	
	public function setUpdateUserSuccessMessage($userID){
		$this->showUpdateSuccessMessage = True;
		$this->successUpdateMessage = SUCCESS_UPDATE_USER;
		$this->prepareUpdateUserForm($userID);
	}
	
	public function __destruct() {
		$this->DBManager->closeConnection ();
	}
}

?>