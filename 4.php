<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>


	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">


		<?php

		/*  Step1: Define a function and make it return a calculation of 2 numbers
*/

		function calculate($number1, $number2)
		{
			$sum = $number1 + $number2;
			return $sum;
		}

		$result = calculate(365, 753);
		echo $result;

		/*Step 2: Make a function that passes parameters and call it using parameter values


 */
		function value($value1, $value2)
		{
			$sum = $value1 + $value2;
			return $sum;
		}

		$result = value(34, 28);
		echo "<br>";
		echo $result . "<br>";
		$result = value(64, $result);
		echo $result;

		?>





	</article>
	<!--MAIN CONTENT-->


	<?php include "includes/footer.php"; ?>