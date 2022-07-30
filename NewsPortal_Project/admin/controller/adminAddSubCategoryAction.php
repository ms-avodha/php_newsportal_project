<?php
include('./../model/adminAddSubCategoryModel.php');
$obj= new AddCategory;
$result=$obj->getDataFromSubCategory();

// **********Object Calling from adminAddSubCategoryModel********
if (isset($_POST["submit"])){

    $subcategory=[];
    while($row = $result->fetch_assoc()){
        array_push($subcategory,$row['sub_name']);
    }
    if(!in_array($_POST['sub_name'],$subcategory)){
        $sub_name=$_POST['sub_name'];
    $category_id= $_POST['category_id'];
    $obj=new AddCategory;
    $obj->addSubCategorybyAdmin($sub_name,$category_id);
    header('Location:./../view/adminSubCategoryManagement.php?success=1');
    }
    else{
        header('Location:./../view/adminAddSubCategory.php?fail=1');
    }

    
}

?>