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
    <script>
        function confirmDelete(task_id)
        {
            res=confirm("Are you sure want to delete task="+task_id);
            if(res){
                window.location=`delete.php?task_id=${task_id}`;
            }
        }
        function editTask(task_id)
        {
            window.location=`editTask.php?task_id=${task_id}`;
        }
        function searchit(userid)
        {
            searchObj=document.getElementById('search');
            var value=searchObj.value;
            window.location=`search.php?value=${value}`;
        }
    </script>
</body>
</html>

<?php
include_once "authgaurd.php";
include_once "../user/connection.php";
include_once "menu.html";
$userid=$_SESSION['userid'];

$sql_cursor=mysqli_query($conn,"select * from upload where user_id=$userid");

echo "<div class='input-group mb-3 mt-2'>
<div class='input-group-prepend'>
  <span class='input-group-text' id='basic-addon1'>??</span>
</div>
<input type='text' id='search' class='form-control' placeholder='SEARCH HERE......' aria-label='search' aria-describedby='basic-addon1'>
<button class='btn btn-warning' onclick='searchit($userid)'>Search</button>
</div>";
while($row=mysqli_fetch_assoc($sql_cursor))
{
   $name=$row['name'];
   $details=$row['details'];
   $task_type=$row['task_type'];
   $due_date=$row['due_date'];
   $current_date=$row['current_date'];
   $task_id=$row['task_id'];

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


</div>";
}
?>