<?php
include 'config.php';

class Database {
    public $host = host;
    public $username = user;
    public $password = password;
    public $database = database;

    public $conn;
    public $error;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            $this->error="database connection error";
            return false;
        }

    }

   public function insert($query){
       $result =mysqli_query($this->conn,$query)or die($this->conn->error.__LINE__);
       if($result){
        return $result;
       }
       else{
        return false;
       }

   }

    }

?>
