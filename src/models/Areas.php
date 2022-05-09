<html>
    
    <?php 
        include 'Db_connect.php';
        class Areas extends Db_Connect{
            protected function getAllAreas() {
                $sql = "SELECT * FROM areas";
                $conn = $this->connect();
                
                $results = $conn->query($sql);
                
                $areas = array();
        
                if($results){
                    while($row = $results->fetch_array(MYSQLI_ASSOC))
                    {
                        $areas[]=$row;
                    }
                }
                
                return $areas;
                $conn->close();
            }
            protected function updateAreas($sql){
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