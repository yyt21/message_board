<?php
 require 'connect.php';

$q = $_GET['q'];  

    $sql="SELECT * FROM messages order by id desc;";
    $result = mysqli_query($conn,$sql);
 
echo "<table border='1'>
<tr>
<th>ID</th>
<th>留言</th>
</tr>";
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['message'] . "</td>";
    echo "</tr>";
}

mysqli_close($conn);
?>
