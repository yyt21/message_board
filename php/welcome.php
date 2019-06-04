 <?php 
session_start();
 if(empty($_SESSION["name"]))               
        {
            echo"failed";
            header("refresh:2; location:../html/login.html");
            exit;
        }
 $name = $_SESSION['name'];
 require 'connect.php';
            $sql = "SELECT * FROM `messages` WHERE `name` LIKE '$name'";
            $result=$conn->query($sql);
            $judge=1;
            $data = [];
            while($row=$result->fetch_assoc()){
                $item = [];
                $item['msg'] = $row["message"];
                $item['id'] = $row["id"];
                array_push($data, $item);
            }
            echo json_encode($data);

?>



