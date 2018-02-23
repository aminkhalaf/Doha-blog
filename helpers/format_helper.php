<?php 
/*
* Format the date
*/
function formatDate($date) {
	return date('h F Y , h:i A', strtotime($date));
}

/*
* Format the text of posts and make #of characters = 450
*/
function shortentext($text , $chars = 450) {
		$text = $text . " ";
		// substr( acutal string, begining, length of chars i need);
		$text = substr($text, 0, $chars);
		$text = substr($text, 0, strrpos($text ,' '));
		$text = $text . "...";
		return $text;
	}
?>