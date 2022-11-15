<!DOCTYPE HTML>
<html>
	<head>
		<title>dumb quiz that's dumb</title>
		<style>
			html
			{
				font-family: -apple-system, BlinkMacSystemFont, Helvetica, Arial, sans-serif;
				margin: 0;
				height: 100%;
				justify-content: center;
			    align-items: center;
				display: flex;
				color: black;
			    background-color: black;
			    background-image: url("background-image.png");
			    background-size: cover;
    			background-repeat: no-repeat;
    			background-attachment: fixed;
			}

			body
			{
				display: flex;
		    	background-color: rgba(255, 255, 255, 0.8);
		    	justify-content: center;
		    	max-width: 500px;
		    	align-items: center ;
		    	padding: 50px;
		    	border-radius: 10px;

		    	-webkit-backdrop-filter: saturate(200%) brightness(2) blur(1.5rem);
     			 -khtml-backdrop-filter: saturate(200%) brightness(2) blur(1.5rem);
      			   -moz-backdrop-filter: saturate(200%) brightness(2) blur(1.5rem);
       			    -ms-backdrop-filter: saturate(200%) brightness(2) blur(1.5rem);
         			 -o-backdrop-filter: saturate(200%) brightness(2) blur(1.5rem);
            		    backdrop-filter: saturate(200%) brightness(2) blur(1.5rem);

		    	box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.4);
			}

			input
			{
				vertical-align: top;
				margin-top: 4px;
				margin-left: 0px;
			}

			li
			{
				list-style:  none;
			}

			h1
			{
				margin-top: 0;
			}

			#submit
			{
				padding: 10px;
				width: 100%;
				border: none;
				border-radius: 5px;
				font-size: 16px;
				background-color: rgb(50, 150, 250);
				color: white;
				font-family: -apple-system, BlinkMacSystemFont, Helvetica, Arial, sans-serif; 
				font-weight: normal;
			}

			#smart
			{
				padding: 10px;
				width: 100%;
				border: none;
				border-radius: 5px;
				font-size: 16px;
				color: white;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<form action="quiz.php" method="post">
				<h1>A quiz about everything and nothing.</h1>
				<h3>Question 1: How many corners do squares have?</h3>
				<div class="form-group"> 
					<?php
						echo("<p>Correct Answer: gotta be 4");
						if($_POST['q1'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer: potentially 7");
						}
						if($_POST['q1'] == 2) 
						{ 
							echo("<p style=\"color: green\">Your Answer: gotta be 4");
						}
						if($_POST['q1'] == 3) 
						{ 
							echo("<p style=\"color: red\">Your Answer: definitely 3");
						}
						if($_POST['q1'] == 4) 
						{ 
							echo("<p style=\"color: red\">Your Answer: solid chance it's 9");
						}
					?>
				</div>

				<br/>

				<div class="form-group"> 
					<h3>Question 2: Rick Astley will never do which of the following:</h3>
					<?php
						echo("<p>Correct Answer: all of the above");
						if($_POST['q2'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer: give you up");
						}
						if($_POST['q2'] == 2) 
						{ 
							echo("<p style=\"color: red\">Your Answer: let you down");
						}
						if($_POST['q2'] == 3) 
						{ 
							echo("<p style=\"color: red\">Your Answer: run around and desert you");
						}
						if($_POST['q2'] == 4) 
						{ 
							echo("<p style=\"color: green\">Your Answer: all of the above");
						}
					?>
				</div>

				<br/>

				<div class="form-group"> 
					<h3>Question 3: How many licks does it take to get to the center of a Tootsie Pop?</h3>
					<?php
						echo("<p>Correct Answer: a kabillion");
						if($_POST['q3'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer: bite it");
						}
						if($_POST['q3'] == 2) 
						{ 
							echo("<p style=\"color: green\">Your Answer: a kabillion");
						}
						if($_POST['q3'] == 3) 
						{ 
							echo("<p style=\"color: red\">Your Answer: 8");
						}
						if($_POST['q3'] == 4) 
						{ 
							echo("<p style=\"color: red\">Your Answer: derf");
						}
					?>
				</div>

				<br/>

				<div class="form-group"> 
					<h3>Question 4: What color is a firetruck?</h3>
					<?php
						echo("<p>Correct Answer: aghhhhh i'm on fire (red)");
						if($_POST['q4'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer: clementine");
						}
						if($_POST['q4'] == 2) 
						{ 
							echo("<p style=\"color: red\">Your Answer: weewooweewoo (blue)");
						}
						if($_POST['q4'] == 3) 
						{ 
							echo("<p style=\"color: green\">Your Answer: aghhhhh i'm on fire (red)");
						}
						if($_POST['q4'] == 4) 
						{ 
							echo("<p style=\"color: red\">Your Answer: probably orange");
						}
					?>
				</div>

				<br/>

				<div class="form-group"> 
					<h3>Question 5: Always let your __ win</h3>
					<?php
						echo("<p>Correct Answer: NyQuil Extra Strength cravings");
						if($_POST['q5'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer: tinder match");
						}
						if($_POST['q5'] == 2) 
						{ 
							echo("<p style=\"color: red\">Your Answer: instrusive thoughts");
						}
						if($_POST['q5'] == 3) 
						{ 
							echo("<p style=\"color: green\">Your Answer: NyQuil Extra Strength cravings");
						}
						if($_POST['q5'] == 4) 
						{ 
							echo("<p style=\"color: red\">Your Answer: ugly siblings");
						}
					?>
				</div>


				<br/>

				<?php 
					if($_POST['submit'])
					{

						if( $_POST['q1'] == '' || $_POST['q2'] == '' || $_POST['q3'] ==' ' || $_POST['q4'] == '' || $_POST['q5'] == '' )
						{
							echo("<input id=\"submit\" type=\"submit\" value=\"Try Again. You left a few things blank.\" name=\"submit\"/>");
						}

						else 
						{
							$score = 0;
							$amt = 0;

							if($_POST['q1'] == 2) 
							{ // option 2 is correct
								$score += 20;
								$amt++;
							}

							if($_POST['q2'] == 4) 
							{ // option 4 is correct
								$score += 20;
								$amt++;
							}

							if($_POST['q3'] == 2) 
							{ // option 2 is correct
								$score += 20;
								$amt++;
							}

							if($_POST['q4'] == 3) 
							{ // option 3 is correct
								$score += 20;
								$amt++;
							}

							if($_POST['q5'] == 3) 
							{ // option 3 is correct
								$score += 20;
								$amt++;
							}
							
							if( $score > 60 ) // green box with "XX% X/5 Nice!"
							{
								echo("<input id=\"submit\" type=\"button\" value=\"".$score."% for ".$amt."/5 Nice!\" style=\"background-color: rgb(0, 230, 50);\" name=\"notSubmit\"/>");
							}

							else // red box with "XX% X/5 Expected More"
							{
								echo("<input id=\"submit\" type=\"button\" value=\"".$score."% for ".$amt."/5 Expected More\" style=\"background-color: rgb(245, 50, 50);\" name=\"notSubmit\"/>");
							}
						}
					}
				?>
			</form>
		</div>
	</body>
</html>