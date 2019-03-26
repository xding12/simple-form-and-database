<?php $title = 'Midterm Project - Sign Up'; ?>
<?php include "inc/top.inc"; ?> 


<body class="container3">

<header class="signup">
	<h1><a href="index.php">Sign-up for a newsletter</a></h1>
    <?php include "inc/nav.inc"; ?>
</header>


<form method="post" action="form-processor.php">
	<label for="name">Your Name: </label><input type="text" name="name" id="name" size="37"><br><br>
    <label for="email">Your Email: </label><input type="email" name="email" id="email" size="38"><br><br>

    
    <input type="submit" value="Submit">
</form>


<?php include "inc/bottom.inc"; ?>  
