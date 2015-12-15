<?php
require_once 'login.php';



$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) die($conn->connect_error);

echo "<br>";
echo "<p>Similar Users liked...</p>";

// female users 
if (($_SESSION["age2"] == "under12") AND ($_SESSION["gender2"] == "Female") AND ($_SESSION["genre2"] == "adventure")) 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under12\" AND user_information.user_gender LIKE \"F\" AND user_information.user_genre LIKE \"adventure\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}


if ($_SESSION["age2"] == "under18" AND $_SESSION["gender2"] == "Female" AND $_SESSION["genre2"] == "adventure") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under18\" AND user_information.user_gender LIKE \"F\" AND user_information.user_genre LIKE \"adventure\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under12" AND $_SESSION["gender2"] == "Female" AND $_SESSION["genre2"] == "romance") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under12\" AND user_information.user_gender LIKE \"F\" AND user_information.user_genre LIKE \"romance\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}


if ($_SESSION["age2"] == "under18" AND $_SESSION["gender2"] == "Female" AND $_SESSION["genre2"] == "romance") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under18\" AND user_information.user_gender LIKE \"F\" AND user_information.user_genre LIKE \"romance\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}


if ($_SESSION["age2"] == "under12" AND $_SESSION["gender2"] == "Female" AND $_SESSION["genre2"] == "horror") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under12\" AND user_information.user_gender LIKE \"F\" AND user_information.user_genre LIKE \"horror\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}



if ($_SESSION["age2"] == "under18" AND $_SESSION["gender2"] == "Female" AND $_SESSION["genre2"] == "horror") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under18\" AND user_information.user_gender LIKE \"F\" AND user_information.user_genre LIKE \"horror\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}


if ($_SESSION["age2"] == "under12" AND $_SESSION["gender2"] == "Female" AND $_SESSION["genre2"] == "mystery") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under12\" AND user_information.user_gender LIKE \"F\" AND user_information.user_genre LIKE \"mystery\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}


if ($_SESSION["age2"] == "under18" AND $_SESSION["gender2"] == "Female" AND $_SESSION["genre2"] == "mystery") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under18\" AND user_information.user_gender LIKE \"F\" AND user_information.user_genre LIKE \"mystery\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}

////starting males users 
if ($_SESSION["age2"] == "under12" AND $_SESSION["gender2"] == "Male" AND $_SESSION["genre2"] == "adventure") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under12\" AND user_information.user_gender LIKE \"M\" AND user_information.user_genre LIKE \"adventure\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under18" AND $_SESSION["gender2"] == "Male" AND $_SESSION["genre2"] == "adventure") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under18\" AND user_information.user_gender LIKE \"M\" AND user_information.user_genre LIKE \"adventure\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under12" AND $_SESSION["gender2"] == "Male" AND $_SESSION["genre2"] == "romance") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under12\" AND user_information.user_gender LIKE \"M\" AND user_information.user_genre LIKE \"romance\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under18" AND $_SESSION["gender2"] == "Male" AND $_SESSION["genre2"] == "romance") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under18\" AND user_information.user_gender LIKE \"M\" AND user_information.user_genre LIKE \"romance\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}


if ($_SESSION["age2"] == "under12" AND $_SESSION["gender2"] == "Male" AND $_SESSION["genre2"] == "horror") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under12\" AND user_information.user_gender LIKE \"M\" AND user_information.user_genre LIKE \"horror\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}


if ($_SESSION["age2"] == "under18" AND $_SESSION["gender2"] == "Male" AND $_SESSION["genre2"] == "horror") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under18\" AND user_information.user_gender LIKE \"M\" AND user_information.user_genre LIKE \"horror\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under12" AND $_SESSION["gender2"] == "Male" AND $_SESSION["genre2"] == "mystery") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under12\" AND user_information.user_gender LIKE \"M\" AND user_information.user_genre LIKE \"mystery\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}

if ($_SESSION["age2"] == "under18" AND $_SESSION["gender2"] == "Male" AND $_SESSION["genre2"] == "mystery") 
{
$query = "SELECT graphic_novel FROM user_graphic JOIN user_information ON
user_graphic.user_id2=user_information.user_id WHERE
user_information.user_age LIKE \"under18\" AND user_information.user_gender LIKE \"M\" AND user_information.user_genre LIKE \"mystery\" ORDER BY RAND() LIMIT 5";
$result = $conn->query($query);
if (!$result) die ("Database access failed: " . $conn->error);
$rows = $result->num_rows;
if ($rows == 0)
{
echo "Sorry! Cannot Compute.";
}
else 
{
echo "<table><tr><th>Book Title</th></tr>";
}
while ($row = $result->fetch_assoc()) {
	echo '<tr>';
	echo "</td><td>".$row["graphic_novel"]."</td></td>";		
	echo '</tr>';
}
	echo '</table>';
}



?>