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
echo "<title>".$user."</title><center><font color='FFFFFF' size='50'>Games played by </font><font color='FF0000' size='50'>".$user."</font></center><br />";
$tkills = "";
$tdeaths = "";

$sql = "SELECT SUM(kills) AS kkills, SUM(deaths) as ddeaths FROM scores WHERE username = '$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $tkills = $row['kkills'];
       $tdeaths = $row['ddeaths'];
       $tkdr = $tkills / $tdeaths;
       $rounds = $result->num_rows;
       echo "<center><font color='#FFFFFF' size='5'>Total Kills: ".$tkills." | Total Deaths: ".$tdeaths." | Total K/D Ratio: ".number_format((float)$tkdr, 2, '.', '');
}
} else {
    echo "";
}
$sql = $conn->query("SELECT COUNT(*) FROM scores WHERE username ='$user'");
$row = $sql->fetch_row();
$rounds = $row[0];
echo " | Total games: ".$rounds."</font><font color='#FFFFFF'><br/>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------<br /></font>";

$sql = "SELECT * FROM scores WHERE username = '$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) { 
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $kills = $row['kills'];
        $deaths = $row['deaths'];
        $map = $row['map'];
        $date = $row['date'];
        $hac_version = $row['version'];
        $kdr = $kills / $deaths;
        if($kills === '0' && $deaths === '0') {
        $kdr = '0.00';
}
        echo "<center><font color='#ffd700'>".$date." (CET)</font><font color='#FFFFFF'><br />Kills: ".$kills." | Deaths: ".$deaths." | K/D: ".number_format((float)$kdr, 2, '.', '')." | Map: ".$map." | Hydra Version: <FONT COLOR='#00FF00'>".$hac_version."</FONT><br /><br />";
}
} else {
    echo "<font color='FFFFFF'>".$user." didn't play today yet.";
    $conn->close();
}
$conn->close();
}
