<?php
include_once "authgaurd.php";
include_once "menu.html";
include_once "../user/connection.php";



$userid=$_SESSION['userid'];
$task_id=$_GET['task_id'];
$sql_cursor=mysqli_query($conn,"select * from upload where task_id=$task_id");

while($row=mysqli_fetch_assoc($sql_cursor))
{
   $name=$row['name'];
   $details=$row['details'];
   $task_type=$row['task_type'];
   $due_date=$row['due_date'];
   $current_date=$row['current_date'];
   $task_id=$row['task_id'];

echo"<h3 style=color:red;>Due Date:$due_date</h3>";

echo "<div class='d-flex justify-content-center align-items-center vh-100'>
<form action='update.php?task_id=$task_id' class='bg-secondary p-3'  id='main' style='height:450px; width:400px;' method='post'>
    <div class='text-center text-white'>
        <h4 class='mt-3' style='color:black; font-size:30px;'>Update Tasks</h4>
    </div>
    <input type='text' value='$name' name='name' class='form-control mt-2'>
    <textarea name='details' cols='10' rows='5' class='form-control mt-2'>$details</textarea>
    <input type='date' name='due_date' class='form-control mt-2'>
    <select name='task_type' id='' class='form-control mt-2' required>
      <option value='today'>Today</option>
      <option value='work'>Work</option>
      <option value='shopping'>Shopping</option>
      <option value='college'>College</option>
      <option value='medicine'>Medicine</option>
    </select>
    <div class='text-center mt-2'>
    <button class='btn btn-warning mt-2'>Update</button>
    </div>
</form>
</div>";
}

?>




