<html>
    
    <?php 
        include 'Db_connect.php';
        class Criminals extends Db_Connect{
            protected function getAllCriminals() {
                $sql = "SELECT * FROM criminals";
                $conn = $this->connect();
                
                $results = $conn->query($sql);
                
                $criminals = array();
        
                if($results){
                    while($row = $results->fetch_array(MYSQLI_ASSOC))
                    {
                        $criminals[]=$row;
                    }
                }
                
                return $criminals;
                $conn->close();
            }
            
            
            protected function getCriminal($criminal_id) {
                $sql = "SELECT * FROM criminals WHERE criminal_id = ". $criminal_id;
                $conn = $this->connect();
                
                $results = $conn->query($sql);
                
                $criminals = array();
        
                if($results){
                    while($row = $results->fetch_array(MYSQLI_ASSOC))
                    {
                        $criminals[]=$row;
                    }
                }
                
                return $criminals;
                $conn->close();
            }
            
            
            protected function updateCriminals($sql){
                $conn = $this->connect();
                $results = $conn->query($sql);
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                  
                  $conn->close();
            }
        
        }
    ?>
</html>    