<?php
require "connect.php";
$name=$_POST["id"];
$password=$_POST["key"];
$salt="zzzz";
if(($name=="")||($password=="")){
header('refresh:3; url=login.html');
echo "<script>alert('名字或密码为零，请重新输入（三秒后返回）')</script>";
exit;
}
$MD5_PASS=md5($password.$salt);
$sql = "select * from users where id = ? and pass= ? ";
if($stmt=$conn->prepare($sql)){
$stmt->bind_param("ss",$name, $password);
$stmt->execute();
session_start();
echo "<script>alert('登录成功')</script>";
$_SESSION['name']=$name;
header('refresh:2; url=../html/welcome.html');

exit;
}
else{
        echo "<script>alert('用户不存在或密码错误，请重新输入');location='../html/login.html'</script>";
        exit;
}

