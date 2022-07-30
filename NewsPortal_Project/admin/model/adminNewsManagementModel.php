<?php
include('./../../connection.php');
class AdminNewsManagement extends Connection{

    public function getDataFromNews(){  
        
        //  ***************Function for Detail view of News***************
        
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
        INNER JOIN subcategory ON `news`.`sub_id` = `subcategory`.`sub_id` ORDER BY `news`.`date` DESC";

        $result= $this->conn->query($sql) or die($this->conn->error);
        return $result;
    }
 
        //  ***************Function for Sorting  News by dropdown box ***************

    public function adminDropDownMenu($category_id){
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
        FROM `category` INNER JOIN `news` ON `news`.`category_id` = `category`.`category_id` 
        INNER JOIN `subcategory` ON `news`.`sub_id` = `subcategory`.`sub_id` WHERE `category`.`category_id`='$category_id' 
        ORDER BY `news`.`date` DESC;";
        $result = $this->conn->query($sql);
        return $result;
    } 

}

?>