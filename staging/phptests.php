<?php

$mysqli = new mysqli("192.168.66.211", "php", "rtfm", "ajax");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("SELECT * FROM notification LIMIT 10;")) {
    echo "Query Failed failed: (" . $mysqli->errno . ") " . $mysqli->error;
}
$res = $mysqli->query("SELECT * FROM notification LIMIT 10;");

echo "Result set order...\n";
$res->data_seek(0);
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['id'] . "\n";
}
?>