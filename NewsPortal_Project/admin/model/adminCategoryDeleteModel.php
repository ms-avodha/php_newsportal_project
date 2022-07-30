<?php
include('./../../connection.php');
class AdminCategoryDelete extends Connection{
    
    //  ***************Function for Delete Category***************

    public function categoryDelete($category_id){
        // $sql = "DELETE FROM category WHERE category_id='$category_id'";
        $sql = "UPDATE `category` SET `delete`='1' WHERE `category_id`='$category_id'";
        $this->conn->query($sql) or die($this->conn->error);
    }
}
?>