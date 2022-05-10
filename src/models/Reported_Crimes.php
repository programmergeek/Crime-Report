<?php

include 'Db_connect.php';

class Reported_Crimes extends Db_Connect {
    
    protected function getReportedCrime($reportid) {
        $sql = "SELECT * FROM reported_crimes WHERE reportid = " . $reportid;
        $conn = $this->connect();
        
        $results = $conn->query($sql);
        

        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $crime=$row;
			}
        }
        
        return $crime;
    }
    
    protected function getAllReportedCrimes($reportid) {
        $sql = "SELECT * FROM reported_crimes WHERE reportid = " . $reportid;
        $conn = $this->connect();
        
        $results = $conn->query($sql);
        

        $crimes = array();

        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $crimes[]=$row;
			}
        }
        
        return $crimes;
    }
    
    
}