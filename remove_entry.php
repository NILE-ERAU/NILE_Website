<?php
include("config.php");
$sql = "DELETE FROM queued_commands WHERE id = " . $_POST["deleteid"];
if ($link->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();

header("location: main.php");
exit;
?>
