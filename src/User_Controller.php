<?php

include 'models/Users.php';

//Users controller
class UsersC extends Users {

	protected function createUser($userid, $fname, $lname, $email, $password, $phone_number, $address){
		
		$this->addUser($userid, $fname, $lname, $email, $password, $phone_number, $address);
		
	}
	
	protected function loginUser($email, $password) {
	
		$result = $this->getUserByEmailPassword($email, $password);
		print_r($result);
	
	}
}
