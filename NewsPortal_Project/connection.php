<!-- ***************Connection Page*************** -->

<?php
  class Connection{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $db="ms_news";
    public $conn;

    // ***************Database Connection***************

    public function __construct() {
        $this->conn=new mysqli($this->servername, $this->username, $this->password,$this->db);
    }
  }
  
?>