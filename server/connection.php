<?php


    $conn = new mysqli('localhost','root','','projectbsase');
    if($conn){
        header("location:../staff/new.staff.php?error");
    }
    


?>