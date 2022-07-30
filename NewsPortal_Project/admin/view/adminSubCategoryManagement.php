<!-- ***************Sub Category Detail Page for admin*************** -->

<?php
include('./header.php');
include('./../model/adminSubCategoryManagementModel.php');

// *********Object Calling from  adminSubCategoryManagementModel*********
$obj= new AdminSubCategoryManagement;
$result=$obj->getDataFromSubCategory();

// ***********For Success Message************
$alert = isset($_REQUEST['success']) ? $_REQUEST['success'] : "";
$success = isset($_REQUEST['success']) ? $_REQUEST['success'] : "";
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
    <div align="center" class="adminNewsManagetitle"><h1>Sub Category Management</h1></div>
    <?php 
    if($alert ==1){
    echo '<div style="color:green;" align="center" class="alert">Sub Category Added Successfully !</div>';} 
    ?>

<!-- ***************Category Detail Table for Admin*************** -->

    <table id="newstable">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Sub Category Name</th>
                <th>Category Name</th>
                <th>Delete</th>
            </tr>
        </thead>
        <?php
        if($result ->num_rows >0){
            $i=1;
            while($row = $result->fetch_assoc()){

        ?>
        <tbody>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['sub_name']; ?></td>
                <td><?php echo $row['category_name']; ?></td>
                <td><a href="./../controller/adminSubCategoryDeleteAction.php?delete=1&sub_id=<?php echo $row['sub_id'];?>"><i class="fa fa-trash" aria-hidden="true" style="color:black;" ></i></a></td>
            </tr>
        <?php
            }
        }
        ?>
            <tr style="text-align:center;"><td colspan=4><a href="adminAddSubCategory.php"><input type="button" value=" Add Sub Category "></td></a></tr>
        </tbody>
    </table>
</body>
<?php
include('footer.php');
?>
</html>