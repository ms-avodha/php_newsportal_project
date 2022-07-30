<?php
include('./../../connection.php');

class AddCategory extends Connection{

//  ***************Function for Add Category***************

    public function addSubCategorybyAdmin($sub_name,$category_id){

        $sql= "INSERT INTO subcategory(`sub_name`,`category_id`) VALUES('$sub_name','$category_id')";
        $this->conn->query($sql) or die($this->conn->error);
        echo "Category Added Successfully";
    }

    public function getDataFromSubCategory(){ 
        
        //  ***************Select all datas from Sub Category***************

        $sql= "SELECT * FROM `subcategory`";
        $result2= $this->conn->query($sql) or die($this->conn->error);
        return $result2;
    }
}
?>