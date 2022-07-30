<?php
include('./../../connection.php');

class AddCategory extends Connection{

//  ***************Function for Add Category***************

    public function addCategorybyAdmin($category_name){

        $sql= "INSERT INTO category(`category_name`) VALUES('$category_name')";
        $this->conn->query($sql) or die($this->conn->error);
        echo "Category Added Successfully";
        
    }

    public function getDataFromCategory(){ 
        
        //  ***************Select all datas from Category***************

        $sql= "SELECT `category_name` FROM `category`";
        $result= $this->conn->query($sql) or die($this->conn->error);

        return $result;
    }
}
?>