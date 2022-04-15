<?php
include("config.php");

$result = mysqli_query($link, "select (ip_address, last_boot) FROM system_info ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_row($result);
echo "<h2>System Info</h2>";
echo "<table class= 'greyGridTable' width=100%>";
echo "<thead>";
echo "<tr>";
echo "<td>Last Boot</td>";
echo "<td>IP Address</td>";
echo "</tr></thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>$data[1]</td>";
echo "<td>$data[0]</td>";
echo "</tr></tbody>";
echo "</table>"
echo "<br/>"

$result = mysqli_query($link, "select * FROM robot_status ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_row($result);
echo "<h2>Robot Status</h2>";
echo "<table class= 'greyGridTable' width=100%>";
echo "<thead>";
echo "<tr>";
echo "<td>Time</td>";
echo "<td>θ (deg)</td>";
echo "<td>R (m)</td>";
echo "<td>Z (m)</td>";
echo "</tr></thead>";
echo "<tbody>";
echo "<tr>";
echo "<td>$data[1]</td>";
echo "<td>$data[2]</td>";
echo "<td>$data[3]</td>";
echo "<td>$data[4]</td>";
echo "</tr></tbody>";
echo "</table>"



?>
