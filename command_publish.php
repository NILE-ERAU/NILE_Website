<?php


echo "<h2>Schedule Command</h2>";
echo "<form action='add_entry.php' method='post' width=100%>";
echo "<table class= 'greyGridTable' width=100%>";
echo "<thead>";
echo "<tr>";
echo "<td width = 250px>Time</td>";
echo "<td width = 100px>Command</td>";
echo "<td>θ (deg)</td>";
echo "<td>R (m)</td>";
echo "<td>Z (m)</td>";
echo "<td>D0</td>";
echo "<td>D1</td>";
echo "<td>I0</td>";
echo "<td>Add</td></tr></thead>";
<<<<<<< HEAD
echo "<tbody>";
echo "<td><input type='datetime-local' id='timestamp' name='timestamp'></td>";
echo "<td><input type='text' id='command' name='command' width=10%></td>";
echo "<td><input type='number' id='theta' name='theta' value=0 step='any'></td>";
echo "<td><input type='number' id='r' name='r' value=0 step='any'></td>";
echo "<td><input type='number' id='z' name='z' value=0 step='any'></td>";
echo "<td><input type='number' id='d0' name='d0' value=0 step='any'></td>";
echo "<td><input type='number' id='d1' name='d1' value=0 step='any'></td>";
echo "<td><input type='number' id='i0' name='i0' value=0></td>";
echo "<td><input type='submit' value='+'></td>";
=======
echo "<tbody><tr>";
echo "<td width = 250px><input type='datetime-local' id='timestamp' name='timestamp'></td>";
echo "<td width = 100px><input type='text' id='command' name='command'></td>";
echo "<td><input type='number' id='theta' name='theta' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='r' name='r' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='z' name='z' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='d0' name='d0' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='d1' name='d1' value=0 step='any' class='numinput'></td>";
echo "<td><input type='number' id='i0' name='i0' value=0 class='numinput'></td>";
echo "<td><input type='submit' value='+' class='numinput'></td>";
>>>>>>> 615f1f8455c70c9170d2922e21a554301743d06c
echo "</tr></tbody>";
echo "</table></form>";


?>
