<?php
include ('connection.php');
if($conn){
   if(isset($_POST['register_btn'])){
    $fullname=$_POST['myname'];
    $phone=$_POST['myphone'];
    $address=$_POST['myaddress'];
    $identity=$_POST['myid_number'];
    $descript=$_POST['mydescription'];
    $user_role=$_POST['myrole'];
    $pass = password_hash($_POST['mypass'],PASSWORD_DEFAULT);
    $pic_name = basename($_FILES['profile_pic']['name']);
    $target = '../uploads/';
    $extension =pathinfo($pic_name,PATHINFO_EXTENSION);
    $newfile=$target.$pic_name;
    if($extension=='png'||$extension=="jpg"||$extension=="jpeg"){
        if(move_uploaded_file($_FILES['profile_pic']['tmp_name'],$newfile)){
           $register_query = "INSERT INTO users (full_name,nin,avatar,phone,location,description,user_role,password) values (?,?,?,?,?,?,?,?)";
           $stmt=$conn->prepare($register_query);
           $stmt->bind_param("ssssssss",$fullname,$identity,$pic_name,$phone,$address,$descript,$user_role,$pass);
           $stmt->execute();
           header("location:../staff/new.staff.php");
        }
        else{
            echo "failed";
        }
    }
    else{
        header("location:../staff/new.staff.php");
        $x = new Header();
       print_r($x);
    }
    
}
   }
?>