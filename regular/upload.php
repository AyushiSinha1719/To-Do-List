<?php
include_once "../user/connection.php";
include_once "authgaurd.php";

$userid=$_SESSION['userid'];
$name=$_POST["name"];
$details=$_POST["details"];
$due_date=$_POST["due_date"];
$task_type=$_POST["task_type"];

$status=mysqli_query($conn,"insert into upload(user_id,name,details,task_type,due_date) values($userid,'$name','$details','$task_type','$due_date')");
if($status)
{
    echo "Task uploaded successfully";
    header("location:viewList.php");
}
else
{
    echo mysqli_error($conn);
}



?>