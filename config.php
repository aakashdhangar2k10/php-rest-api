<?php 

$servername = 'localhost';
$username = 'u884474721_phprestapi';
$password = 'Trinaabh@23';
$database = 'u884474721_phprestapi';
 
$conn = new mysqli("$servername","$username", "$password","$database");

if($conn ->connect_errno)
{
    echo 'Failed to connect to MySql :'. $con -> connect_error;
    exit();
}
// else{
    // echo "Succesfull Connected ";
// }

?>
