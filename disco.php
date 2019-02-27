<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Marsicans: Discography</title>
		<link rel="stylesheet" href="styles/styles.css">
		<!-- import Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	</head>

	<body>
		<div id="content">
			<h1>releases.</h1>
			
			<!-- generate discography table -->
			<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	        <script type="text/javascript" src="scripts/musicplayer.js"></script>
			<?php
				$albums = array(
					"THE ABSENCE EP" => "Absence,Arms of Another,Swimming,Far Away (Saudade)",
					"GONE IN A SECOND" => "Gone in A Second,Something English",
					"THE CHIVALRY EP" => "Chivalry,Terrapin,MJ,Scuba,Eight Forty"
					);

				foreach($albums as $album => $tracklist) {
					/* generate array from tracklist */
					$tracks = explode(",", $tracklist);

					/* write html */
					echo "<div class='album'>";
					echo "<h2>$album</h2>";
					$imgname = str_replace(" ", "", $album);
					echo "<img src='img/albums/$imgname.jpg' alt='$album'>";
					echo "<div class='tracklist'><ol>";

					/* handle edge cases where I couldn't find the videos */
					foreach($tracks as $track) {
						if($track=="MJ" || $track=="Scuba"){
							echo "<li>$track<span class='disclaimer'>*</span></li>";
						}
						else {
							echo "<li><a href='#' class='track' onclick='trackChange(\"$track\")'>$track</a></li>";	
						}
					}

					echo "</ol></div></div>";
				}
			?>
			<p><span class="disclaimer">*Couldn't find videos for these! Sorry!</span></p>
		</div>
	</body>
</html>