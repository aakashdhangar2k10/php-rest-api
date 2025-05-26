<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php-rest-api';
 
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