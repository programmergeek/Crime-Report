<?php

include 'Db_connect.php';

class Users extends Db_Connect {
    
    protected function getUser($userid) {
        $sql = "SELECT * FROM users";
        $conn = $this->connect();
        
        $results = $conn->query($sql);
        
        $users = array();

        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $users[]=$row;
			}
        }
        
        return $users;
    }
    
}
