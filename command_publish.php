<?php


echo "<h2>Schedule Command</h2>";
echo "<form action='add_entry.php' method='post' width=100%>";
echo "<table class= 'greyGridTable' width=100%>";
echo "<thead>";
echo "<tr>";
echo "<td width = 80px>Time</td>";
echo "<td width = 50px>Command</td>";
echo "<td>θ (deg)</td>";
echo "<td>R (m)</td>";
echo "<td>Z (m)</td>";
echo "<td>D0</td>";
echo "<td>D1</td>";
echo "<td>I0</td>";
echo "<td>Add</td></tr></thead>";
echo "<tbody><tr>";
echo "<td width = 80px><input type='datetime-local' id='timestamp' name='timestamp'></td>";
echo "<td width = 50px><input type='text' id='command' name='command'></td>";
echo "<td><input type='number' id='theta' name='theta' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='r' name='r' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='z' name='z' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='d0' name='d0' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='d1' name='d1' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='i0' name='i0' value=0 class='numinput'></td>";
echo "<td><input type='submit' value='+' class='numinput'></td>";
echo "</tr></tbody>";
echo "</table></form>";


?>
