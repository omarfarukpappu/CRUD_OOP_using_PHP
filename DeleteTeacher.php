<?php
include_once "register.php";
include_once "teacher_view.php";

$reg = new Teacher();

if (isset($_GET['ID'])) {
    $ID=base64_decode($_GET['ID']);
    $delTech = $reg->DeleteTech($ID);
}


 

?>