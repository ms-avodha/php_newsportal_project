 <!-- **************** Action Page for Delete Sub Category *************** -->

 <?php
include('./../model/adminSubCategoryDeleteModel.php');

// ********* Object Calling from adminSubCategoryDeleteModel*********
if(isset($_REQUEST['delete']) && $_REQUEST['delete'] ==1){
    $sub_id=$_REQUEST['sub_id'];
    $obj1= new AdminCategoryDelete;
    $obj1->subCategoryDelete($sub_id);   
    header('Location:./../view/adminSubCategoryManagement.php');
}
?>