<?php
session_start();

include_once 'header.php';
require_once 'login.php';


echo "<p>Do you have all the ingredients listed in your shopping list? <a href=\"add_ingredient.php\">Add Ingredient</a></p>";

?>

<form method="post" action="add_recipe.php">
	<fieldset>
		<legend>Add a recipe</legend>
		<label for="name">Name:</label>
		<input type="text" name="name" required><br>
		<label for="direction">Direction:</label> 
		<input type="text" name="direction" required><br>
		<label for="prep_time">Prep Time:</label> 
		<input type="text" name="prep_time"><br>
		<label for="cook_time">Cook Time:</label> 
		<input type="text" name="cook_time"><br>
		<label for="serving_size">Serving Size:</label> 
		<input type="text" name="serving_size"><br>
		<label for="date">Date:</label> 
		<input type="text" name="date"><br>
		
<?php
	
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT name FROM ingredient";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)){
    echo "<input type='checkbox' name='check_list[]' value='".$row['name']."'>"
        .$row['name'];
    
}


?>

		<input type="submit" name="submit">
	</fieldset>
</form>

<?php

if (isset($_POST['submit'])) { 
	if ((empty($_POST['name'])) || (empty($_POST['direction'])) || (empty($_POST['check_list'])) ) {
		echo "<p>Please fill out all of the form fields!</p>";
	} else {
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$name = sanitizeMySQL($conn, $_POST['name']);
		$direction = sanitizeMySQL($conn, $_POST['direction']);			
		$prep_time = sanitizeMySQL($conn, $_POST['prep_time']);
		$cook_time = sanitizeMySQL($conn, $_POST['cook_time']);
		$serving_size = sanitizeMySQL($conn, $_POST['serving_size']);
		$date = sanitizeMySQL($conn, $_POST['date']);
		
		$query = "INSERT INTO recipe VALUES (NULL, \"$direction\", \"$prep_time\", \"$cook_time\", \"$serving_size\", \"$date\", NULL, NULL, \"$name\")";
		$result = $conn->query($query);
		
		$recipe_id = $conn->insert_id;
	
	

		foreach($_POST['check_list'] as $checkbox){
		echo $checkbox."</br>";
		
		
		
		$query = "INSERT INTO ingredient_to_recipe VALUES (NULL, \"$recipe_id\", (SELECT ingredient_id FROM ingredient WHERE name= '$checkbox'), NULL, NULL)";
		
		$result= $conn->query($query);
		
	
		
		}
		
		}
		
		

		if (!$result) {
			die ("Database access failed: " . $conn->error);
		} else {
			echo "<p>Your recipe is successfully added to the database!</p>";
		
	
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

</form>

<P>View <a href="view_recipe.php">all recipes</a> you have recently created!</P>


<?php include_once 'footer.php';?>