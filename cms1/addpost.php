<?php 
//If magic quotes is turned on then strip slashes
if (get_magic_quotes_gpc()) {
	foreach ($_POST as $key => $value) {
		$_POST[$key] = stripslashes($value);
	}
}

// Extract form submission
$firstname = (isset($_POST["firstname"]))?$_POST["firstname"]:"";
$lastname = (isset($_POST["lastname"]))?$_POST["lastname"]:"";
$postdate = (isset($_POST["postdate"]))?$_POST["postdate"]:"";
$postlocation = (isset($_POST["postlocation"]))?$_POST["postlocation"]:"";
$datereceived = (isset($_POST["datereceived"]))?$_POST["datereceived"]:"";
$resumelocation = (isset($_POST["resumelocation"]))?$_POST["resumelocation"]:"";
$submitAdd = (isset($_POST["submitAdd"]))?$_POST["submitAdd"]:"";

// Open connection to database
include("db_connect.php");

$db_firstname = addslashes($firstname);
$db_lastname = addslashes($lastname);
$db_postdate = addslashes($postdate);
$db_postlocation = addslashes($postlocation);
$db_datereceived = addslashes($datereceived);
$db_resumelocation = addslashes($resumelocation);


// get resume_id from query string
$resume_id = (isset($_REQUEST["resume_id"]))?$_REQUEST["resume_id"]:"";


// If form has been submitted, insert post into database
if ($submitAdd) {
	$sql = "INSERT INTO resumes (firstname, lastname, postdate, postlocation, datereceived, resumelocation) VALUES ('$db_firstname', '$db_lastname', '$db_postdate', '$db_postlocation', '$db_datereceived', '$db_resumelocation')";
	$result = mysql_query($sql);
	if (!$result) {
		$message = "Failed to insert resume. MySQL said " . mysql_error();
	} else {
		$message = "Successfully inserted the resume of $firstname $lastname.";
		$resume_id = mysql_insert_id();
	}
}




// If resume_id is a number get post from database
if (preg_match("/^[0-9]+$/", $resume_id)) {
	$editmode = true;

	//If form has been submitted, update resume
	if (isset($_POST["submitUpdate"])) {
		$sql = "UPDATE resumes SET 
			firstname = '$db_firstname',
			lastname = '$db_lastname',
			postdate = '$db_postdate',
			postlocation = '$db_postlocation'
			WHERE resume_id = $resume_id";
			$result = mysql_query($sql);
			if (!$result) {
				$message = "Failed to update resume. MySQL said " . mysql_error();
			} else {
				$message = "Successfully updated resume of '$firstname' '$lastname'.";
			}
	}

	$sql = "SELECT * FROM resumes WHERE resume_id=$resume_id";
	$result = mysql_query($sql);
	$myresume = mysql_fetch_array($result);

	if($myresume) {
		$firstname = $myresume["firstname"];
		$lastname = $myresume["lastname"];
		$postdate = $myresume["postdate"];
		$datereceived = $myresume["datereceived"];
	} else {
		$message = "No resume matching that resume_id.";
	}
} else {
	$editmode = false;
}
?>
<!doctype>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>
			<?php 
				switch ($editmode) {
					case true:
						echo "Edit resume";
						break;
					case false:
						echo "Add resume";
						break;
				}
			?>
		</title>
	</head>
	<body>
		<h1>
			<?php
				switch ($editmode) {
					case true:
						echo "Edit resume";
						break;
					case false:
						echo "Add new resume";
						break;
				}
			?>
		</h1>
		<?php 
		if (isset($message)) {
			echo "<p class='message'>$message</p>";
		}
		?>
		<form method="post" action="<?php echo $_SERVER["PHP_SELF"] ?>">
			<p>First Name: <input type="text" name="firstname" size="25" value="<?php if (isset($firstname)) {echo $firstname;} ?>" /></p>
			<p>Last Name: <input type="text" name="lastname" size= "30" value="<?php if (isset($lastname)) {echo $lastname;} ?>" /></p>
			<p>Date ad was posted: <input type="text" name="postdate" size="20" value="<?php if (isset($postdate)) {echo $postdate;} ?>" />yyyy-mm-dd</p>
			<p>Post Location: <input type="button" name="postlocation" value="Upload" /></p>
			<p>Date resume was received: <input type="text" name="datereceived" size="20" value="<?php if (isset($datereceived)) {echo $datereceived;} ?>" />yyyy-mm-dd</p>
			<p>Resume Location: <input type="button" name="resumelocation" value="Upload" /></p>
			<p><?php 
				switch ($editmode) {
					case true:
						echo "<input type='hidden' name='resume_id' value='$resume_id' />";
						echo "<input type='Submit' name='submitUpdate' value='Update resume' />";
						break;
					case false:
						echo "<input type='Submit' name='submitAdd' value='Add resume' />";
						break;
				}
				?>
			</p>
		</form>
	</body>
</html>
