<?php
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$con = mysqli_connect('localhost','root','','responsive_web');

// $q = "insert into user-info values ('$user','$email','$mobile','$comment')";
$q = "INSERT INTO `user-info`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comment')";

$rs= mysqli_query($con,$q);

if($rs){
    echo"save";

}else{
    echo"error";
}
?>