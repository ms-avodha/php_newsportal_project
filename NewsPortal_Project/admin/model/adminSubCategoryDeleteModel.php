<?php
include('./../../connection.php');
class AdminCategoryDelete extends Connection{
    
    //  ***************Function for Delete Sub Category***************

    public function subCategoryDelete($sub_id){
        // $sql = "DELETE FROM subcategory WHERE category_id='$category_id'";
        $sql = "UPDATE `subcategory` SET `delete`='1' WHERE `sub_id`='$sub_id'";
        $this->conn->query($sql) or die($this->conn->error);
    }
}
?>