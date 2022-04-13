<?php
include("config.php");
$result=mysqli_query("SELECT * FROM queued_commands ORDER BY timestamp ASC",$link);

echo "<table border= '1' >";
echo "<tr>";
echo "<td align=center> <b>ID No</b></td>";
echo "<td align=center><b>Time</b></td>";
echo "<td align=center><b>Command</b></td>";
echo "<td align=center><b>Argument</b></td></td>";

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
