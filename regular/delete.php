<?php
include_once "../user/connection.php";

$task_id=$_GET['task_id'];
$status=mysqli_query($conn,"delete from upload where task_id=$task_id");
if($status)
{
    header("location:viewList.php");
}
else
{
    echo mysqli_error($conn);
}


?>