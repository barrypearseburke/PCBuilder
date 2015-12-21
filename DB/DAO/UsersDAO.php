<?php
/**
 * @author barry and eoin
 * definition of the User DAO (database access object)
 */
include_once "Session.php";

class UsersDAO {
	public $ses;
    private $dbManager;
	private $userstable = USERSTABLE;
	private $parts = PARTS;
	public $results;
	function UsersDAO($DBMngr) {
		$this->dbManager = $DBMngr;
		$this->ses = new Session();
	}
	public function get($id = null) {
		$sql = "SELECT * ";
		$sql .= "FROM $this->userstable";
		if ($id != null)
			$sql .= "WHERE users.id=? ";
		$sql .= "ORDER BY users.fname ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $id, $this->dbManager->INT_TYPE );
		$this->dbManager->executeQuery ( $stmt );
		
		if (empty ( $id ))
			$result = $this->dbManager->fetchResults ( $stmt );
		else
			$result = $this->dbManager->getNextRow ( $stmt );
		
		return ($result);
	}

	public function getparts($owner,$type,$name,$tdp,$info,$price){
		$sql = "SELECT * ";
		$sql .= "FROM $this->parts ";
		$sql .= "WHERE owner = {$owner} and type {$type} and componentname {$name} and tdp {$tdp} and info {$info} and  price {$price}";

		$stmt = $this->dbManager->prepareQuery ( $sql );

		 //we cant use binds. This is because binds place ' ' around the value. However, in the controller we have already added
		// $varname = "= '{$varname}'" . The reason for this is , that if its empty, it will replace the value of $varname
		//with "is not null". Using binds dosent work as it always will try and place '' arround everything.
		//3 hours of debbuging right there.



//		//binds
//	$this->dbManager->bindValue ( $stmt, 1, $owner, $this->dbManager->STRING_TYPE );
//
//		$this->dbManager->bindValue ( $stmt, 2, $type, $this->dbManager->STRING_TYPE );
//		$this->dbManager->bindValue ( $stmt, 3, $name, $this->dbManager->STRING_TYPE );
//
//		$this->dbManager->bindValue ( $stmt, 4, $tdp, $this->dbManager->STRING_TYPE );
//
//		$this->dbManager->bindValue ( $stmt, 5, $info, $this->dbManager->STRING_TYPE );
//
//		$this->dbManager->bindValue ( $stmt, 6, $price, $this->dbManager->INT_TYPE );




		 $this->dbManager->executeQuery ( $stmt );

		//get parts.
		$this->results = $this->dbManager->fetchResults ( $stmt );


		return $this->results;
	}


	public function newPart($owner,$type,$name,$tdp,$info,$price){

		$sql = "INSERT INTO $this->parts";
		$sql .= "(owner, type, componentname, tdp,info,price) ";
		$sql .= "VALUES (?,?,?,?,?,?)";

		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue($stmt, 1, $owner, $this->dbManager->STRING_TYPE);
		$this->dbManager->bindValue($stmt, 2, $type, $this->dbManager->STRING_TYPE);
		$this->dbManager->bindValue ( $stmt, 3, $name, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 4, $tdp, $this->dbManager->STRING_TYPE );

		$this->dbManager->bindValue ( $stmt, 5, $info, $this->dbManager->STRING_TYPE );

		$this->dbManager->bindValue ( $stmt, 6, $price, $this->dbManager->INT_TYPE );

		$this->dbManager->executeQuery ( $stmt );

		if ($this->dbManager->getNumberOfAffectedRows ( $stmt ) == 1) {
			return (true);
		} else
			return (false);
	}



	public function login($username,$password)
	{

		$sql = "SELECT fname ";
		$sql .= "FROM $this->userstable ";
		$sql .= "where email = ? and password = ?";


		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $username, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 2, $password, $this->dbManager->STRING_TYPE );

		$this->dbManager->executeQuery ( $stmt );

        if ($this->dbManager->getNumberOfAffectedRows ( $stmt ) == 1) {
            //start session

			while ($row = $this->dbManager->getNextRow($stmt)) {
				$fname = $row['fname'];

				$this->addNameSession($fname);

			}
            $this->sessionslogin($username);

			return (true);
        } else
            return (false);
	}

	public function sessionslogin($uname){

		$this->ses->login($uname);

	}

	public function addNameSession($fname)
	{

		$this->ses->addNameSession($fname);

	}

	public function insertNewUser($fname, $lname, $email, $password)
	{
		$sql = "INSERT INTO $this->userstable";
		$sql .= "(fname, lname, email, password) ";
		$sql .= "VALUES (?,?,?,?)";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue($stmt, 1, $fname, $this->dbManager->STRING_TYPE);
		$this->dbManager->bindValue($stmt, 2, $lname, $this->dbManager->STRING_TYPE);
		$this->dbManager->bindValue ( $stmt, 3, $email, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 4, $password, $this->dbManager->STRING_TYPE );
		
		$this->dbManager->executeQuery ( $stmt );
		
		if ($this->dbManager->getNumberOfAffectedRows ( $stmt ) == 1) {
			return (true);
		} else
			return (false);
	}
	public function delete($userID) {
		$sql = "DELETE FROM users ";
		$sql .= "WHERE id=? ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $userID, $this->dbManager->INT_TYPE );
		$result = $this->dbManager->executeQuery ( $stmt );
		
		return ($result);
	}
	public function search($str) {
	}
	public function updateExistingUser($existingID, $name, $surname, $email) {
		$sql = "UPDATE users ";
		$sql .= "SET name=?, surname=?, email=? ";
		$sql .= "WHERE id=? ";
		
		$stmt = $this->dbManager->prepareQuery ( $sql );
		$this->dbManager->bindValue ( $stmt, 1, $name, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 2, $surname, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 3, $email, $this->dbManager->STRING_TYPE );
		$this->dbManager->bindValue ( $stmt, 4, $existingID, $this->dbManager->INT_TYPE );
		
		$this->dbManager->executeQuery ( $stmt );

		if ($this->dbManager->getNumberOfAffectedRows ( $stmt ) == 1) {
			return (true);
		} else
			return (false);
	}

}
?>
