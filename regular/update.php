<?php
include_once "authgaurd.php";
include_once "../user/connection.php";
$userid=$_SESSION['userid'];

$task_id=$_GET['task_id'];
$name=$_POST['name'];
$details=$_POST['details'];
$due_date=$_POST["due_date"];
$task_type=$_POST["task_type"];

$sql = "UPDATE upload SET name='$name',details='$details',due_date='$due_date',task_type='$task_type' WHERE task_id=$task_id";

if(mysqli_query($conn, $sql)){
  echo "Record updated successfully";
  header("location:viewList.php");
} 
else {
  echo "Error updating record: " . $conn->error;
}

?>