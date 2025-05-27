<?php 
header('Content-Type: application/json');
header('Access-Content-Allow-Origin: *');
header('Access-Content-Allow-Methods: DELETE');
header('Access-Content-Allow-Headers:Access-Content-Allow-Headers,Content-Type,Access-Content-Allow-Methods,Authorization,X-Requested-With');

include 'config.php';

$data = json_decode(file_get_contents("php://input"),true);
$student_id  = $data['id'];

$sql = "DELETE FROM students WHERE id = {$student_id}";

if(mysqli_query($conn,$sql)){

    echo json_encode(array('message' => 'Student Record Deleted.', 'status' => true));
}
else{
    echo json_encode(array('message' => 'Student Record Not Deleted', 'status' => false));
}
?>