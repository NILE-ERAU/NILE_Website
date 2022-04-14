<?php


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


?>
