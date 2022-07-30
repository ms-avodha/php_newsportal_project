<!-- ***************Add Sub Category Page for Admin*************** -->

<?php
include('./header.php');
include('./../model/adminCategoryManagementModel.php');

// *********Object Calling from  adminCategoryManagementModel*********
$obj= new AdminCategoryManagement;
$result=$obj->getDataFromCategory();

// ***********For Success Message************
$alert = isset($_REQUEST['fail']) ? $_REQUEST['fail'] : "";
$fail = isset($_REQUEST['fail']) ? $_REQUEST['fail'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ***************Form for Sub Category Adding*************** -->

<form action="./../controller/adminAddSubCategoryAction.php" name="addSubcategory" method="POST" >
        <div align="center" class="addSubCategoryAdmin">
            <h1>Add Category</h1>
            <table cellpadding="10px" cellspacing="10px">
                <thead>
                    <tr>
                        <td><label for="">Sub Category Name</label><span style="color:red;">*</span></td>
                        <td><input type="text" name="sub_name"></td>
                    </tr>
                    <tr>
                        <td><label for="">Category Name</label></td>
                        <td>
                            <select name="category_id" style="width:190px;">
                            <?php
                            if($result->num_rows >0){
                                while($row = $result->fetch_assoc()){
                            ?>
                                <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?></option>
                            <?php
                                }
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                    <tr style="text-align:center;">
                        <td colspan=2><input type="submit" name="submit" value=" Add Sub Category "></td>
                    </tr>
                </thead>
            </table>

        </div>
        <div align="center">
        <?php 
        if($alert ==1){
        echo '<div style="color:red;" align="center" class="alert">Duplicate Sub Category Name !</div>';} 
        ?>
        </div>
        <div class="blankaddcategory"></div>
    </form>
</body>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script src="./../../js/addSubCategory.js"></script>	
<?php
include('./footer.php');
?>
</html>