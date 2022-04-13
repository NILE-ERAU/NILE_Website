<?php
include("config.php");
$result = mysqli_query($link, "select * FROM queued_commands ORDER BY timestamp ASC");

echo "<table class= 'greyGridTable' >";
echo "<thead>";
echo "<tr>";
echo "<td><h3>ID</h3></td>";
echo "<td><h3>Time</h3></td>";
echo "<td><h3>Command</h3></td>";
echo "<td><h3>Argument</h3></td></tr></thead>";
echo "<tbody>";
while($data = mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    $command_str = '';
    echo "<td align=center>$command_str</td>";
    echo "</tr>";
};
echo "</tbody>";
echo "</table>";
?>
