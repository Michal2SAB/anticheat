<?php
$secure_connection = true;
if(isset($_SERVER['HTTPS'])) {
$servername = "DATABASE_SERVER";
$username = "DATABASE_USERNAME";
$password = "DATABASE_PASSWORD";
$dbname = "hydraant_anticheat";


$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";

// Temporary file name stored on the server
date_default_timezone_set('Europe/Warsaw');
$name=$_POST['user'];
$date = date('Y-m-d G:i:s', time());
$tmpName = "images/".$name.".png";
// Read the file
$fp = fopen($tmpName, 'r');
$data = fread($fp, filesize($tmpName));
$data = addslashes($data);
fclose($fp);


$query = "INSERT INTO screens ";
$query .= "(screen,username,date,ip) VALUES ('$data','$name','$date')";
$results = mysqli_query($con, $query);

// Close our MySQL Link
mysqli_close($con);
}
?>
