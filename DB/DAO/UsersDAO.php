<?php
/**
 * @author barry and eoin
 * definition of the User DAO (database access object)
 */
class UsersDAO {
	private $dbManager;
	function UsersDAO($DBMngr) {
		$this->dbManager = $DBMngr;
	}
	public function get($id = null) {
		$sql = "SELECT * ";
		$sql .= "FROM users ";
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
	public function login($username,$password)
	{



	}

	public function insertNewUser($fname, $lname, $email, $password)
	{
		$sql = "INSERT INTO users";
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
