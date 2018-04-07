<?php
$secure_connection = true;
if(isset($_SERVER['HTTPS'])) {
if(preg_match("/[^a-zA-Z0-9.,_]+/", $_GET['Uz173AB']))
{
    echo '';
}
else if(preg_match("/[^a-zA-Z0-9.,_]+/", $_GET['KgLmn1D']))
{
    echo '';
}
else if(preg_match("/[^a-zA-Z0-9.,_]+/", $_GET['DopPZe4']))
{
    echo '';
}
else if(preg_match("/[^a-zA-Z0-9.,_]+/", $_GET['AqWZ3n0']))
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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
date_default_timezone_set('Europe/Warsaw');
$name = $_POST['Uz173AB'];
$kills = $_POST['KgLmn1D'];
$deaths = $_POST['DopPZe4'];
$mapnum = $_POST['AqWZ3n0'];
$hac_version = $_POST['TqGedOz'];
$date = date('Y-m-d G:i:s', time());
$ip = $_SERVER['REMOTE_ADDR'];

if ($mapnum === '0') {
    $mapnum = 'XGen Hq';
} else if ($mapnum === '1') {
    $mapnum = 'Sunnyvale Trailer Park';
} else if ($mapnum === '2') {
    $mapnum = 'Toxic Spillway';
} else if ($mapnum === '3') {
    $mapnum = 'Workplace Anxiety';
} else if ($mapnum === '4') {
    $mapnum = 'Storage Yard';
} else if ($mapnum === '5') {
    $mapnum = 'Green Labirynth';
} else if ($mapnum === '6') {
    $mapnum = 'Floor Thirteen';
} else if ($mapnum === '7') {
    $mapnum = 'The Pit';
} else if ($mapnum === '8') {
    $mapnum = 'Industrial Drainage';
} else if ($mapnum === '9') {
    $mapnum = 'Globalmegacorp LTD';
} else if ($mapnum === '10') {
    $mapnum = 'Concrete Jungle';
} else if ($mapnum === '11') {
    $mapnum = 'Nuclear Underground';
} else if ($mapnum === '12') {
    $mapnum = 'Unstable Terrace';
} else if ($mapnum === '13') {
    $mapnum = 'Office Space';
} else if ($mapnum === '14') {
    $mapnum = 'The Foundationy';
} else if ($mapnum === '15') {
    $mapnum = 'Brawlers Burrow';
} else if ($mapnum === '16') {
    $mapnum = 'Trench Run';
} else if ($mapnum === '17') {
    $mapnum = 'Corporate Wasteland';
} else if ($mapnum === '18') {
    $mapnum = 'Sewage Treatmenty';
} else if ($mapnum === '19') {
    $mapnum = 'Storm Drain';
} else if ($mapnum === '20') {
    $mapnum = '{Ballistick} Stick Federation Hq';
} else if ($mapnum === '21') {
    $mapnum = '{Ballistick} Transgalactic Comstation';
} else if ($mapnum === '22') {
    $mapnum = '{Ballistick} Space Elevator Control';
} else if ($mapnum === '23') {
    $mapnum = '{Ballistick} Automated Discovery Pod';
} else if ($mapnum === '24') {
    $mapnum = '{Ballistick} The SFVengeance';
} else if ($mapnum === '25') {
    $mapnum = '{Ballistick} Gemini Control Station';
} else if ($mapnum === '26') {
    $mapnum = '{Ballistick} Outpost';
} else if ($mapnum === '27') {
    $mapnum = '{Ballistick} Space Mountain';
} else if ($mapnum === '28') {
    $mapnum = '{Ballistick} Barge';
} else if ($mapnum === '29') {
    $mapnum = '{Ballistick} Cliffside';
} else if ($mapnum === '30') {
    $mapnum = '{Ballistick} Orbit';
} else {
    $mapnum = 'Custom Map';
} 
$sql = "INSERT INTO scores (username, kills, deaths, map, date, ip, version)
VALUES ('$name', '$kills', '$deaths', '$mapnum', '$date', '$ip', '$hac_version')";

if ($conn->query($sql) === TRUE) {
    echo "";
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $conn->close();
}

$conn->close();
} else {
echo "<center>Nice try! Unfortunately for you, this will not work. (:<br /><br><br><IMG SRC='https://s-media-cache-ak0.pinimg.com/236x/02/46/55/0246559c8d352dc2a3679bf1392ec571--site-map-letter-l.jpg'></IMG>";
}
}
}
?>
