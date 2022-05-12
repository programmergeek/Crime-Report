<html>
    
    <?php 
        include 'Db_connect.php';
        class Comments extends Db_Connect{
            protected function getAllComments() {
                $sql = "SELECT * FROM comments";
                $conn = $this->connect();
                
                $results = $conn->query($sql);
                
                $comments = array();
        
                if($results){
                    while($row = $results->fetch_array(MYSQLI_ASSOC))
                    {
                        $comments[]=$row;
                    }
                }
                
                return $comments;
                $conn->close();
            }
            
            protected function getComment($reportid) {
                $sql = "SELECT * FROM comments WHERE reportid = ". $reportid;
                $conn = $this->connect();
                
                $results = $conn->query($sql);
                
                $comments = array();
        
                if($results){
                    while($row = $results->fetch_array(MYSQLI_ASSOC))
                    {
                        $comments[]=$row;
                    }
                }
                
                return $comments;
                $conn->close();
            }


            protected function updateComments($sql){
                $conn = $this->connect();
                $results = $conn->query($sql);
                if ($conn->query($sql) === TRUE) {
                    echo "Record updated successfully";
                  } else {
                    echo "Error updating record: " . $conn->error;
                  }
                  
                  $conn->close();
            }
        
            public function addComment($report_id, $user_id, $comment, $media){
                $conn = $this->connect();
                $stmt = $conn->prepare("INSERT INTO comments VALUES(" . $report_id . $area_id . "?, ?," ")");
                $stmt->bind_param("ss", $comment, $media);
                $stmt->execute();
            }
        
        
        
        
        }
    ?>
</html>    