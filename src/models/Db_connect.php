<?php

/*
This class exists to initialize the database connection, ensuring we don't have to write this code again in the model classes.
*/

class Db_connect {

    private $host = "csi233.mysql.database.azure.com";
    private $user = "database_admin";
    private $password = "pass_word1";
    private $dbName = "assignment2";

    //Function that returns the database connection.
    protected function connect() {
        
        $conn = mysqli_init();
        mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
        mysqli_real_connect($conn, $this->host, $this->user, $this->password, $this->dbName, 3306, MYSQLI_CLIENT_SSL);
        
        if(mysqli_connect_errno($conn)) { 
        	die('Failed to connect to MySQL: '.mysqli_connect_error());
	    }

        return $conn;
        
    }

}
