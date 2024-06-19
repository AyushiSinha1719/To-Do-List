<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .card
        {
            width:300px;
            margin:10px;
            display:inline-block !important;
        }
        .task_type
        {
            font-size:34px;
            color:red;
            text-align:center;
        }
    </style>
</head>
<body>
</body>
</html>

<?php
include_once "authgaurd.php";
include_once "../user/connection.php";
include_once "menu.html";
$userid=$_SESSION['userid'];
$value=$_GET['value'];

$sql_cursor=mysqli_query($conn,"select * from upload where user_id=$userid");

while($row=mysqli_fetch_assoc($sql_cursor))
{
   $name=$row['name'];
   $details=$row['details'];
   $task_type=$row['task_type'];
   $due_date=$row['due_date'];
   $current_date=$row['current_date'];
   $task_id=$row['task_id'];

   if($task_type==$value)
   {

   

   echo "<div class='card'>
   <div class='card-body'>
       <h2 class='card-title' style='text-align:center;'>$name</h2>
       <div class='task_type'>$task_type</div>
       <div class='card-text'>$details</div>
       <div class='created'>Created Date:$current_date</div>
       <div class='due' style='color:red;'>Due Date:$due_date</div>
       <div class='mt-2 d-flex  gap-3'>
           <button onclick='editTask($task_id)' class='btn btn-warning'>Edit</button>                
           <button onclick='confirmDelete($task_id)' class='btn btn-danger'>Delete</button>
           

           
       </div>
       </div>


</div>";}
}

echo"<a href='viewList.php'><button class='btn btn-warning'>Back</button></a>";
?>