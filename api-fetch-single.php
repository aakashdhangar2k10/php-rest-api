<?php 
header('Content-Type: application/json');
header('Access-Content-Allow-Origin: *');
include 'config.php';

$data = json_decode(file_get_contents("php://input"),true);
$student_id  = $data['id'];

$sql = "SELECT * FROM students WHERE id = {$student_id}";
$result = mysqli_query($conn,$sql) or die("SQL Query Failed.");

if(mysqli_num_rows($result)>0){

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
}
else{
    echo json_encode(array('message' => 'No Record Found.', 'status' => false));
}


?>