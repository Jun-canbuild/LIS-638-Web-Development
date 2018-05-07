<?php

include_once 'header.php';
require_once 'login.php';

?>



<form action="search.php" method="post">
	<input type="text" name="search" placeholder="search for recipe"/>
	<input type="submit" value="search"/>

</form>



<?php
	
	
if ((empty($_POST['search']))) {
		echo "<p>Please fill out at least one name!</p>";
	} else {	
	
		$search = $_POST['search'];
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$query = "SELECT name FROM recipe WHERE name='%$search%'";
		$result = mysqli_query($conn, $query);
		
	
		if($result->num_rows > 0) {
			echo "good luch!";

			}
			
        else{ 
            echo"There is no match with the name you entered, please try again";
        }
	}
	

?>

