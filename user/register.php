<?php
include_once "connection.php";

$uname=$_POST["username"];
$upass=$_POST["password"];
$utype=$_POST["user_type"];
$uage=$_POST["uage"]; 


$status=mysqli_query($conn,"insert into user(username,password,uage,user_type) values('$uname','$upass','$uage','$utype')");
if($status)
{
    echo "Registration Successfull";
    header("location:login.html");
}
else
{
    echo "Error in registration";
    echo mysqli_error($conn);
}

?>