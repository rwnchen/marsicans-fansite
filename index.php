<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Marsicans</title>
		<link rel="icon" href="img/logo-ico.png">
		<link rel="stylesheet" href="styles/styles.css">
        
        <!-- import Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	</head>

	<body id="main_body">
		<div id="main">
            <div id="sidebar">    
            	<div id="logo">
            		<!-- image taken from the official bandcamp at https://marsicans.bandcamp.com/ -->
					<img src="img/logo_s.png" alt="Marsicans Logo">
				</div>          
                
                <div id="nav_links">
                    <ul>
                        <!-- generate navigation links as a list -->
			            <?php
							$urls = array(
								"HOME" => "home.php",
								"DISCOGRAPHY" => "disco.php",
								"TOUR" => "tour.php",
								"ABOUT" => "about.php",
                                "SUBSCRIBE" => "subscribe.php",
							);

							foreach($urls as $title => $link) {
								echo "<li><a href='$link' target='content'>$title</a></li>";
							}
						?>
                    </ul>
                </div>

                <!-- youtube/music player -->
                <div id="now_playing">
        			<table>
            			<tr><td>now playing</td></tr>
            			<tr><td id="current_song">Gone in A Second</td></tr>
        			</table>
        		</div>
                <iframe id="music_player" src="//www.youtube.com/embed/-ZcOJmqEhJ4?autoplay=0&color=white&controls=0&loop=1&playlist=-ZcOJmqEhJ4&modestbranding=1&rel=0&showinfo=0"></iframe>
            </div>

            <!-- iframe to display site content -->
            <iframe src="home.php" id="frame" name="content">
            </iframe>       
		</div>

		<div id="footer">
        	<div id="soc_media">
        		<!-- icons shamelessly ripped from the official Marsican site at marsicans.co.uk -->
        		<?php
        			$socMedia = array("Facebook","Twitter","YouTube","SoundCloud","Instagram");
        			foreach ($socMedia as $site) {
        				echo "<a href='http://$site.com/marsicans'><img src='img/socmediaicons/$site.png' alt='$site' target='_blank'></a>";
        			}
        		?>
        	</div>
        </div>
	</body>

</html>