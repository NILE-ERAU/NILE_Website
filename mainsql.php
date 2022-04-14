<?php
include("config.php");

$result = mysqli_query($link, "select * FROM queued_commands ORDER BY timestamp ASC");
echo "<h2>Queued Commands</h2>";
echo "<table class= 'greyGridTable' >";
echo "<thead>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Queued For</td>";
echo "<td>Command</td>";
echo "<td>Argument</td></tr></thead>";
echo "<tbody>";
while($data = mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    $command_str = strval(round($data[3],3)) . ', ' . strval(round($data[4],3)) . ', '
                 . strval(round($data[5],3)) . ', ' . strval(round($data[6],1)) . ', '
                 . strval(round($data[7],1)) . ', ' . strval(round($data[8]));
    echo "<td align=center>$command_str</td>";
    echo "</tr>";
};
echo "</tbody>";
echo "</table>";

$result = mysqli_query($link, "select * FROM completed_commands ORDER BY timestamp ASC");
echo "<br/>";
echo "<h2>Completed Commands</h2>";
echo "<table class= 'greyGridTable' >";
echo "<thead>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Completed At</td>";
echo "<td>Queued At</td>";
echo "<td>Command</td>";
echo "<td>Argument</td>";
echo "<td>Status</td></tr></thead>";
echo "<tbody>";
while($data = mysqli_fetch_row($result))
{
    echo "<tr>";
    echo "<td align=center>$data[0]</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[13]</td>";
    echo "<td align=center>$data[2]</td>";
    $arg_str = '';
    echo "<td align=center>$arg_str</td>";
    echo "<td align=center>$data[12]</td>";
    echo "</tr>";
};
echo "</tbody>";
echo "</table>";

?>
