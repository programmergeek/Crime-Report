<?php
    include 'models/Areas.php';
    Class Areas_C extends Areas {
        protected function list_Of_Areas(){
            $result = $this->getAllAreas();
            print_r($result);
        }
    
        protected function alter_Areas($sql){
            $this->updateAreas($sql);
        }
    }

?>