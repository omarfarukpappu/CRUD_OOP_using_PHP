<?php
include_once 'Database.php';



class register {
   public $DB;


    public function __construct() {
           $this->DB = new Database();
    }
  // add student data

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
        $query ="INSERT INTO `students`(`name`, `email`, `class`, `roll`, `phone`, `picture`, `address`) 
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



// display student
public function allStudent(){
  $query ="SELECT * FROM students ORDER BY id ASC";
  $result =$this->DB->select($query);
  return $result;


  }


// get data in database

  public function getStudentByID($ID){
    $query ="SELECT * FROM students where ID ='$ID'";
    $result =$this->DB->select($query);
    return $result;
   }
        // update student information
        public function UpdateStudent($data,$file,$ID){
          $name =$data['name'];
          $email =$data['email'];
          $class =$data['class'];
          $roll =$data['roll'];
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
          
    
          if($file_size>5000000){
            $message ='File is too large (greater than 50MB).';
            return $message;
          }
          else{
            move_uploaded_file($file_temp,$upload_image);
            $query ="UPDATE `students` SET  name='$name', email='$email',class = '$class',roll = '$roll', phone='$phone',picture='$upload_image',address='$address' WHERE ID='$ID'";
            $result = $this->DB->updateS($query);
           
  
             
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
     // delete student information
     public function DeleteStudent($ID){

      $img_query ="SELECT * FROM students WHERE ID = '$ID'";
      $img_res = $this->DB->select($img_query);
      if ($img_res) {
       while($row = mysqli_fetch_assoc($img_res)){
         $picture =$row['picture'];
       } unlink($picture);
     
      }
      $delete_query = "DELETE FROM `students` WHERE ID = '$ID'";
      $del=$this->DB->delete($delete_query);
      if ($del) {
       $message ="Regestation successfull";
       return $message;
     }
     else{
       $message="Regestation Failed";
       return $message;
     }
      }

}


class Teacher extends register{

  //Add Teacher information 
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


      // display teacher information
      public function allTeachers(){
        $query ="SELECT * FROM teacher ORDER BY ID ASC";
        $result =$this->DB->select($query);
        return $result;
      
      
        }
      // get teacher data
      public function getTeacherByID($ID){
        $query ="SELECT * FROM teacher where ID ='$ID'";
        $result =$this->DB->select($query);
        return $result;
      }


      // update teacher information
      public function UpdateTeacher($data,$file,$ID){
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
        
  
        if($file_size>5000000){
          $message ='File is too large (greater than 50MB).';
          return $message;
        }
        else{
          move_uploaded_file($file_temp,$upload_image);
          $query ="UPDATE `teacher` SET  name='$name', email='$email',class = '$class',subject = '$subject', phone='$phone',picture='$upload_image',address='$address' WHERE ID='$ID'";
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
     // delete teacher information
     public function DeleteTech($ID){

     $img_query ="SELECT * FROM teacher WHERE ID = '$ID'";
     $img_res = $this->DB->select($img_query);
     if ($img_res) {
      while($row = mysqli_fetch_assoc($img_res)){
        $picture =$row['picture'];
      } unlink($picture);
    
     }
     $delete_query = "DELETE FROM `teacher` WHERE ID = '$ID'";
     $del=$this->DB->delete($delete_query);
     if ($del) {
      $message ="Regestation successfull";
      return $message;
    }
    else{
      $message="Regestation Failed";
      return $message;
    }
     }

     }


        
  
  class courses extends register{
    public function addCourse($data){

      $c_id =$data['course_id'];
      $c_name =$data['course_name'];
     
  
      

        $query ="INSERT INTO `courses`(`course_id`, `course_name`) 
        VALUES('$c_id','$c_name')"; 
        $result = $this->DB->insert($query);
       
  
        }
        public function allcourses(){
          $query ="SELECT * FROM courses ORDER BY course_id ASC";
          $result =$this->DB->select($query);
          return $result;
        
        
          }
        


  }


  class student_courses extends register{

   public function addStudentCourse($data){

      $S_id =$data['ID'];
      $S_C_id =$data['course_id'];
      $query ="INSERT INTO `student_course`(`ID`, `course_id`) 
      VALUES('$S_id','$S_C_id')"; 
      $result = $this->DB->insert($query);
     

      }
      public function allS_courses(){
        $query ="SELECT * FROM student_course ORDER BY ID ASC";
        $result =$this->DB->select($query);
        return $result;
      
      
        }


  }

  class student_courses_Result extends register{


       public function allS_and_courses(){
         $query ="SELECT students.ID, students.name,courses.course_id,courses.course_name 
         FROM students JOIN student_course ON students.ID=student_course.ID
         JOIN courses ON student_course.course_id=courses.course_id;";
         $result =$this->DB->selectSView($query);
         return $result;
       
       
         }

   }


?>




        
  