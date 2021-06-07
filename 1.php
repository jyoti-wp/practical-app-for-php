<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">



		<?php

		$name = "Jyoti";
		$number = 28;

		// this function echos hello 
		echo "<h1>Hello</h1>";


		// this is how we concatinate different variables. make sure to add an empty string. 

		echo $name . " " . $number;


		// you can also use the variable multiple times

		echo "<h1>My age is $number and i am $name; </h1>"

		// we can also asign html tags and images to a variable 



		/* 
		   Step 1:  Use the Echo Function to say hello with html h1                  tags embedded inside php.


		   Step 2: Write a comment above the echo function and explain
		   what that function is doing.


		   */

		?>



	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>