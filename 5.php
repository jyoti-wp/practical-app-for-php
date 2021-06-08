<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

	<aside class="col-xs-4">
		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		echo ceil(4.5);
		echo "<br>";
		$string = "sdgfkgfkhjvsfkgagiufnaklsdnfcljkshbfuksd";
		$value = strlen($string);
		echo $value;
		echo "<br>";

		$newValue = [3435, 756476, 87967, $string];
		in_array($string, $newValue);
		echo in_array($string);
		/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */


		?>





	</article>
	<!--MAIN CONTENT-->
	<?php include "includes/footer.php"; ?>