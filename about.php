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

			<h1>the hell's a marsican?</h1>
			<!-- copy taken from https://www.leedsmusicscene.net/article/11629/ -->
			<p>Marsicans are an emerging indie-pop band of 21 year-olds from Leeds, England. Their infectious pop hooks, strong harmonies, quirky lyrics, Yorkshire accents, offbeat northern humour and energetic performances have earned them glowing reviews and a growing fanbase since they first formed at high school in 2011.</p>
			<p>Marsicans regularly sell out gigs at home, tour up and down the UK and have graced bigger stages at festivals like Reading & Leeds and Live At Leeds. Along the way they've supported the likes of Catfish & the Bottlemen, The Pigeon Detectives and Embrace.</p>
		
			<!-- images cropped from http://tinyurl.com/hhhv9sw -->
			<!-- generate table of members -->
			<div id="members">
				<?php
					$members = array(
						"James" => "Lead Vocals/Guitar",
						"Rob" => "Bass/Vocals",
						"Oli" => "Guitar/Vocals",
						"Cale" => "Drums");
					foreach ($members as $dude => $instrument) {
						echo "<div class='member'><img src='img/portraits/$dude.jpg' alt='$dude'><p class='name'>$dude</p><p class='position'>$instrument</p></div>";
					}
				?>
			</div>
			
		</div>
	</body>
</html>