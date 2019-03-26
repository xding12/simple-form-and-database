<?php
// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "xding12@u.rochester.edu";
$emailTo = "xding12@u.rochester.edu";
$subject = "Midterm Project - HTML Forms";

// for the following lines of code, grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more


// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
			// backslash-n means new-line in emails

$body .= "Name: \n"; //...a label
$body .= $name;	  //...a variable
$body .= "\n\n";

$body .= "Email Address: \n"; //...a label
$body .= $email;	  //...a variable
$body .= "\n\n";

// ...used more input fields? Then copy these lines (above)
//   and make more


// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
	 SECTION FOUR: thank the user in HTML;
	 Below, there needs to be an HTML 
	 webpage with a customized message 
	 for the user
	 ********************************** -->



<main>
    <h2>Thank you <?php echo $_POST['name']; ?></h2>
    <p>Go back to <a href="signup.php">Sign-Up page</a>.</p>
</main>

</div><!--.container-->

</body>

</html>
