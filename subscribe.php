<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Why promote Marsicans?</title>

		<link rel="stylesheet" href="styles/styles.css">

		<!-- import Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	</head>

	<body>
		<div id="content">
			<h1>stay updated.</h1>
			<p>Leave your e-mail and be notified about new releases and upcoming shows.</p>

			<form method="post">
				<table id="form">
					<tr>
						<td>First Name:</td>
						<td><input type="text" name="firstname"></td>
			    	</tr>
			    	<tr>
					    <td>E-mail:</td>
						<td><input type="text" name="email" id="email"></td>
					</tr>
					<tr>
						<td>How did you discover Marsicans?</td>
						<td class="checkbox">
							<input type="checkbox" name="discover[]" value="social">Social Media<br>
							<input type="checkbox" name="discover[]" value="people">Friends/Family<br>
							<input type="checkbox" name="discover[]" value="live">Live Event<br>
							<input type="checkbox" name="discover[]" value="site">Music Website
						</td>
					</tr>
					<tr><td id="submit" colspan="2"><input type="submit" name="submit"></td></tr>
				</table>
			</form>

			<?php
				if(isset($_POST['submit'])) {
					/* import the inputs into variables */
					$error = FALSE;
					$name = htmlentities($_POST['firstname']);
					$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
					if (isset($_POST['discover'])) {$discover = $_POST['discover'];}

					/* check validity of inputs. if not valid, generate error */
					if (!preg_match('/^[a-zA-z]+$/', $name)) {
						$error = "Oops! Please enter a valid name.";
					}
					else if (!$email) {
						$error = "Oops! Please enter a valid email.";
					}

					/* write submission to csv. if there is an error, print error */
					if ($error == FALSE) {
						echo "<div id='confirm'>Thanks for subscribing!</div>";
						$subscribers = fopen('subscribers.csv', 'a');
						
						$newline = "$name,$email,'";
						if (!empty($discover)) {
							foreach ($discover as $item) {
								$newline .= "$item,";
							}
						}	
						$newline .= "'\n";
						fwrite($subscribers, $newline);
						fclose($subscribers);
					}
					else{
						echo "<div id='confirm'>$error</div>";
					}
				}
			?>
		</div>	
	</body>
</html>