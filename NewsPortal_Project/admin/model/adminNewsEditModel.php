<?php
include('./../../connection.php');
class AdminNewsEdit extends Connection{

    //  ***************Function for Collect datas for Edit News***************

    public function getDataFromNewsandCategory($news_id){   
        $sql = "SELECT news.topic,
        `news`.content,
        `news`.`image`,
        `news`.`date`,
        `news`.`enddate`,
        `news`.`news_id`,
        `category`.category_id,
        `category`.category_name,
        `subcategory`.sub_id,
        `subcategory`.sub_name
        FROM `category`
        INNER JOIN news ON `news`.`category_id` = `category`.`category_id`
        INNER JOIN subcategory ON `news`.`sub_id` = `subcategory`.`sub_id`
        WHERE `news`.`news_id`='$news_id'";

        $result= $this->conn->query($sql) or die($this->conn->error);
        return $result;
    }

    public function imageDeleteNews($news_id){

        // ************Function for Delete image Button***********

        $sql = "UPDATE `news` SET `image`=NULL WHERE `news_id` = '$news_id'";
        $this->conn->query($sql) or die($this->conn->error);
        
    }

    public function getDataFromCategory(){ 
        
        //  ***************Select all datas from Category***************

        $sql= "SELECT * FROM `category`";
        $result1= $this->conn->query($sql) or die($this->conn->error);
        return $result1;
    }

    public function getDataFromSubCategory(){ 
        
        //  ***************Select all datas from Sub Category***************

        $sql= "SELECT * FROM `subcategory`";
        $result2= $this->conn->query($sql) or die($this->conn->error);
        return $result2;
    }
}
?>