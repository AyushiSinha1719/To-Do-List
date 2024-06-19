<?php
$conn=new mysqli("localhost","root","","todolist");
if($conn->connect_error)
{
    echo "Error in SQL Connection";
    die;
}


?>