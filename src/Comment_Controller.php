<?php
    include 'models/Comments.php';
    //Comments Controller
    Class Comment_C extends Comments {
        protected function create_Comment($report_id, $user_id, $comment, $media) {
            $this->addComment($report_id, $user_id, $comment, $media);
        }
        
        protected function alter_Comments($sql){
            $this->updateComments($sql);
        }
        protected function getAllPostedComments(){
            $result = $this->getAllComments();
            print_r($result);
        }
        protected function getAllPostedComment_ReportID($report_id){
            $result = $this-> getComment_ByReportID($report_id);
            print_r($result);
        }
        protected function getAllPostedComment_UserID($user_id){
            $result = $this-> getComment_ByUserID($user_id);
            print_r($result);
        }
    }

?>