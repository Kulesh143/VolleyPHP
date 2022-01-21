<?php

header("Content-Type: application/json; charset=UTF-8");
if ($_SERVER['REQUEST_METHOD']=='GET') {



    require_once 'connect.php';


$sql = "SELECT * FROM user WHERE name='$_GET[naga]'";
    $result = mysqli_query($conn, $sql);
$response=array();
while($row = mysqli_fetch_array($result)){
   

      array_push($response,array("id"=>$row["id"],"name"=>$row["name"],"email"=>$row["email"],"mobile"=>$row["mobile"],"password"=>$row["password"]));

        
   

            }
echo json_encode($response);

}


 ?>
