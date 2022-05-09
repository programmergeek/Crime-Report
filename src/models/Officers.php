<html>
    
    <?php 
        include 'Db_connect.php';
        class Officers extends Db_Connect{
            protected function getAllComments() {
                $sql = "SELECT * FROM officers";
                $conn = $this->connect();
                
                $results = $conn->query($sql);
                
                $officers = array();
        
                if($results){
                    while($row = $results->fetch_array(MYSQLI_ASSOC))
                    {
                        $officers[]=$row;
                    }
                }
                
                return $officers;
                $conn->close();
            }
            protected function updateOfficers($sql){
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