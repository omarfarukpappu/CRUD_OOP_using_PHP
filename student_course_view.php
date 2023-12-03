<?php

// include_once "courses.php";
include_once "register.php";
$reg = new student_courses();

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Attendance list</title>
   <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

   <div class="table-container">

    <div class="row">
        <div class="col-md-6">
            <h3>All Data</h3>
        </div>
        <div class="col-md-6">
            <a href="student_course.php" class="btn btn-info float-right">Add  student courses</a>
        </div>

    </div>
     
      <table>
      <td>
  </a>
</td>
         <thead>
            <tr>
               <th>Student ID</th>
               <th>Course ID</th> 
             
            </tr>
         </thead>
         <tbody>
            <?php
            $allCours=$reg->allS_courses();
            if ( $allCours) {
                while ($row = mysqli_fetch_assoc($allCours)){
                    echo "<tr>";
                    echo "<td>{$row['ID']}</td>";
                    echo "<td>{$row['course_id']}</td>";
                  

                 
                    echo "</tr>";


                }
             
            }

            
            ?>
         </tbody>
      </table>

      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
