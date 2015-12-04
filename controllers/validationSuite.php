<?php
class validation_functions {
	/**
	 * check whether the email string is a valid email address using a regular expression
	 * 
	 * @param $emailStr -
	 *        	the input email string
	 * @return boolean indicating whether it is a valid email or not
	 */
	public function isEmailValid($emailStr) {
		$regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i";
		if (! preg_match ( $regex, $emailStr ))
			return (false);
		else
			return (true);
	}
}
?>
