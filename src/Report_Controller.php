<?php

include 'Reported_Crimes.php';

//Crime Report controller
class Report_Controller extends Reported_Crimes {

	//Invokes the addReportedCrime() function to add a reported crime to the database while also generating a report id.
	protected function createReport($crime_name, $userid, $neighbourhood, $date, $time, $crime_description, $latitude, $longitude){
		
		$reportid = rand(0,1000000);
		$this->addReportedCrime($reportid ,$crime_name, $userid, $neighbourhood, $date, $time, $crime_description, $latitude, $longitude);
		
	}
	
	//Returns all crime.
	protected function getAllCrime() {
	
		$result = $this->getAllReportedCrime();
		return $result;
	
	}
	
	//Returns all crime of a certain nature.
	protected function filterReportsByCrimeName($crime_name) {
	
		$result = $this->getAllReportedCrimeByCrime($crime_name);
		return $result;
	
	}
	
	//Returns all crime reported on a specific date.
	protected function filterReportsByDate($date) {
	
		$result = $this->getAllReportedCrimeByDate($date);
		return $result;
	
	}
}
