<?php
session_start();
include("Master.php");

if(isset($_POST['login']))
{
    $UserID=$_POST['UserID'];
    $Password=$_POST['Password'];

    $sql="select * from user where UserID='$UserID' and Password='$Password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_fetch_array($result)>0)
    {
        $_SESSION['UserID']=$UserID;
        header('Location:index.php');
    }
    else
    {
        echo "<h1 style='Color:red;'>Username and Passsword not match</h1>";
        echo "<a href='login.php'>Click Here to go to Login Page</a>";
    }


}


?>