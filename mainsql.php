<?php
include("config.php");
$result = mysqli_query("select * FROM queued_commands ORDER BY timestamp ASC", $link);

echo "<table class= ''no_outline'' >";
echo "<tr>";
echo "<td align=center><p>ID</p></td>";
echo "<td align=center><p>Time</p></td>";
echo "<td align=center><p>Command</p></td>";
echo "<td align=center><p>Argument</p></td></td>";

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
echo "</table>";
?>
