<?php
/*

Plugin Name: Norse Runes Oracle

Plugin URI: http://www.gregwhitehead.com/

Description: This plugin allows you to create a page that draws from a bag of Norse Runes.  Odin's Rune is drawing one rune out of the bag for guidance on a question or topic.  Also has the three rune Past, Present, Future Spread and the Expanded Celtic Cross Spread.  Other layouts are being planned for future releases.

Author: Greg Whitehead
Version: 1.4.1
Author URI: http://www.gregwhitehead.com/

*/



/*

Admin Panel Functions & Declaration

*/

include("classes/class.runes.php");

/* Runs when plugin is activated */

register_activation_hook(__FILE__,'norserune_install'); 



/* Runs on plugin deactivation*/

register_deactivation_hook( __FILE__, 'norserune_remove' );



function norserune_install() {

	global $wp_rewrite;
	$wp_rewrite->flush_rules();

		add_option('norserune_definitionpage', '');
		for ($x = 1; $x <= 25; $x++ ) {
			if (!get_option( 'norserune_runecount_' . $x ) )
				add_option('norserune_runecount_' . $x , '0');
		}
}



function norserune_remove() {

	if( !get_option( 'norserune_definitionpage' ) ) {
		// no nothing here
	} else {
		delete_option('norserune_definitionpage');	
	}

}
add_action('admin_menu', 'register_runes_submenu_page');



function register_runes_submenu_page() {

	add_submenu_page( 'tools.php', "Norse Runes Oracle Instructions/Setup", "Norse Runes Oracle Instructions/Setup", 'manage_options', 'runes-submenu-page', 'runes_submenu_page_callback' ); 

}

function runes_submenu_page_callback() {
	include('NorseRunesAdmin.php');
}

function displayRune( $runeNumber ) {

	$tmpRunes = new runes();
	
	$tmpDisplay = $tmpRunes->displayRune($runeNumber);

	return $tmpDisplay;

}


function showRune($atts) {

	extract(shortcode_atts(array(

		'runeid' => '1'

	), $atts));

	return displayRune( $runeid );

}

add_shortcode('showrune','showRune');



function defineRune() {
	
	$tmpRune = new runes;
	$runeid = strip_tags(get_query_var('runeid'));

	$tmpInfo = '';

	if ($runeid != '' && $runeid > 0 && $runeid < 26	) {

		$tmpInfo .= $tmpRune->displayRuneId($runeid);	

	}

	return $tmpInfo;

}

add_shortcode('definerune','defineRune');



function showAllRunes($echoReturn = false, $admin_page = false) {
	$tmpRunes = new runes();

	$definitions_page = rtrim( get_option( 'norserune_definitionpage' ) , "/");

	$tmpDisplay = '<div style="clear:both;">&nbsp;</div>' . "\n";
	$originalRunes = $tmpRunes->returnOriginalArray();
	foreach ($originalRunes as $rune) {
		$tmpCount = get_option('norserune_runecount_' . $rune[0] );
		$tmpDisplay .= '<a '. ($definitions_page == '' ? 'href="#" onclick="return false;"' : 'href="'.get_bloginfo('wpurl') . '/' .$definitions_page.'/'.$rune[0].'/" '). ' title="Germanic: '.$rune[2] . "\nEnglish: ".$rune[1] . "\n\nDefinition:\n".$rune[3] .( $admin_page ? "\n\nShown: " . $tmpCount : '').'" '.( $admin_page ? 'target="_blank"' : '').' ><div class="rune" id="rune_'.$rune[0].'" style="float:left; margin-right:10px; margin-bottom:10px;">'.$rune[0].'</div></a>'."\n";
	}

	$tmpDisplay .= '<div style="clear:both;">&nbsp;</div>'."\n";

	if ($echoReturn) echo $tmpDisplay;

	else return $tmpDisplay;

}

add_shortcode('showallrunes','showAllRunes');

function showSingleRune ($atts) {
	extract(shortcode_atts(array(

		'runeid' => '1'

	), $atts));

	return displayGraphicRune( $runeid );
}

add_shortcode('showsinglerune','showSingleRune');

function displayGraphicRune( $runeNumber ) {
	include("runes.php");
	$definitions_page = rtrim( get_option( 'norserune_definitionpage' ) , "/");

	$tmpDisplay = '<a '. ($definitions_page == '' ? 'href="#" onclick="return false;"' : 'href="'.get_bloginfo('wpurl') . '/' .$definitions_page.'/'.$runeNumber.'/" '). ' title="Germanic: '.$norserunes[$runeNumber][1] . "\nEnglish: ".$norserunes[$runeNumber][0] . "\n\nDefinition:\n".$norserunes[$runeNumber][2] .( $admin_page ? "\n\nShown: " . $tmpCount : '').'" '.( $admin_page ? 'target="_blank"' : '').' ><div class="rune" id="rune_'.$runeNumber.'">'.$runeNumber.'</div></a>'."\n";
	
	$tmpDisplay .= '<div style="clear:both;">&nbsp;</div>';

	return $tmpDisplay;

}

function drawCustomSpread () {
	$tmpRuneClass = new runes();

	$tmpDisplay = $tmpRuneClass->drawCustomSpread();
    return $tmpDisplay;

}

add_shortcode( 'norsecustom' , 'drawCustomSpread' );

function drawOdinsRune () {
	$tmpRuneClass = new runes();

		$tmpDisplay = $tmpRuneClass->drawOdinsRune();
    return $tmpDisplay;

}

add_shortcode( 'odinsrune' , 'drawOdinsRune' );


function draw3RuneSpread () {
	$tmpRuneClass = new runes();

		$tmpDisplay = $tmpRuneClass->draw3Rune();
    return $tmpDisplay;

}

add_shortcode( 'threerune' , 'draw3RuneSpread' );

function drawCelticCross () {
	$tmpRuneClass = new runes();

		$tmpDisplay = $tmpRuneClass->drawCelticCross();
    return $tmpDisplay;

}

add_shortcode( 'celticcross' , 'drawCelticCross' );


function showRuneStatistics() {
	include("runes.php");
	echo "<table border='1'><tr><th>Rune ID</th><th>Rune Picture</th><th>Times Shown</th><th>Germanic Name</th><th>English Name</th><th>Description Name</th></tr>";
	for ($x = 1; $x <= 25; $x++ ) {
		$tmpCount = get_option('norserune_runecount_'.$x);
		echo "<tr><td align='center'>".$x . "</td><td valign='top' align='center'>".'<div class="rune" id="rune_'.$x.'" style=" margin:10px 10px 10px 10px;">'.$x.'</div>'."</td><td align='center'>".$tmpCount."</td><td>".$norserunes[$x][1]."</td><td>".$norserunes[$x][0]."</td><td>".$norserunes[$x][2]."</td></tr>";
	}
	echo "</table>";
}


function runes_header() {

	$plugindir = $file = dirname(__FILE__) . "/NorseRunes.php";
	 echo '<link type="text/css" rel="stylesheet" href="' . plugin_dir_url($plugindir) .'css/style.css" />' . "\n";          
	 
   // echo '<link type="text/css" rel="stylesheet" href="' . get_bloginfo('wpurl') . '/wp-content/plugins/NorseRuneOracle/css/style.css" />' . "\n";          

}    

  

add_filter('wp_head', 'runes_header'); // For use on the Front end (ie. Theme)





function runes_var($public_query_vars) {

   $public_query_vars[] = 'runeid';

   return $public_query_vars;

}

add_filter('query_vars', 'runes_var');



function runes_do_rewrite() {
	$definitions_page =  rtrim( get_option( 'norserune_definitionpage' ) , "/");
	if ($definitions_page != '') {
	   add_rewrite_rule($definitions_page . '/([^/]+)/?$', 'index.php?pagename=' . $definitions_page . '&runeid=$matches[1]','top');
	}
	flush_rewrite_rules(false);
}



 function runes_get_rewrite_urls(){  

     global $wp_rewrite;  

     return $wp_rewrite->wp_rewrite_rules(); /* Returns an array */  

 }

add_action('init', 'runes_do_rewrite');

