<?php
include("config.php");
$result = mysqli_query($link, "select * FROM queued_commands ORDER BY timestamp ASC");

if(strcmp($_SESSION['role'],'admin')) {
  echo "<h2>Schedule Command</h2>";
  echo "<table class= 'greyGridTable' >";
  echo "<thead>";
  echo "<tr>";
  echo "<td>Time</td>";
  echo "<td>Command</td>";
  echo "<td>θ</td>";
  echo "<td>R</td>";
  echo "<td>Z</td>";
  echo "<td>D0</td>";
  echo "<td>D1</td>";
  echo "<td>I0</td></tr></thead>";
  echo "<tbody>";
  echo "<form action='add_entry.php'>";
  echo "<td><input type='datetime-local' id='timestamp' name='timestamp'></td>";
  echo "<td><input type='text' id='command' name='command'></td>";
  echo "<td><input type='number' id='theta' name='theta'></td>";
  echo "<td><input type='number' id='r' name='r'></td>";
  echo "<td><input type='number' id='z' name='z'></td>";
  echo "<td><input type='number' id='d0' name='d0'></td>";
  echo "<td><input type='number' id='d1' name='d1'></td>";
  echo "<td><input type='number' id='i0' name='i0'></td></tr></body>";
  echo "</form>";
  echo "</tbody>";
  echo "</table>";
}

echo "<h2>Queued Commands</h2>";
echo "<table class= 'greyGridTable' >";
echo "<thead>";
echo "<tr>";
echo "<td>Time</td>";
echo "<td>Command</td>";
echo "<td>Command</td>";
echo "<td>Argument</td></tr></thead>";
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
