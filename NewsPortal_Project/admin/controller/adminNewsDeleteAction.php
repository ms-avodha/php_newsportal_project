 <!-- **************** Action Page for Delete News *************** -->

<?php
include('./../model/adminNewsDeleteModel.php');

// **********Object Calling from adminNewsDeleteModel********
if(isset($_REQUEST['delete']) && $_REQUEST['delete'] ==1){
    $news_id=$_REQUEST['news_id'];
    $obj1= new AdminNewsDelete;
    $obj1->newsDelete($news_id);   
    header('Location:./../view/adminNewsManagement.php?success=1');
}
?>