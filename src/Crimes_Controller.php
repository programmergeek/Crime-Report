<?php
    include 'models/Crimes.php';
    Class Crimes_C extends Crimes {
        protected function list_Of_Crimes(){
            $result = $this->getAllCrimes();
            print_r($result);
        }
    
        protected function alter_Crimes($sql){
            $this->updateCrimes($sql);
        }
    }

?>