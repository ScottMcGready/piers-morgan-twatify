<?php
 /*
 Plugin Name: Piers Morgan Twatify
 Description: Changes every occurance of "prick", "wanker", "twat", or similar into a link to Piers Morgan's twitter page. 
 			  Because he is a massive twat.
 Version: 1.0
 Author: Scott McGready
 Author URI: http://scottmcgready.co.uk/piersmorgan
 */
add_filter('the_content','replace_content');

function replace_content($content){
	$target_url = 'https://twitter.com/piersmorgan';
	$word_list = array(
		'arse',
		'arse hole',
		'arsehole',
		'ass',
		'ass hole',
		'asshole',
		'dick',
		'dick head',
		'dickhead',
		'fanny',
		'knob',
		'muppet',
		'prick',
		'twat',
		'wanker'
	);

	foreach($word_list as $current_word){
		$content = str_replace($current_word, "<a href='{$target_url}'>" . $current_word . "</a>", $content);
	}
	return $content;
}
?>