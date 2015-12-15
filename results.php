<?php
session_start();

?>

<html>
<link href="style.css" rel="stylesheet" type="text/css" />
<body>
<div id = "questions">
<center>
<img src="images/shazamlogo.png" width="500" height="360" alt="Shazam logo"/>
<?php
//load login info, and two other php pages 
require_once 'login.php';
require_once 'similarusers.php';
require_once 'basedonstats.php';

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

$favoritegraphicnovel3 = sanitizeMySQL($conn, $_SESSION["favoritegraphicnovel2"]);

echo "<br>";
echo "<p>Since you liked " . $favoritegraphicnovel3 . "...</p>";

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

# This query will do two things - first get the book_id of the baook they submitted
# then use that in a query to get all the recs from the recs table
# then we don't have to have those big chunks of code where you're hard-coding 
# every book title and what to do (that is impossible to maintain once you get more
# than a handful of books)

$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE recs.id_number LIKE 
(SELECT books_id FROM books WHERE books_title LIKE '%".$favoritegraphicnovel3."%')";

$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;

# If there are any rows sent back, then we'll show the table
if ($rows) {
	echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
		while ($row = $result->fetch_assoc()) {
		echo '<tr>';
		echo "<td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';		
		echo '</tr>';
	}
	echo '</table>';
# If there are no rows then we got no results so will show the user a message to that effect
	} else {
	echo "Sorry! Cannot Compute.";
}


?>

<br>
<a href="homepage.php">
  <img src="images/homeicon.png" alt="home" style="width:50px;height:50px;border:0">
</a>
</center>
</div>


</body>
</html>