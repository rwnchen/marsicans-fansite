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
			<h1>upcoming shows. <span class="disclaimer">note how they're all in the UK.</span></h1>
			<!-- generates table of tour dates from csv -->
			<table id="tour">
			<?php
				$tourdates = fopen("tourdates.csv", "r");
				if ($tourdates !== FALSE){
					while (($data = fgetcsv($tourdates)) !== FALSE) {
						echo "<tr><td class='date' rowspan='2'>$data[0]</td><td class='location'>$data[2]</td></tr><tr><td class='venue'>$data[1]</td></tr>";
					}
				}
				fclose($tourdates);
			?>
			</table>
		</div>
	</body>
</html>