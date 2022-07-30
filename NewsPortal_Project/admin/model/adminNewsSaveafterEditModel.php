<?php
include('./../../connection.php');
class SaveNewsAfterEdit extends Connection{

    //  ***************Function for Save after edit with new Image***************

    public function saveNewstable($news_id,$image,$topic,$content,$date,$enddate,$category_id,$sub_id){

        $sql="UPDATE `news` SET `image`='$image',`topic`='$topic',`content`='$content',`date`='$date',`enddate`='$enddate',`category_id`='$category_id',`sub_id`=$sub_id WHERE `news`.`news_id` = '$news_id'";
        $this->conn->query($sql) or die($this->conn->error);
        
        }

    public function saveNewstable1($news_id,$topic,$content,$date,$enddate,$category_id,$sub_id){


     //  ***************Function for Save after edit with current Image***************

        $sql="UPDATE `news` SET `topic`='$topic',`content`='$content',`date`='$date',`enddate`='$enddate',`category_id`='$category_id',`sub_id`=$sub_id WHERE `news`.`news_id` = '$news_id'";
        $this->conn->query($sql) or die($this->conn->error);
            
        }
    }
?>