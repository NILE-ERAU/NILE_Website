<?php
include("config.php");
$result = mysqli_query($link, "select * FROM queued_commands ORDER BY timestamp ASC");


header("location: main.php");
exit;
?>
