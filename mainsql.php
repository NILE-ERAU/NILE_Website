<?php
include("config.php");
$result = mysqli_query($link, "select * FROM queued_commands ORDER BY timestamp ASC");

echo "<table class= 'greyGridTable' >";
echo "<thead>";
echo "<tr>";
echo "<td><p>ID</p></td>";
echo "<td><p>Time</p></td>";
echo "<td><p>Command</p></td>";
echo "<td><p>Argument</p></td></tr></thead>";
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
