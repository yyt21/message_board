<?php
require "connect.php";
session_start();
if(empty($_SESSION["name"]))               
{
    echo"failed";
    header("refresh:2; location:login.html");
    exit;
}
$name= $_SESSION['name'];
$message=$_POST['message'];
$sql="INSERT INTO messages (name,message) VALUES ('$name','$message')";
if($conn->query($sql) === TRUE){
    echo"ok";
    echo "<script>alert('留言成功')</script>";
    header('refresh:2; url="../html/welcome.html"');
    exit;
}

?>