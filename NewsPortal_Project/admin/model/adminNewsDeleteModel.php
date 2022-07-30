<?php
include('./../../connection.php');
class AdminNewsDelete extends Connection{
    
    //  ***************Function for Delete News***************

    public function newsDelete($news_id){
        // $sql = "DELETE FROM news WHERE news_id='$news_id'";
        $sql = "UPDATE `news` SET `delete`='1' WHERE `news_id`='$news_id'";
        $this->conn->query($sql) or die($this->conn->error);
    }
}
?>