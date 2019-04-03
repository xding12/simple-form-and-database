<?php
	// 1. Create a database connection
	require_once("connect-db.php");

	// 2. Perform database query
	$query  = "SELECT * FROM signup";
	$result = mysqli_query($connection, $query);
?>

<?php $title = 'Financial Markets | Database Read'; ?>
<?php include "inc/top.php"; ?> 

<body>

	<h1>Find your information below</h1>

	<ul>
	<?php
		// 3. Use returned data (if any)
		while($data = mysqli_fetch_assoc($result)) {
	?>
		<li><?php echo $data["firstName"], " ", $data["lastName"], "<br><strong>", $data["email"], "</strong>"; ?></li>
	<?php } ?>
</ul>

<!-- reset the database pointer -->
<?php mysqli_data_seek($result,0); ?>

<table border>
  <tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['firstName']; ?></td>
    <td><?php echo $row['lastName']; ?></td>
    <td><?php echo $row['email']; ?></td>
  </tr>
<?php
// close the loop
}
?>
</table>


<?php include "inc/bottom-signup.php"; ?> 

<?php
	// 4. Release returned data
	mysqli_free_result($result);

	// 5. Close database connection
	mysqli_close($connection);
?> 