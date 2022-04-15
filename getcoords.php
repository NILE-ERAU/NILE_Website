<?php
include("config.php");
$result = mysqli_query($link, "select * FROM robot_status ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_row($result);
echo strval($data[2]) . "," . strval($data[3]) . "," . strval($data[4])

?>
