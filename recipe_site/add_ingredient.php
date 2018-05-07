<?php
session_start();

include_once 'header.php';
require_once 'login.php';


if ((empty($_POST['name']))) {
		echo "<p>Please fill out at least one ingredient!</p>";
	} else {
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$name = sanitizeMySQL($conn, $_POST['name']);
		
		$query = "SELECT name FROM ingredient WHERE name LIKE '$name' ";
		$result = $conn->query($query);
		
		if($result->num_rows > 0) {
                    echo 'the ingredient is already in your list'; 
                }
            else{
		
		
		$query = "INSERT INTO ingredient VALUES (NULL, \"$name\", NULL)";
		$result = $conn->query($query);
	
		if (!$result) {
			die ("Database access failed: " . $conn->error);
		} else {
			echo "<p>$name is added to the list!</p>";
		}
	}
}

function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
function sanitizeMySQL($connection, $var)
{
	$var = sanitizeString($var);
	$var = $connection->real_escape_string($var);
	return $var;
}



?>

<form method="post" action="add_ingredient.php">
	<fieldset>
		<legend>Add an ingredient</legend>
		<label for="name">Name:</label>
		<input type="text" name="name" required><br>
		<input type="submit" value="add">
	</fieldset>
</form>




<?php 

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM ingredient";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;

echo "<table border='1'>
<tr>
<th>ingredient id</th>
<th>ingredient name</th>
</tr>";


while ($row = $result->fetch_assoc()) {
	echo "<tr>";
		echo "<td>" . $row['ingredient_id'] . "</td>";
		echo "<td>" . $row['name'] . "</td>";
	echo "</tr>";
}
echo "</table>";

$result->close();
$conn->close();

?>


<P>Start <a href="add_recipe.php">creating recipes</a> with these ingredients</P>


<?php include_once 'footer.php'; ?>