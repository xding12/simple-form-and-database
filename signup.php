<?php $title = 'Financial Markets | Newsletter'; ?>
<?php include "inc/top.php"; ?> 

<body class="container3">

<header class="signup">
	<h1><a href="index.php">Financial Markets</a></h1>
    <?php include "inc/nav.php"; ?>
</header>

<main>

	<h2>Newsletter Signup</h2>

	<p>
		We'll bring you the <em>best</em> market updates available on the web <em>for free</em>.  Whether you're new to the field of financial markets or a seasoned professional who wants a quick digest of what's going on, you'll find something for everyone in this newsletter.  You'll get a newsletter every Monday morning at 7am & no other email from us, guaranteed.  What do you have to lose?  <strong>Sign up now!</strong>
	</p>

	<form method="post" action="javascript:alert('Thanks for signing up!');">
		<div>
			<label for="first">First Name: </label>
			<input type="text" name="first" id="first">
		</div>

		<div>
			<label for="last">Last Name: </label>
			<input type="text" name="last" id="last">
		</div>

		<div>
			<label for="email">E-mail: </label>
			<input type="email" name="email" id="email">
		</div>

		<input type="submit" value="Submit">
		</form>
</main>


<?php include "inc/bottom.php"; ?>  
