<?php
include('./../model/adminAddCategoryModel.php');
$obj= new AddCategory;
$result=$obj->getDataFromCategory();

// **********Object Calling from adminAddCategoryModel********
if (isset($_POST["submit"])){

    $category=[];
    while($row = $result->fetch_assoc()){
        array_push($category,$row['category_name']);
    }
    if(!in_array($_POST['category_name'],$category)){
        $category_name=$_POST['category_name'];
        $obj=new AddCategory;
        $obj->addCategorybyAdmin($category_name);
        header('Location:./../view/adminCategoryManagement.php?success=1');   
    }
    else{
        header('Location:./../view/adminAddCategory.php?fail=1');
    }
}

?>