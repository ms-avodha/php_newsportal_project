 <!-- **************** Action Page for Delete Category *************** -->

 <?php
include('./../model/adminCategoryDeleteModel.php');

// **********Object Calling from adminCategoryDeleteModel********
if(isset($_REQUEST['delete']) && $_REQUEST['delete'] ==1){
    $category_id=$_REQUEST['category_id'];
    $obj1= new AdminCategoryDelete;
    $obj1->categoryDelete($category_id);   
    header('Location:./../view/adminCategoryManagement.php');
}
?>