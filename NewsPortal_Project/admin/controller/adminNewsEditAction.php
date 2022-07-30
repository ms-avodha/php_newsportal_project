 <!-- **************** Action Page for News editor *************** -->

<?php
include('../model/adminNewsSaveafterEditModel.php');

// **********Object Calling from adminNewsSaveafterEditModel********
$news_id=$_REQUEST['news_id'];

if (isset($_POST["submit"]))
{
    $file = $_FILES['image'];
    $fileName = $_FILES['image']['name'];
    $fileError = $_FILES['image']['error'];
    $fileType = $_FILES['image']['type'];
    $tempFile = $_FILES['image']['tmp_name'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt, $allowed)){
        if($fileError == 0){
            $fileDestination = '../../images/'.$fileName;
            move_uploaded_file($tempFile,$fileDestination);
                $image= $fileName;
                $topic= $_POST['topic'];
                $content= $_POST['content'];
                $category_id= $_POST['category_id'];
                $sub_id=$_POST['sub_id'];
                $date= $_POST['date'];
                $enddate= $_POST['enddate'];
                $obj=new SaveNewsAfterEdit();
                $obj->saveNewstable($news_id,$fileName,$topic,$content,$date,$enddate,$category_id,$sub_id);
                header('Location:./../view/adminNewsManagement.php?success=1');
        }
        else{
            echo "There was an error uploading in your file";
        }
    }
    else if($fileName == NULL){

        $topic= $_POST['topic'];
        $content= $_POST['content'];
        $category_id= $_POST['category_id'];
        $sub_id=$_POST['sub_id'];
        $date= $_POST['date'];
        $enddate= $_POST['enddate'];
        $obj=new SaveNewsAfterEdit();
        $obj->saveNewstable1($news_id,$topic,$content,$date,$enddate,$category_id,$sub_id);
        header('Location:./../view/adminNewsManagement.php?success=1');
        
    } 
    else{
        echo "You cannot upload this file type, Try jpg,jpeg,png types";
    } 
}
else{
    header('Location:./../view/adminNewsEdit.php?success=1');
}
?>