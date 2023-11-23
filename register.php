<?php
include_once 'Database.php';



class register {
   public $DB;
  //  public $DB_teacher;

    public function __construct() {
           $this->DB = new Database();
          //  $this->DB_teacher = new Database();
    }
  
    public function addRegister($data,$file) {
      $name =$data['name'];
      $email =$data['email'];
      $class =$data['class'];
      $roll =$data['Roll_number'];
      $phone =$data['phone'];
      $address=$data['address'];

      $permited =array('jpg','jpeg','png','gift');
      $file_name =$file['image']['name'];
      $file_size =$file['image']['size'];
      $file_temp =$file['image']['tmp_name'];

      $div= explode('.',$file_name);
      $file_ext=strtolower(end($div));
      $unique_image =substr(md5(time()),0,10). '.'.$file_ext;
      $upload_image ="upload/".$unique_image;
      

      if($file_size>5000000){
        $message ='File is too large (greater than 50MB).';
        return $message;
      }
      else{
        move_uploaded_file($file_temp,$upload_image);
        $query ="INSERT INTO `register`(`name`, `email`, `class`, `roll`, `phone`, `picture`, `address`) 
        VALUES('$name','$email','$class','$roll','$phone','$upload_image','$address')"; 
        $result = $this->DB->insert($query);
       
       
       
       
        if($result){
          $message ="Regestation successfull";
          return $message;
        }
        else{
          $message="Regestation Failed";
          return $message;
        }



        


      }

}

}
class Teacher extends register{
      
  public function addRegister($data,$file){

    $name =$data['name'];
    $email =$data['email'];
    $class =$data['class'];
    $roll =$data['subject'];
    $phone =$data['phone'];
    $address=$data['address'];

    $permited =array('jpg','jpeg','png','gift');
    $file_name =$file['picture']['name'];
    $file_size =$file['picture']['size'];
    $file_temp =$file['picture']['tmp_name'];

      $div= explode('.',$file_name);
      $file_ext=strtolower(end($div));
      $unique_image =substr(md5(time()),0,10). '.'.$file_ext;
      $upload_image ="teacher/".$unique_image;

      move_uploaded_file($file_temp,$upload_image);
      $query ="INSERT INTO `teacher`(`name`, `email`, `class`, `subject`, `phone`, `picture`, `address`) 
      VALUES('$name','$email','$class','$roll','$phone','$upload_image','$address')"; 
      $result = $this->DB->insert($query);
     

      }




        
  }