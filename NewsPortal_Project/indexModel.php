<?php
include('connection.php');
class Display extends Connection{

// ***************Select All Datas From News Table For Displaying Home Page ***************

public function newsDisplay(){ 
  $sql = "SELECT * FROM news ORDER BY `news`.`date` DESC";
  $result= $this->conn->query($sql) or die($this->conn->error);
  return $result;
}

// ***************Select all datas from news where category Id for sorting news ***************

public function dropDownMenu($category_id){
    $sql="SELECT * FROM news  WHERE `category_id`='$category_id'";
    $result = $this->conn->query($sql);
    return $result;
} 
}

?>