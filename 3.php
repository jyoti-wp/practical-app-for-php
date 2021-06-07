<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		$i = 0;
		if ($i < 10) {
			echo "I Love PHP" . "<br>";
		} elseif ($i > 10) {
			echo "I Hate PHP";
		} else {
			echo "I Love Nothing";
		}


		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers */
		for ($i = 1; $i < 10; $i++) {
			echo $i . "<br>";
		}

		/*Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

		$counter = 10;
		switch ($counter) {
			case 34:
				echo "This is number 34";
				break;
			case 10:
				echo "I met my case";
				break;
			case 19:
				echo "This number doesn't match";
				break;
			case 17:
				echo "This is number 17";
				break;
			case 20:
				echo "This is number 20";
				break;
			default:
				echo "couldn't find anything";
		}


		?>






	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>