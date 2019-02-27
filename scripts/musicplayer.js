/* establish global variables */
/*global window, document, $, jQuery, console*/

var allTracks = ["Absence", "Arms of Another", "Swimming",
		"Far Away (Saudade)", "Gone in A Second", "Something English",
		"Chivalry", "Terrapin", "Eight Forty"],
	trackIDs = ["KFgky9YfVaQ", "iDOoTQ70buo", "5T2G1thD80Q",
		"yaCkryArfag", "-ZcOJmqEhJ4", "MycdTOFM6F0", "PtSwH0J3fHY",
		"l65GF1fD0Xk", "6hVbSWpheVM"]

function trackChange(trackTitle) {
	//pragma
	"use strict";

	var parentDoc = (window.parent).document,
		player = parentDoc.getElementById("music_player"),
		song = parentDoc.getElementById("current_song"),
		trackIndex = allTracks.indexOf(trackTitle);

	$(player).attr("src", "//www.youtube.com/embed/"
		+ trackIDs[trackIndex]
		+ "?autoplay=1&color=white&controls=0&loop=1&playlist="
		+ trackIDs[trackIndex]
		+ "&modestbranding=1&rel=0&showinfo=0");
	$(song).html(trackTitle);
}