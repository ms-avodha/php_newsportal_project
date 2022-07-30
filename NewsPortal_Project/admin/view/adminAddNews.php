<!-- ***************Add News Page for Admin*************** -->

<?php
include('./header.php');
include('./../model/adminCategoryManagementModel.php');

// *********Object Calling from  adminCategoryManagementModel*********
$obj= new AdminCategoryManagement;
$result=$obj->getDataFromCategory();
$result1=$obj->getDataFromSubCategory()
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

<!-- ***************Form for News Adding*************** -->

    <form action="./../controller/adminAddNewsAction.php" name="addnews" method="POST" enctype="multipart/form-data">
        <div align="center" class="addNewsAdmin">
            <h1>Add News</h1>
            <table cellpadding="10px" cellspacing="10px">
                <thead>
                    <tr>
                        <td><label for="">News Image</label></td>
                        <td><input type="file" name="image"></td>
                    </tr>
                    <tr>
                        <td><label for="">News Topic</label><span style="color:red;">*</span></td>
                        <td><input type="text" name="topic"></td>
                    </tr>
                    <tr>
                        <td><label for="">News Content</label><span style="color:red;">*</span></td>
                        <td><input type="text" name="content"></td>
                    </tr> 
                    <tr>
                        <td><label for="">News Category</label></td>
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
                        <td><label for="">News SubCategory</label></td>
                        <td>
                            <select name="sub_id" style="width:190px;">
                            <?php
                            if($result1->num_rows >0){
                                while($row = $result1->fetch_assoc()){
                            ?>
                                <option value="<?php echo $row['sub_id'] ?>"><?php echo $row['sub_name'] ?></option>
                            <?php
                                }
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">Start Date</label><span style="color:red;">*</span></td>
                        <td><input type="date" name="date" style="width:190px;" min="<?php echo date('Y-m-d'); ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="">End Date</label><span style="color:red;">*</span></td>
                        <td><input type="date" name="enddate" style="width:190px;" min="<?php echo date('Y-m-d'); ?>"></td>
                    </tr>
                    <input type="hidden"  name="news_id">
                    <tr style="text-align:center;">
                        <td colspan=2><input type="submit" name="submit" value=" Add News "></td>
                    </tr>
                </thead>
            </table>

        </div>
    </form>
</body>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script src="./../../js/addNews.js"></script>	
<?php
include('./footer.php');
?>
</html>