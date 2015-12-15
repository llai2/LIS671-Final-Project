<?php


require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);


if ($conn->connect_error) die($conn->connect_error);

echo "<br>";
echo "<p>Based on your age and genre...</p>";

//based on age x genre that the user has selected. multiple possibilities 
if ($_SESSION["age2"] == "under18" AND $_SESSION["genre2"] == "adventure") 
{
$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE
recs.age_group LIKE \"under18\" AND recs.genre LIKE \"adventure\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0) 
{
echo "Sorry! Cannot Compute.";
}
else {
echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';	
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under12" AND $_SESSION["genre2"] == "adventure") 
{
$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE
recs.age_group LIKE \"under12\" AND recs.genre LIKE \"adventure\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0) 
{
echo "Sorry! Cannot Compute.";
}
else {
echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';	
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under12" AND $_SESSION["genre2"] == "romance") 
{
$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE
recs.age_group LIKE \"under12\" AND recs.genre LIKE \"romance\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0) 
{
echo "Sorry! Cannot Compute.";
}
else {
echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';	
	echo '</tr>';
}
	echo '</table>';
}


if ($_SESSION["age2"] == "under18" AND $_SESSION["genre2"] == "romance") 
{
$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE
recs.age_group LIKE \"under18\" AND recs.genre LIKE \"romance\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0) 
{
echo "Sorry! Cannot Compute.";
}
else {
echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';	
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under12" AND $_SESSION["genre2"] == "mystery") 
{
$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE
recs.age_group LIKE \"under12\" AND recs.genre LIKE \"mystery\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0) 
{
echo "Sorry! Cannot Compute.";
}
else {
echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';	
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under18" AND $_SESSION["genre2"] == "mystery") 
{
$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE
recs.age_group LIKE \"under18\" AND recs.genre LIKE \"mystery\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0) 
{
echo "Sorry! Cannot Compute.";
}
else {
echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';	
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under12" AND $_SESSION["genre2"] == "horror") 
{
$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE
recs.age_group LIKE \"under12\" AND recs.genre LIKE \"horror\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0) 
{
echo "Sorry! Cannot Compute.";
}
else {
echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';	
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under18" AND $_SESSION["genre2"] == "horror") 
{
$query = "SELECT books.books_title,books.books_author,books.books_link FROM books JOIN recs ON
books.books_id=recs.recs_id WHERE
recs.age_group LIKE \"under18\" AND recs.genre LIKE \"horror\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0) 
{
echo "Sorry! Cannot Compute.";
}
else {
echo "<table><tr> <th>Book Title</th><th>Author</th><th>Link</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["books_title"]."</td><td>".$row["books_author"].'</td><td><a href="'.$row["books_link"].'">Link here!</a></td>';	
	echo '</tr>';
}
	echo '</table>';
}





?>