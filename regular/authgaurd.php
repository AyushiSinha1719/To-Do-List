<?php
session_start();

$username = $_SESSION['username'];
$user_type = $_SESSION['user_type'];
$userid = $_SESSION['userid'];

echo "<div class='d-flex justify-content-evenly bg-secondary text-white'>
<div style='font-size:22px; color:blue;'>Hello!! $username</div>
<div style='font-size:22px; color:blue;'>Account type:-$user_type</div>
</div>";
?>