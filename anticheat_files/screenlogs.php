<?php
if(preg_match("/[^a-zA-Z0-9.,_]+/", $_GET['user']))
{
    echo '';
}
else
{
$servername = "DATABASE_SERVER";
$username = "DATABASE_USERNAME";
$password = "DATABASE_PASSWORD";
$dbname = "DATABASE_NAME";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<body bgcolor='#000000'>";
$user = $_GET['user'];
echo "<title>".$user."'s screens</title><center><font color='FFFFFF' size='50'>Screenshots added by </font><font color='FF0000' size='50'>".$user."</font></center><br />";
$sql = "SELECT * FROM screens WHERE username = '$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $screen = $row['screen'];

        echo "<center><img src='data:image/jpeg;base64,".base64_encode($screen)."'></img><br /><font color='#FFFFFF'>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</font><br />";
}
}
$conn->close();
}
