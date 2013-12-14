<?php 
// open connection to database
include("db_connect.php");

//select all resumes in db
$sql = "SELECT resume_id, lastname FROM resumes ORDER BY resume_id DESC";
$result = mysql_query($sql);
$myresumes = mysql_fetch_array($result);
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>All Resumes</title>
	</head>
	<body>
		<h1>All resumes</h1>
		<?php
		if (isset($message)) {echo "<p class='message'>".$message."</p>";}

		if($myresumes) {
			echo "<ol>\n";
			do {
				$resume_id = $myresumes["resume_id"];
				$lastname = $myresumes["lastname"]; 
				echo "<li value='$resume_id'>";
				echo "<a href='addpost.php?resume_id=$resume_id'>$lastname</a>";
				echo "</li>\n";
			} while ($myresumes = mysql_fetch_array($result));
			echo "</ol>";
		} else {
			echo "<p>There are no resumes in the database.</p>";
		}
		?>
	</body>
</html>