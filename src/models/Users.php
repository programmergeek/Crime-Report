<?php

include 'Db_connect.php';

class Users extends Db_Connect {
    
    //Returns an array containing the info about a single user whose userid is passed as an argument.
    protected function getUser($userid) {
        $sql = "SELECT * FROM users WHERE userid = " . $userid;
        $conn = $this->connect();
        
        $results = $conn->query($sql);
        

        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $users = $row;
			}
        }
        
        mysqli_close($conn);
        return $users;
    }
    
    //Returns a single user's info given an email and password, used in the login process.
    protected function getUserByEmailPassword($email, $password) {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->bind_param('ss', $email, $password);
        $stmt->execute();
        

        $results = $stmt->get_result();
        
        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $user=$row;
			}
        }
        
        mysqli_close($conn);
        return $user;
    }

    //Adds a new user to the database.
    protected function addUser($userid, $fname, $lname, $email, $password, $phone_number, $area_id) {
    	$conn = $this->connect();
        $stmt = $conn->prepare("INSERT INTO users VALUES(" . $userid . ", ?, ?, ?, ?, ?, " . $area_id . ")");
        $stmt->bind_param("sssss", $fname, $lname, $email, $password, $phone_number);
        $stmt->execute();
        
        mysqli_close($conn);
    }
    
}
