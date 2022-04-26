<?php
include("config.php");
$sql =  "insert INTO queued_commands
         (timestamp, command)
         VALUES
         ('2022-04-20 04:20:00.000000','takeImage');";

if ($link->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
header("location: main.php");
exit;
?>
