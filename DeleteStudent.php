<?php
include_once "register.php";
include_once "student_view.php";

$reg = new register();

if (isset($_GET['ID'])) {
    $ID=base64_decode($_GET['ID']);
    $delTech = $reg->DeleteStudent($ID);
}


 

?>