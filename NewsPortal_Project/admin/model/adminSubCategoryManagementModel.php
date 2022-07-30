<?php

include('./../../connection.php');
class AdminSubCategoryManagement extends Connection{

    public function getDataFromSubCategory(){ 
        
        //  ***************Function for Detail view of SubCategory***************

        $sql = "SELECT 
        `subcategory`.`sub_id`,
        `subcategory`.`sub_name`,
        `category`.category_id,
        `category`.category_name
        FROM `category`
        INNER JOIN `subcategory` ON `category`.`category_id`=`subcategory`.`category_id` ORDER BY `category`.`category_name`";
        $result= $this->conn->query($sql) or die($this->conn->error);
        return $result;
    }
}