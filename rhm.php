<?php

	$dbfile = "/home/jonas/.local/share/rhythmbox/rhythmdb.xml";


	$stations = '';
	for($i=0; $i<2; $i++) {
		$stations .= createStation('title'.$i, 'location-'.$i);
	}

	// Bygg upp det som skall in i xml-filen..
	$result = "<!-- START: Radiotuner -->\n";
	$result .= $stations;
	$result .= "<!-- END: Radiotuner -->\n";

	echo $result;







/**
	function to create a station entry in database
*/
function createStation($title = '', $location = '', $genre = 'unknown') {

	$return = '';
	$return .= "<entry type=\"iradio\">\n";
	$return .= "\t<title>$title</title>\n";
	$return .= "\t<genre>$genre</genre>\n";
	$return .= "\t<artist></artist>\n";
	$return .= "\t<album></album>\n";
	$return .= "\t<location>$location</location>\n";
	$return .= "\t<date>0</date>\n";
	$return .= "\t<mimetype>application/octet-stream</mimetype>\n";
	$return .= "\t<mb-trackid></mb-trackid>\n";
	$return .= "\t<mb-artistid></mb-artistid>\n";
	$return .= "\t<mb-albumid></mb-albumid>\n";
	$return .= "\t<mb-albumartistid></mb-albumartistid>\n";
	$return .= "\t<mb-artistsortname></mb-artistsortname>\n";
	$return .= "</entry>\n";

	return $return;

}


