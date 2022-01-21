<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {

   
    require_once 'connect.php';


$sql = "SELECT * FROM user WHERE name='$_POST[naga]'";
    $result = mysqli_query($conn, $sql);
$response=array();
while($row = mysqli_fetch_array($result)){
   

      array_push($response,array("id"=>$row["id"],"name"=>$row["name"],"email"=>$row["email"],"mobile"=>$row["mobile"],"password"=>$row["password"]));

        
   

            }
echo json_encode($response);

}


 ?>
