<?php
include("config.php");
$sql =  "insert INTO queued_commands
         (timestamp, command, pos_theta_q, pos_r_q, pos_z_q, argument_d0, argument_d1, argument_i0)
         VALUES
         ('2020-04-20 04:20:00.000000','goLive',0,0,0,0,0,0);";

if ($link->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
header("location: main.php");
exit;
?>
