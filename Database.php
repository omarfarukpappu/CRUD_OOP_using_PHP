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

       // insert Teacher 
       public function insert($query){
       $result =mysqli_query($this->conn,$query)or die($this->conn->error.__LINE__);
       if($result){
        return $result;
       }
       else{
        return false;
       }

   }


      //Display teacher
       public function select($query){
       $result =mysqli_query($this->conn,$query)or die($this->conn->error.__LINE__);
       if(mysqli_num_rows($result)>0){
       return $result;
       }
       else{
       return false;
       }

}

public function selectSView($query){
    $result =mysqli_query($this->conn,$query)or die($this->conn->error.__LINE__);
    if($result){
    return $result;
    }
    else{
    return false;
    }

}

    // update teacher
    public function update($query){
    $result = mysqli_query($this->conn,$query)or die($this->conn->error.__LINE__);
    if($result){
     return $result;
    }
    else{
     return false;
    }

    }


    // Delete teacher
    public function delete($query){
    $result = mysqli_query($this->conn,$query)or die($this->conn->error.__LINE__);
    if($result){
     return $result;
    }
    else{
     return false;
    }

    }
        // update student
        public function updateS($query){
            $result = mysqli_query($this->conn,$query)or die($this->conn->error.__LINE__);
            if($result){
             return $result;
            }
            else{
             return false;
            }
        
            }
        

    }

?>
