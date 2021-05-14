<?php
include ('connection.php');
if(isset($_POST["login-btn"])){
$my_idnumber = $_POST['id_number'];
$mypass = $_POST['password'];
$take_data = "SELECT password,id FROM login WHERE id_number=?";
$stmt = $conn->prepare($take_data);
$stmt->bind_param("s",$my_idnumber);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($mypassword,$myid);
while($stmt->fetch()>0){}
echo $mypassword;
if($mypass==$mypassword){
    session_regenerate_id();
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['id']=$myid;
    
    header("location:../auth/login.php?message=<div class='alert alert-success' role='alert'>you are logged in</div>");
}else{
    header("location:../auth/login.php?message=<div class='alert alert-danger' role='alert'>you are not logged in</div>");
}
    
}
?>