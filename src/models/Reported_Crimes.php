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
        
        mysqli_close($conn);
        return $crime;
    }
    
    protected function getReportedCrimeByDate($date) {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM reported_crimes WHERE date = ?");
        $stmt->bind_param('s', $date);
        $stmt->execute();
        
        $results = $stmt->get_result();
        
        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $crime=$row;
			}
        }
        
        mysqli_close($conn);
        return $crime;
    }

    protected function getReportedCrimeByCrime($crime_name) {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM reported_crimes WHERE crime_name = ?");
        $stmt->bind_param('s', $crime_name);
        $stmt->execute();
        
        $results = $stmt->get_result();
        
        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $crime=$row;
			}
        }
        
        mysqli_close($conn);
        return $crime;
    }

    protected function getAllReportedCrime() {
        $sql = "SELECT * FROM reported_crimes";
        $conn = $this->connect();
        
        $results = $conn->query($sql);
        

        $crimes = array();

        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $crimes[]=$row;
			}
        }
        
        mysqli_close($conn);
        return $crimes;
    }

    protected function getAllReportedCrimeByDate($date) {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM reported_crimes WHERE date = ?");
        $stmt->bind_param('s', $date);
        $stmt->execute();
        
        $results = $stmt->get_result();
        

        $crimes = array();

        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $crimes[]=$row;
			}
        }
        
        mysqli_close($conn);
        return $crimes;
    }

    protected function getAllReportedCrimeByCrime($crime_name) {
        $conn = $this->connect();
        $stmt = $conn->prepare("SELECT * FROM reported_crimes WHERE crime_name = ?");
        $stmt->bind_param('s', $crime_name);
        $stmt->execute();
        
        $results = $stmt->get_result();
        

        $crimes = array();

        if($results){
		    while($row = $results->fetch_array(MYSQLI_ASSOC))
			{
			    $crimes[]=$row;
			}
        }
        
        mysqli_close($conn);
        return $crimes;
    }
    
    public function addReportedCrime($reportid, $crime_name, $userid, $neighbourhood, $date, $time, $crime_description, $latitude, $longitude){
    	$conn = $this->connect();
        $stmt = $conn->prepare("INSERT INTO reported_crimes VALUES(" . $reportid . ", ?, " . $userid . ", ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssss', $crime_name, $neighbourhood, $date, $time, $crime_description, $latitude, $longitude);
        $stmt->execute();
        
        mysqli_close($conn);
    }
    
}
