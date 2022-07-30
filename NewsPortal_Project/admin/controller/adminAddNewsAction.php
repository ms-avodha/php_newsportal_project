 <!-- **************** Action Page for Adding News *************** -->

<?php

include('./../model/adminAddNewsModel.php');

// **********Object Calling from adminAddNewsModel********
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
      if($fileError === 0){
            $fileDestination = '../../images/'.$fileName;
            move_uploaded_file($tempFile,$fileDestination);
                $image= $fileName;
                $topic= $_POST['topic'];
                $content= $_POST['content'];
                $category_id= $_POST['category_id'];
                $sub_id=$_POST['sub_id'];
                $date= $_POST['date'];
                $enddate= $_POST['enddate'];
                $news_id=$_POST['news_id'];
                $obj=new AddNews;
                $obj->addNewsbyAdmin($category_id,$sub_id,$topic,$content,$fileName,$date,$enddate);
                header('Location:./../view/adminNewsManagement.php?success=1');
        }
    else{
        echo "There was an error uploading in your file";
        header('Location:./../view/adminAddNews.php');
    }
}
else{
    echo "You cannot upload this file type, Try jpg,jpeg,png types";
    header('Location:./../view/adminAddNews.php');
}  
}
else{
    header('Location:./../view/adminAddNews.php');
}
?>