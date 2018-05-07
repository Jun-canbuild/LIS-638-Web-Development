<?php

require_once 'login.php';
include_once 'header.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM recipe";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;

echo "<table>
<tr>
<th>recipe name</th>
<th>direction</th>
<th>prep time</th>
<th>cook time</th>
</tr>";


while ($row = $result->fetch_assoc()) {
	echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['direction'] . "</td>";
		echo "<td>" . $row['prep_time'] . "</td>";
		echo "<td>" . $row['cook_time'] . "</td>";
	echo "</tr>";
}
echo "</table>";

$result->close();
$conn->close();



?>

<p><a href="add_recipe.php">Add more recipe</a></p>

<?php include_once 'footer.php';?>