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
    
$mapsArray = Array(
'0' => 'XGen Hq', '1' => 'Sunnyvale Trailer Park', '2' => 'Toxic Spillway', '3' => 'Workplace Anxiety', '4' => 'Storage Yard', '5' => 'Green Labirynth',
'6' => 'Floor Thirteen', '7' => 'The Pit', '8' => 'Industrial Drainage', '9' => 'Globalmegacorp LTD', 'A' => 'Concrete Jungle', 'B' => 'Nuclear Underground', 
'C' => 'Unstable Terrace', 'D' => 'Office Space', 'E' => 'The Foundation', 'F' => 'Brawlers Burrow', 'G' => 'Trench Run', 'H' => 'Corporate Wasteland', 
'I' => 'Sewage Treatment', 'J' => 'Storm Drain', 'K' => '{B} Stick Federation HQ', 'L' => '{B} Transgalactic Com Station', 'M' => '{B} Space Elevator Control', 
'N' => '{B} Automated Discovery Pod', 'O' => '{B} The SF Vengeance', 'P' => '{B} Gemini Control Station', 'Q' => '{B} Outpost', 'R' => '{B} Space Mountain', 'S' => '{B} Barge', 
'T' => '{B} Cliffside', 'U' => '{B} Orbit', 'a' => '{F} Abandoned City (by Sk1)', 'b' => '{F} Anarchy Streets (by Bloodsyn)', 'c' => '{F} Cruelity (by Jzuo)', 'd' => '{F} Desert Laboratory (by Crocodile)',
'e' => '{F} Exploration (by Difficult)', 'f' => '{F} Facility (by Shadowcasterx4ffc', 'g' => '{F} Failcorp (by Enclave)', 'h' => '{F} Fortmoon (by Hanktankerous)', 'i' => '{F} Island Hopping (by Infal)',
'j' => '{F} Lost Facility (by Volt)', 'k' => '{F} Lowzone (by Springbranch, Stickslayer138)', 'l' => '{F} Marked Territory (by Coldhot)', 'm' => '{F} My pet glock (by Joe7777777)', 'n' => '{F} Space Excavations (by 718)', 
'o' => '{F} Venice Streets (by Jaguar)', 'p' => '{F} Office Pod (by Vegeta,rock)', 'q' => '{F} Space Bridge (by Bullet.girl.)', 'r' => '{F} Elite Base (by Jzuo)', 's' => '{F} D Day (by Shot..to..kill...)', 't' => '{F} Cliffs (by Masterchuf)',
'u' => '{F} Last Map (by ,.Smokez.,)', 'v' => '{F} Ship dock (by Bridgeofstraw)', 'w' => '{F} Radiation (by Jzuo)', 'x' => '{F} Shelter (by Jzuo)', 'y' => '{F} Sewer Tunnel (by Ghecko)', 'z' => '{F} Trench Space (by Jzuo, Dr.wolfe)'
);

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

if (array_key_exists($mapnum, $mapsArrayy)) {
    $mapnum = $mapsArray[$mapnum]
} else {
    $mapnum = 'Custom Map';
}
    
$sql = "INSERT INTO scores (username, kills, deaths, map, date, version)
VALUES ('$name', '$kills', '$deaths', '$mapnum', '$date', '$hac_version')";

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
