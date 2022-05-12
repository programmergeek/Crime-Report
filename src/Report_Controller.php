<?php

include 'Reported_Crimes.php';

//Crime Report controller
class Report_Controller extends Reported_Crimes {

	protected function createReport($crime_name, $userid, $neighbourhood, $date, $time, $crime_description, $latitude, $longitude){
		
		$reportid = rand(0,1000000);
		$this->addReportedCrime($reportid ,$crime_name, $userid, $neighbourhood, $date, $time, $crime_description, $latitude, $longitude);
		
	}
	
	protected function getAllCrime() {
	
		$result = $this->getAllReportedCrime();
		print_r($result);
	
	}
	
	protected function filterReportsByCrimeName($crime_name) {
	
		$result = $this->getAllReportedCrimeByCrime($crime_name);
		print_r($result);
	
	}
	
	protected function filterReportsByDate($date) {
	
		$result = $this->getAllReportedCrimeByDate($date);
		print_r($result);
	
	}
}
