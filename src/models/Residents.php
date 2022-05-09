<html>
    
    <?php 
        include 'Db_connect.php';
        class Residents extends Db_Connect{
            protected function getAllResidents() {
                $sql = "SELECT * FROM residents";
                $conn = $this->connect();
                
                $results = $conn->query($sql);
                
                $residents = array();
        
                if($results){
                    while($row = $results->fetch_array(MYSQLI_ASSOC))
                    {
                        $residents[]=$row;
                    }
                }
                
                return $residents;
                $conn->close();
            }
            protected function updateResidents($sql){
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