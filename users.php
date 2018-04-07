<?php
echo "<title>AntiCheat users</title>";
$servername = "SERVER_URL";
$username = "DATABASE_USERNAME";
$password = "DB_USER_PASSWORD";
$dbname = "DATABASE_NAME";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<body bgcolor='#000000' link='#FF0000' vlink='#FF0000' alink='#FF0000'>";
echo "<center><font color='FFFFFF' size='50'>Anticheat users</font><br />";

date_default_timezone_set('Europe/Warsaw');
$sql = "DELETE FROM scores WHERE date < ((NOW() + INTERVAL 1 HOUR) - INTERVAL 1 DAY)";
$result = $conn->query($sql);

$sql = "DELETE FROM screens WHERE date < ((NOW() + INTERVAL 1 HOUR) - INTERVAL 3 MINUTE)";
$result = $conn->query($sql);

$sql = "SELECT DISTINCT username FROM scores";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<font size='5'><a href='anticheat/logs.php?user=".ucfirst($row['username'])."' target='_blank'>".ucfirst($row['username'])."</a></font><br><br>";
    }
} else {
    echo "0 results";
}
$sql = "SELECT DISTINCT username FROM screens";
$result = $conn->query($sql);
echo "<font color='#FFFFFF'>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br /><font size='50'>Screenshots</font></font><br /><br />";
if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<font color='#FFFFFF' size='5'><a href='anticheat/screenlogs.php?user=".ucfirst($row['username'])."' target='_blank'>".ucfirst($row['username'])."</a></font><br><br>";
}
} else {
echo "";
}

$sql = "SELECT SUM(kills) AS kills FROM scores";
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $tkills = $row['kills'];
       echo "<font color='#ffd700'>Today ".$tkills." stickmen were killed and ";
       $sql = $conn->query("SELECT COUNT(*) FROM scores");
       $row = $sql->fetch_row();
       $rounds = $row[0];
       echo $rounds." rounds were played.</font><br /><font color='FFFFFF'>Scores are cleaned up every 24 hours<br />Every screenshot last only 3 minutes</font>";
}
} else {
    echo "";
}
$conn->close();
