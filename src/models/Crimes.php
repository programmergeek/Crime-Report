<html>
    
    <?php 
        include 'Db_connect.php';
        class Crimes extends Db_Connect{
            protected function getAllCrimes() {
                $sql = "SELECT * FROM crimes";
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
                $conn->close();
            }
            protected function updateCrimes($sql){
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