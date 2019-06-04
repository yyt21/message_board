<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <title>你好啊</title>
        <link href="style.css" rel=stylesheet type="text/css">

    </head>
<body>
<form action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <div class="layui-form-item" style="color: gray">留言</div>
                <textarea name="message" rows="10" cols="80"></textarea>
                <input type="submit" value="修改">
            </form>
</body>
</html>

<?php
require 'connect.php';

session_start();
$id=$_POST["id"];
echo $id;
$message=$_POST['message'];


mysqli_query($conn,"UPDATE messages SET message=$message WHERE id=$id;"
);

mysqli_close($conn);


?>