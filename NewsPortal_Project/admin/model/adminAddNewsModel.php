<?php
include('./../../connection.php');

class AddNews extends Connection{

//  ***************Function for Add News***************

    public function addNewsbyAdmin($category_id,$sub_id,$topic,$content,$image,$date,$enddate){

        $sql= "INSERT INTO news(`category_id`,`sub_id`,`topic`,`content`,`image`,`date`,`enddate`)
        VALUES('$category_id','$sub_id','$topic','$content','$image','$date','$enddate')";
        $this->conn->query($sql) or die($this->conn->error);
        echo "News Added Successfully";
    }
}
?>