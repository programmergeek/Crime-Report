<?php

include 'Db_connect.php';

class Users extends Db_Connect {
    
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
        
        return $users;
    }
    
}
