<?php
include_once "connection.php";

session_start();
$_SESSION["login_status"]=false;

$uname=$_POST["username"];
$upass=$_POST["password"];


$sql_cursor=mysqli_query($conn,"select * from user where username='$uname' and password='$upass'");
$matched_row_count=mysqli_num_rows($sql_cursor);
if($matched_row_count==0)
{
    echo "Invalid Credentials!!";
}
else
{
    echo "Login Success";
    $row=mysqli_fetch_assoc($sql_cursor);
    $user_type=$row["user_type"];
    $userid=$row["userid"];
    $username=$row["username"];
    $uage=$row["uage"];

    if($user_type=="premium")
    {
        $_SESSION["login_status"]=true;
        $_SESSION["userid"]=$userid;
        $_SESSION["user_type"]=$user_type;
        $_SESSION["username"]=$username;
        $_SESSION["uage"]=$uage;

        header("location:../premium/home.php");
    }
    else if($user_type=="regular")
    {
        $_SESSION["login_status"]=true;
        $_SESSION["userid"]=$userid;
        $_SESSION["user_type"]=$user_type;
        $_SESSION["username"]=$username;
        $_SESSION["uage"]=$uage;
        header("location:../regular/home.php");
    }
    else if($user_type=="restricted")
    {
        $_SESSION["login_status"]=true;
        $_SESSION["userid"]=$userid;
        $_SESSION["user_type"]=$user_type;
        $_SESSION["username"]=$username;
        $_SESSION["uage"]=$uage;
        header("location:../restricted/home.php");
    }
}

?>