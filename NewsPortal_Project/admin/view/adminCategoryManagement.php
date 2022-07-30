<!-- ***************Category Detail Page for admin*************** -->

<?php
include('./header.php');
include('./../model/adminCategoryManagementModel.php');

// *********Object Calling from  adminCategoryManagementModel*********
$obj= new AdminCategoryManagement;
$result=$obj->getDataFromCategory();

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
    <div align="center" class="adminNewsManagetitle"><h1>Category Management</h1></div>
    <?php 
    if($alert ==1){
    echo '<div style="color:green;" align="center" class="alert">Category Added Successfully !</div>';} 
    ?>

<!-- ***************Category Detail Table for Admin*************** -->

    <table id="newstable">
        <thead>
            <tr>
                <th>Sl.No</th>
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
                <td><?php echo $row['category_name']; ?></td>
                <td><a href="./../controller/adminCategoryDeleteAction.php?delete=1&category_id=<?php echo $row['category_id'];?>"><i class="fa fa-trash" aria-hidden="true" style="color:black;" ></i></a></td>
            </tr>
        <?php
            }
        }
        ?>
            <tr style="text-align:center;"><td colspan=3><a href="adminAddCategory.php"><input type="button" value=" Add Category "></td></a></tr>
        </tbody>
    </table>
</body>
<?php
include('footer.php');
?>
</html>
