<?php
session_start();
require_once 'login.php';


function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
function sanitizeMySQL($connection, $var)
{
	$var = $connection->real_escape_string($var);
	$var = sanitizeString($var);
	return $var;
}

if (isset($_POST['submit'])) { //check if the form has been submitted
	if ((empty($_POST['favoritegraphicnovel'])) || (empty($_POST['age'])) || (empty($_POST['gender'])) || (empty($_POST['genre'])) ) {
		echo "<center><p>Please fill out all of the form fields!</p></center>";
	} else {
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error) die($conn->connect_error);
		$favoritegraphicnovel = sanitizeMySQL($conn, $_POST['favoritegraphicnovel']);
		$age = sanitizeMySQL($conn, $_POST['age']);		
		$gender = sanitizeMySQL($conn, $_POST['gender']);
		$genre = sanitizeMySQL($conn, $_POST['genre']);
		$query = "INSERT INTO user_information(user_id,user_age,user_gender,user_genre) VALUES(NULL,\"$age\", \"$gender\", \"$genre\") ";
		$result = $conn->query($query);
		$theid = $conn->insert_id;
		$query2 = "INSERT INTO user_graphic(user_id2,graphic_novel) VALUES($theid,\"$favoritegraphicnovel\")";
		$_SESSION['favoritegraphicnovel2'] = $favoritegraphicnovel;
		$_SESSION['age2'] = $age;
		$_SESSION['gender2'] = $gender;
		$_SESSION['genre2'] = $genre;
		$result2 = $conn->query($query2);
		if (!$result) {
			echo "<p>Database access failed</p>";
			die ("Database access failed: " . $conn->error);
		} else {
			header("Location: results.php")
	
			;
		}
		if (!$result2) {
			echo "<p>Database access failed</p>";
			die ("Database access failed: " . $conn->error);
		} else {
			header("Location: results.php")
			;
		}
	}
}





?>

<html>
<link href="style.css" rel="stylesheet" type="text/css" />

<div id = "questions">
<center>
<img src="images/shazamlogo.png" width="500" height="360" alt="Shazam logo"/>
<body>

<form method="post" action="homepage.php">
<p>What is your favorite graphic novel?</p>
<input type="text" name="favoritegraphicnovel"><br> 

<br><p>What is your age?</p>
<input type="radio" name="age" value="under12">0-12<br><input type="radio" name="age" value="under18">12-18<br>

<br><p>What is your gender?</p>
<input type="radio" name="gender" value="Female">Female<br><input type="radio" name="gender" value="Male">Male<br>

<br><p>What is your favorite genre?</p>
<input type="radio" name="genre" value="romance">Romance  <input type="radio" name="genre" value="horror">Horror  <input type="radio" name="genre" value="adventure">Adventure  <input type="radio" name="genre" value="mystery">Mystery  <br>
<br><input type="submit" name="submit" value="Shazam!">
</form>
</center>
</div>
</body>

</html>
