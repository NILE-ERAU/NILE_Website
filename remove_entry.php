<?php
include("config.php");
$sql = "delete FROM queued_commands WHERE id=" . strval(array_keys($_POST['delete_id'])[0]) . ");";
if ($link->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();

header("location: main.php");
exit;
?>
