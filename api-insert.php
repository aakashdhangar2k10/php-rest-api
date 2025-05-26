<?php 
header('Content-Type: application/json');
header('Access-Content-Allow-Origin: *');
header('Access-Content-Allow-Methods: POST');
header('Access-Content-Allow-Headers:Access-Content-Allow-Headers,Content-Type,
Access-Content-Allow-Methods,Authorization,X-Requested-With');


include 'config.php';

$data = json_decode(file_get_contents("php://input"),true);


$name  = $data['name'];
$age  = $data['age'];
$city  = $data['city'];

$sql = "INSERT INTO students(name, age, city) VALUES ('{$name}','{$age}','{$city}')";


if(mysqli_query($conn,$sql)){
    echo json_encode(array('message' => 'Student Record Inserted.', 'status' => True));
}
else{
    echo json_encode(array('message' => 'Student Record Not Inserted.', 'status' => false));
}


?>