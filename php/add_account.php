<?php
require 'connect.php';

$ID = $_POST['id'];
$GENDER = $_POST['gender'];
$PASSWORD = $_POST['key'];
$PASS2 = $_POST['key2'];
$salt="zzzz";

$sql1="select * from users where id = '$ID'";
$result = mysqli_query($conn, $sql1);
$rows=mysqli_num_rows($result);

if($rows){
    header('refresh:2, url=signup.html');
    echo "<script>alert('用户名已经存在！（两秒后返回）')</script>";
    exit;
}

if($_POST["key"]!=$_POST["key2"]){
   header('refresh:3, url=signup.html');
   echo "<script>alert('两次密码不一样！（三秒后返回）')</script>";
   exit;
}


if(($ID=="")||($GENDER=="")||($PASSWORD=="")){
   header('refresh:3, url=signup.html');
   echo "<script>alert('名字或性别或密码为空！请重新填写’)</script>";
   exit;
}
$MD5_PASS=md5($PASSWORD.$salt);
$sql = "INSERT INTO users (id, gender,pass)
VALUES (?,?,?)";
if($stmt=$conn->prepare($sql)){
    $stmt->bind_param("sss",$ID,$GENDER,$PASSWORD);
    $stmt->execute();
    echo"注册成功！";
    header('refresh:1, url=index.html');
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>

