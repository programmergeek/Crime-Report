<?php

include 'models/Users.php';

//Users controller
class User_Controller extends Users {

	//Invokes the addUser() method to create and add a user to the database.
	protected function createUser($userid, $fname, $lname, $email, $password, $phone_number, $address){
		
		$this->addUser($userid, $fname, $lname, $email, $password, $phone_number, $address);
		
	}
	
	//Returns a single user's info given an email and password, used in the login process.
	protected function loginUser($email, $password) {
	
		$result = $this->getUserByEmailPassword($email, $password);
		return $result;
	
	}
}
