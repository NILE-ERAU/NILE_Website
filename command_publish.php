<?php


echo "<h2>Schedule Command</h2>";
echo "<form action='add_entry.php' method='post' width=100%>";
echo "<table class= 'greyGridTable' width=100%>";
echo "<thead>";
echo "<tr>";
echo "<td width = 250px>Time</td>";
echo "<td width = 200px>Command</td>";
echo "<td>θ (deg)</td>";
echo "<td>R (m)</td>";
echo "<td>Z (m)</td>";
echo "<td>D0</td>";
echo "<td>D1</td>";
echo "<td>I0</td>";
echo "<td>Add</td></tr></thead>";
echo "<tbody>";
echo "<td><input type='datetime-local' id='timestamp' name='timestamp'></td>";
echo "<td><input list='command' id='command' name='command'">;
echo "<datalist id='command'>";
echo "<option value='test'>";
echo "<option value='moveTo'>";
echo "<option value='homeTrolley'>";
echo "<option value='homeVert'>";
echo "<option value='homeRot'>";
echo "<option value='water'>";
echo "<option value='hvec'>";
echo "<option value='takeImage'>";
echo "<option value='senseSoil'>";
echo "</datalist></td>";

echo "<td><input type='number' id='theta' name='theta' value=0 step='any' size='2'></td>";
echo "<td><input type='number' id='r' name='r' value=0 step='any' size='2'></td>";
echo "<td><input type='number' id='z' name='z' value=0 step='any' size='2'></td>";
echo "<td><input type='number' id='d0' name='d0' value=0 step='any' size='2'></td>";
echo "<td><input type='number' id='d1' name='d1' value=0 step='any' size='2'></td>";
echo "<td><input type='number' id='i0' name='i0' value=0 size='2'></td>";
echo "<td><input type='submit' value='+'></td>";
echo "</tr></tbody>";
echo "</table></form>";


?>
