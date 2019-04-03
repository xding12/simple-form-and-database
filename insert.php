<?php
	// 1. Create a database connection
	require_once("connect-db.php");

	// This data is coming from HTML form values in $_POST
	$insertFirstName = $_POST["first"];
	$insertLastName = $_POST["last"];
	$insertEmail = $_POST["email"];

	// You really should escape all strings
	$insertFirstName = mysqli_real_escape_string($connection, $insertFirstName);
	$insertLastName = mysqli_real_escape_string($connection, $insertLastName);
	$insertEmail = mysqli_real_escape_string($connection, $insertEmail);
	
	// 2. Perform database query
	$query  = "INSERT INTO signup (firstName, lastName, email) VALUES ('$insertFirstName','$insertLastName ','$insertEmail')";
	$result = mysqli_query($connection, $query);

?>

<?php $title = 'Financial Markets | Thank You'; ?>
<?php include "inc/top.php"; ?> 

<body>

	<h1>Thank you for signing up!</h1>

<?php
	if ($result) {
		echo "Your information has been received!";
?>
<?php
	} else {
		die("System failed.");
	}
?>


<div>
	<a href="index.php">Go back to the main page</a>
</div>

</body>
</html>


<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?>