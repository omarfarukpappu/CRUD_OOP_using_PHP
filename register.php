<?php
include_once 'Database.php';



class register {
   public $DB;


    public function __construct() {
           $this->DB = new Database();
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




public function allStudent(){
  $query ="SELECT * FROM register ORDER BY id ASC";
  $result =$this->DB->select($query);
  return $result;


  }

}




class Teacher extends register{
      
  public function addTeacher($data,$file){

    $name =$data['name'];
    $email =$data['email'];
    $class =$data['class'];
    $subject =$data['subject'];
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
      VALUES('$name','$email','$class','$subject','$phone','$upload_image','$address')"; 
      $result = $this->DB->insert($query);
     

      }

      public function allTeachers(){
        $query ="SELECT * FROM teacher ORDER BY ID ASC";
        $result =$this->DB->select($query);
        return $result;
      
      
        }

      public function getTeacherByID($ID){
        $query ="SELECT * FROM teacher where ID ='$ID'";
        $result =$this->DB->select($query);
        return $result;
      }
      public function UpdateTeacher($data,$file,$ID){
        $name =$data['name'];
        $email =$data['email'];
        $class =$data['class'];
        $subject =$data['Roll_number'];
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
          $query ="UPDATE `teacher` SET name=$name, email=$email,class = $class,subject =$subject,phone=$phone,picture=$upload_image,address=$address WHERE ID='$ID'";
          $result = $this->DB->update($query);
         

         
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
  class attendance extends register{
    public function addAttendance($data){

      $class =$data['class'];
      $roll =$data['roll'];
      $section =$data['section'];
  
      

        $query ="INSERT INTO `attendance`(`class`, `roll`, `section`) 
        VALUES('$class','$roll','$section')"; 
        $result = $this->DB->insert($query);
       
  
        }
        public function allAttendents(){
          $query ="SELECT * FROM attendance ORDER BY class ASC";
          $result =$this->DB->select($query);
          return $result;
        
        
          }
        


  }
  
?>
  




        
  