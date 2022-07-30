<?php

include('./../../connection.php');
class AdminCategoryManagement extends Connection{

    public function getDataFromCategory(){ 
        
        //  ***************Select all datas from Category***************

        $sql= "SELECT * FROM `category`";
        $result= $this->conn->query($sql) or die($this->conn->error);

        return $result;
    }

    public function getDataFromSubCategory(){ 
        
        //  ***************Select all datas from Sub Category***************

        $sql= "SELECT * FROM `subcategory`";
        $result1= $this->conn->query($sql) or die($this->conn->error);
        
        return $result1;
    }
}


?>