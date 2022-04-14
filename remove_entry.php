<?php
include("config.php");
$sql = "delete FROM queued_commands WHERE id = " . $_POST["delete_id"];
if ($link->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();

header("location: main.php");
exit;
?>
