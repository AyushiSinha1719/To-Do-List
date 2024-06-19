<?php
include_once "authgaurd.php";
include_once "../user/connection.php";
include_once "menu.html";
?>
<html>
    <head>
        <style>
            #main
            {
                height:450px;
                width:400px;
            }
            </style>
</head>
<body>
<div class="d-flex justify-content-center align-items-center vh-100">
    <form action="upload.php" class="bg-secondary p-3"  id="main" method="post" enctype="multipart/form-data">
        <div class="text-center text-white">
            <h4 class="mt-3" style="color:black; font-size:30px;">Upload Tasks</h4>
        </div>
        <input type="text" placeholder="Task Name" name="name" class="form-control mt-2">
        <textarea name="details" cols="10" rows="5" placeholder="Task Description......" class="form-control mt-2"></textarea>
        <input type="date" name="due_date" placeholder="Due Date" class="form-control mt-2">
        <select name="task_type" id="" class="form-control mt-2" required>
          <option value="personal">Personal</option>
          <option value="today">Today</option>
          <option value="work">Work</option>
          <option value="shopping">Shopping</option>
          <option value="college">College</option>
          <option value="medicine">Medicine</option>
        </select>
        <div class="text-center mt-2">
        <button class="btn btn-warning mt-2">Upload</button>
        </div>
    </form>
</div>


</body>
</html>