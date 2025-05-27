<?php 
header('Content-Type: application/json');
header('Access-Content-Allow-Origin: *');
header('Access-Content-Allow-Methods: PUT');
header('Access-Content-Allow-Headers:Access-Content-Allow-Headers,Content-Type,Access-Content-Allow-Methods,Authorization,X-Requested-With');



$data = json_decode(file_get_contents("php://input"), true);

$id  = $data['id'];
$name  = $data['name'];
$age  = $data['age'];
$city  = $data['city'];

include 'config.php';

$sql = "UPDATE students SET name = '{$name}', age = '{$age}', city = '{$city}' WHERE id = {$id}"; 

if(mysqli_query($conn,$sql)){
    echo json_encode(array('message' => 'Student Record Updated.', 'status' => True));
}
else{
    echo json_encode(array('message' => 'Student Record Not Updated.', 'status' => false));
}
?>