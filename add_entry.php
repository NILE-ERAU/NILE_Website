<?php
include("config.php");
$timestamp = trim($_POST["timestamp"]);
$timestamp_sql = str_replace("T"," ",$timestamp)  . ".000000";
$command = trim($_POST["command"]);
$theta = trim($_POST["theta"]);
$r = trim($_POST["r"]);
$z = trim($_POST["z"]);
$d0 = trim($_POST["d0"]);
$d1 = trim($_POST["d1"]);
$i0 = trim($_POST["i0"]);



$sql =  "insert INTO queued_commands
         (timestamp, command, pos_theta_q, pos_r_q, pos_z_q, argument_d0, argument_d1, argument_i0)
         VALUES
        (" . "'" . $timestamp_sql . "','" . $command . "'," . $theta . "," . $r . ","
           . $z . "," . $d0 . "," . $d1 . "," . $i0 . ");";

if ($link->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
header("location: main.php");
exit;
?>
