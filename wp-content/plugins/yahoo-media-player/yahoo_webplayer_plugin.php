<?php
/*
Plugin Name: Yahoo! WebPlayer
Plugin URI: http://www.maxengel.com/pages/yahoo-webplayer-wordpress-plugin
Description: Embeds the Yahoo! WebPlayer plugin into your site to play back media links (audio and video). You can learn more about the player here: <a href="http://webplayer.yahoo.com/">Yahoo! WebPlayer project page</a>.
Author: Max Engel
Version: 2.0.6
Author URI: http://www.maxengel.com/
*/

//creates the option variables
function set_ywp_options () {
	add_option('location','2','location of code for player');
	add_option('version','2','choice of code');
	add_option("amazon_id","","Amazon Affiliate ID");
	if (get_option('auto_choice') == 1) {
		add_option('autoplay','1','choice for autoplay');
	}
	else {
		add_option('autoplay','2','choice for autoplay');
	}
	add_option('autoadvance','1','choice for autoadvance');
	add_option('playlink','2','choice for playlink');
	add_option('displaystate','2','choice for displaystate');
	add_option('volume','5','choice for volume');
	add_option("default_album_art","","Default Album Art");
	add_option('parse','1','whether or not to parse links');
	add_option('termdetection','2','automatic parsing of terms');
	add_option('youtube','1', 'whether or not YouTube links are parsed');
	add_option('skin','1', 'the skin for the player');
}

//resets the options
function unset_ywp_options () {
	delete_option('location');
	delete_option('version');
	delete_option('autoplay');
	delete_option("amazon_id");
	delete_option('autoadvance');
	delete_option('playlink');
	delete_option('displaystate');
	delete_option('volume');
	delete_option("default_album_art");
	delete_option('parse');
	delete_option('termdetection');
	delete_option('choice');
	delete_option('auto_choice');
	delete_option('youtube');
	delete_option('skin');
}

//builds the appropriate code for insertion for each plugin
function ywp_parameters() {
	$version = get_option('version');
	$autoplay = get_option('autoplay');
	$autoadvance = get_option('autoadvance');
	$playlink = get_option('playlink');
	$displaystate = get_option('displaystate');
	$volume = get_option('volume');
	$default_album_art = get_option('default_album_art');
	$parse = get_option('parse');
	$termdetection = get_option('termdetection');
	$youtube = get_option('youtube');
	$skin = get_option('skin');
	if (($autoplay == 1) || ($autoadvance == 2) || ($skin == 2) || ($playlink != 2) || ($displaystate == 1) || ($volume != 5) || ($youtube == 2) || ($termdetection == 1) || ($parse == 2) || (!empty($default_album_art)))
		{
		$comma_counter = 0;
		echo '<script type="text/javascript">';
		echo 'var YWPParams = {';
		if ($autoplay == 1)
			{
			echo 'autoplay:true';
			$comma_counter++;
			}
		if ($autoadvance == 2)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'autoadvance:false';
			$comma_counter++;
			}
		if ($playlink == 1)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'playlink:true';
			$comma_counter++;
			}
		if ($playlink == 3)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'playlink:false';
			$comma_counter++;
			}
		if ($displaystate == 1)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'displaystate:1';
			$comma_counter++;
			}
		if ($volume != 5)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'volume:';
			echo $volume/10;
			$comma_counter++;
			}
		if (!empty($default_album_art))
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'defaultalbumart:';
			echo '\'';
			echo $default_album_art;
			echo '\'';
			$comma_counter++;
			}
		if ($parse == 2)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'parse:false';
			$comma_counter++;
			}
		if ($youtube == 2)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'linkConfig:{youtube: \'ignore\'}';
			$comma_counter++;
			}
		if ($termdetection == 1)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'termDetection: "on"';
			$comma_counter++;
			}
		if ($skin == 2)
			{
			if ($comma_counter > 0)
				{
				echo ',';
				}
			echo 'theme: "silver"';
			$comma_counter++;
			}
		echo '}</script>';
		}
		
}

//main player function
function ywp() {
	$ywp_version = get_option("version");
	if ($ywp_version == 1)
		{
		echo '<script type="text/javascript" src="http://webplayer.yahooapis.com/player-beta.js"></script>';
		}
		else
		{
		echo '<script type="text/javascript" src="http://webplayer.yahooapis.com/player.js"></script>';
		}
}

function ywp_options () {
	$default_album_art = get_option('default_album_art');
	$amazon_id = get_option('amazon_id');
	echo '<div class="top"><h2>Yahoo! WebPlayer Options</h2></div>';
	if ($_REQUEST['submit']) {
		update_ywp_options();
	}
	if ($_REQUEST['clear']) {
		update_ywp_options();
		update_option('default_album_art', "");
	}
	if ($_REQUEST['clear_amazon_id']) {
		update_ywp_options();
		update_option('amazon_id', "");
	}
	if ($_REQUEST['restore_defaults']) {
		update_option('location','1');
		update_option('version','1');
		update_option("amazon_id","");
		update_option('autoplay','2');
		update_option('autoadvance','2');
		update_option('playlink','2');
		update_option('displaystate','2');
		update_option('volume','5');
		update_option("default_album_art","");
		update_option('parse','1');
		update_option('termdetection','2');
		update_option('youtube','1');
		update_option('skin','1');
		echo '<div id="message" class="updated fade">';
		echo '<p>Default Options Restored</p>';
		echo '</div>';
	}
	print_ywp_form();
}
function modify_menu_for_ywp () {
	add_options_page(
		'Yahoo! WebPlayer', //Title
		'Yahoo! WebPlayer', //Sub-menu title
		'manage_options', 	//Security
		__FILE__,			//File to open
		'ywp_options'  		//Function to call
                      );  
}

//controls updating the options
function update_ywp_options() {
	$updated = false;
	if ($_REQUEST['location']) {
		update_option('location', $_REQUEST['location']);
		$updated = true;
	}
	if ($_REQUEST['version']) {
		update_option('version', $_REQUEST['version']);
		$updated = true;
	}
	if ($_REQUEST['amazon_id']) {
		update_option('amazon_id', $_REQUEST['amazon_id']);
		$updated = true;
	}
	if ($_REQUEST['autoplay']) {
		update_option('autoplay', $_REQUEST['autoplay']);
		$updated = true;
	}
	if ($_REQUEST['autoadvance']) {
		update_option('autoadvance', $_REQUEST['autoadvance']);
		$updated = true;
	}
	if ($_REQUEST['playlink']) {
		update_option('playlink', $_REQUEST['playlink']);
		$updated = true;
	}
	if ($_REQUEST['displaystate']) {
		update_option('displaystate', $_REQUEST['displaystate']);
		$updated = true;
	}
	if ($_REQUEST['volume']) {
		update_option('volume', $_REQUEST['volume']);
		$updated = true;
	}
	if ($_REQUEST['default_album_art']) {
		update_option('default_album_art', $_REQUEST['default_album_art']);
		$updated = true;
	}
	if ($_REQUEST['parse']) {
		update_option('parse', $_REQUEST['parse']);
		$updated = true;
	}
	if ($_REQUEST['youtube']) {
		update_option('youtube', $_REQUEST['youtube']);
		$updated = true;
	}
	if ($_REQUEST['termdetection']) {
		update_option('termdetection', $_REQUEST['termdetection']);
		$updated = true;
	}
	if ($_REQUEST['skin']) {
		update_option('skin', $_REQUEST['skin']);
		$updated = true;
	}
    if ($updated) {
		echo '<div id="message" class="updated fade">';
		echo '<p>Options Updated</p>';
		echo '</div>';
	}
	else {
		echo '<div id="message" class="error fade">';
		echo '<p>Unable to update options</p>';
		echo '</div>';
	}
}

//plugin options panel
function print_ywp_form () {
	if (get_option('choice') == 1) {
	$menu_value_Version = 1;
	update_option('version', '1');
	delete_option('choice');
	}
	elseif (get_option('choice') == 2) {
	$menu_value_Version = 2;
	update_option('version', '2');
	delete_option('choice');
	}
	else {
	$menu_value_Version = get_option('version');
	}
	$menu_value_Autoplay = get_option('autoplay');
	$menu_value_Location = get_option('location');
	$menu_value_AmazonID = get_option('amazon_id');
	$menu_value_Autoadvance = get_option('autoadvance');
	$menu_value_Playlink = get_option('playlink');
	$menu_value_Displaystate = get_option('displaystate');
	$menu_value_Volume = get_option('volume');
	$menu_value_Default_album_art = get_option('default_album_art');
	$menu_value_Parse = get_option('parse');
	$menu_value_Termdetection = get_option('termdetection');
	$menu_value_Youtube = get_option('youtube');
	$menu_value_Skin = get_option('skin');
	if ($menu_value_Location == 1)
		{
		$location_var_1 = 'checked="checked"';
		}
	else
		{
		$location_var_2 = 'checked="checked"'; 
		}
	if ($menu_value_Version == 1)
		{
		$version_var_1 = 'checked="checked"';
		}
	else
		{
		$version_var_2 = 'checked="checked"'; 
		}
	if ($menu_value_Autoplay == 1)
		{
		$autoplay_var_1 = 'checked="checked"';
		}
	else
		{
		$autoplay_var_2 = 'checked="checked"'; 
		}
	if ($menu_value_Autoadvance == 1)
		{
		$autoadvance_var_1 = 'checked="checked"';
		}
	else
		{
		$autoadvance_var_2 = 'checked="checked"';
		}
	if ($menu_value_Playlink == 1)
		{
		$playlink_var_1 = 'checked="checked"';
		}
	elseif ($menu_value_Playlink == 2)
		{
		$playlink_var_2 = 'checked="checked"';
		}
	else
		{
		$playlink_var_3 = 'checked="checked"';
		}
	if ($menu_value_Displaystate == 1)
		{
		$displaystate_var_1 = 'checked="checked"';
		}
	else
		{
		$displaystate_var_2 = 'checked="checked"';
		}
	if ($menu_value_Volume == 1)
		{
		$volume_var_1 = "selected='selected'";
		}
	elseif ($menu_value_Volume == 2)
		{
		$volume_var_2 = "selected='selected'";
		}
	elseif ($menu_value_Volume == 3)
		{
		$volume_var_3 = "selected='selected'";
		}
	elseif ($menu_value_Volume == 4)
		{
		$volume_var_4 = "selected='selected'";
		}
	elseif ($menu_value_Volume == 5)
		{
		$volume_var_5 = "selected='selected'";
		}
	elseif ($menu_value_Volume == 6)
		{
		$volume_var_6 = "selected='selected'";
		}
	elseif ($menu_value_Volume == 7)
		{
		$volume_var_7 = "selected='selected'";
		}
	elseif ($menu_value_Volume == 8)
		{
		$volume_var_8 = "selected='selected'";
		}
	elseif ($menu_value_Volume == 9)
		{
		$volume_var_9 = "selected='selected'";
		}
	else
		{
		$volume_var_10 = "selected='selected'";
		}
	if ($menu_value_Parse == 1)
		{
		$parse_var_1 = 'checked="checked"';
		}
	else
		{
		$parse_var_2 = 'checked="checked"';
		}
	if ($menu_value_Termdetection == 1)
		{
		$termdetection_var_1 = 'checked="checked"';
		}
	else
		{
		$termdetection_var_2 = 'checked="checked"';
		}
	if ($menu_value_Youtube == 1)
		{
		$youtube_var_1 = 'checked="checked"';
		}
	else
		{
		$youtube_var_2 = 'checked="checked"';
		}
	if ($menu_value_Skin == 1)
		{
		$skin_var_1 = 'checked="checked"';
		}
	else
		{
		$skin_var_2 = 'checked="checked"';
		}

/*
	if ($menu_value_Version == 1)
	{
*/
	echo <<<EOF
<form method="post">
<div class=main>
<div class=left>
<div class=box>
	<h3 class=boxed>General Options</h3>
	<p><strong>Choose The Location of the Media Player Code</strong> (footer will allow your page to load more quickly, but may not be compatible with all themes)<br/>
		<label>Header: <input type="radio" value="1" $location_var_1 name="location"/></label> <br/>
		<label>Footer: <input type="radio" value ="2" $location_var_2 name="location"/></label></p>

	<p><strong>Choose Which Version of Yahoo! WebPlayer to Run</h4></strong><br/>
		<label>Beta Build: <input type="radio" value="1" $version_var_1 name="version"/></label><br/>
		<label>Stable Build: <input type="radio" value ="2" $version_var_2 name="version"/></label></p>
</div>
		
<div class=box>
<h3 class=boxed>Player Configuration</h3>
	<p><strong>Which Theme Color Would You Like the Player to Use?</strong><br/>
		<label class=item>Black: <input type="radio" value ="1" $skin_var_1 name="skin"/></label>
		<label class=item>Silver: <input type="radio" value="2" $skin_var_2 name="skin"/></label><br/></p>
	<p><strong>Should Media Play When the Page Loads?</strong><br/>
		<label class=item>Yes: <input type="radio" value ="1" $autoplay_var_1 name="autoplay"/></label>
		<label class=item>No: <input type="radio" value="2" $autoplay_var_2 name="autoplay"/></label><br/></p>
		
	<p><strong>Enable Automatic Advancing to the Next Item?</strong><br/>
		<label class=item>Yes: <input type="radio" value ="1" $autoadvance_var_1 name="autoadvance"/></label>
		<label class=item>No: <input type="radio" value="2" $autoadvance_var_2 name="autoadvance"/></label><br/></p>

	<p><strong>Clicking What Links Should Begin Playback?</strong><br/>
		<label class=item>All Links: <input type="radio" value ="1" $playlink_var_1 name="playlink"/></label>
		<label class=item>Media-Only: <input type="radio" value ="2" $playlink_var_2 name="playlink"/></label>
		<label class=item>None: <input type="radio" value="3" $playlink_var_3 name="playlink"/></label><br/></p>

	<p><strong>How Should the Drawer Load?</strong><br/>
		<label class=item>Open: <input type="radio" value ="1" $displaystate_var_1 name="displaystate"/></label>
		<label class=item>Closed: <input type="radio" value="2" $displaystate_var_2 name="displaystate"/></label><br/></p>

	<p><strong>Should Links Be Parsed Automatically?</strong><br/>
		<label class=item>Yes: <input type="radio" value ="1" $parse_var_1 name="parse"/></label>
		<label class=item>No: <input type="radio" value="2" $parse_var_2 name="parse"/></label><br/></p>
		
	<p><strong>Should YouTube Links Be Parsed?</strong><br/>
		<label class=item>Yes: <input type="radio" value ="1" $youtube_var_1 name="youtube"/></label>
		<label class=item>No: <input type="radio" value="2" $youtube_var_2 name="youtube"/></label><br/></p>
		
	<p><strong>Should Detected Terms Show?</strong><br/>
		<label class=item>Yes: <input type="radio" value ="1" $termdetection_var_1 name="termdetection"/></label>
		<label class=item>No: <input type="radio" value="2" $termdetection_var_2 name="termdetection"/></label><br/></p>
			
	<p><strong>Volume: </strong>
		<select name="volume">
			<option value="1" $volume_var_1 >one (quiestest)</option>
			<option value="2" $volume_var_2>two</option>
			<option value="3" $volume_var_3>three</option>
			<option value="4" $volume_var_4 >four</option>
			<option value="5" $volume_var_5>five</option>
			<option value="6" $volume_var_6>six</option>
			<option value="7" $volume_var_7>seven</option>
			<option value="8" $volume_var_8>eight</option>
			<option value="9" $volume_var_9>nine</option>
			<option value="10" $volume_var_10>ten (loudest)</option>
		</select>
	</p>
	
	<p><strong>Default Album Art URL</strong><br/>
		<label>Example: <i>http://somedomain.com/path/someimage.gif</i><br/>
		<input type="text" size="50" name="default_album_art" value="$menu_value_Default_album_art" />
		<input type="submit" name="clear" value="clear" /></br>
		</label></p>

	<p><strong>Amazon Affiliate ID Settings</strong><br/>
		<label>Enter your Amazon Affiliate ID:<br/>
		<input type="text" name="amazon_id" value="$menu_value_AmazonID" />
		<input type="submit" name="clear_amazon_id" value="clear" /></br>
		</label></p>

	</div>
	<p class="submit">
		<input type="submit" name="submit" value="Save Settings" /><input class="right-button" type="submit" name="restore_defaults" value="Restore Defaults"/>
	</p>
	</form>
	</div>
	
<style type="text/css">
div.top
{
}
div.main
{
width:100%;
margin-top:10px;
min-width:750px;
}
div.left
{
float:left;
width:70%;
}
div.box
{
margin-bottom:30px;
padding-left:20px;
padding-right:20px;
border:1px solid gray;
border-radius: 10px;
background-color: #f7f7f7;
}
h3.boxed
{
padding-bottom:10px;
border-bottom:1px solid gray;
}
div.right
{
float: left;
margin-left:10%;
width: 17%;
border:1px solid gray;
border-radius: 10px;
background-color: #f7f7f7;
padding:10px;
}
label.item
{
margin-right:15px;
padding-top:5px;
}
p.submit
{
margin-top:-20px;
}
input.right-button
{
float:right;
</style>

<div class="right">
<div style="padding:10px;" class="text">This plugin was independently created. If you're enjoying it, please consider buying me a cup of coffee to support its further development.</div>
<div style="text-align:center;" class="paypal_button">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VGJW3AU3KS3RQ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</div>
</div>

EOF;
/*
	}
	elseif ($menu_value_Version == 2)
	{
	echo <<<EOF
<form method="post">
	<div class=main>
	<div class=left>
	<div class=box>
	<h3 class=boxed>General Options</h3>
	<p><strong>Choose The Location of the Media Player Code</strong> (footer will allow your page to load more quickly, but may not be compatible with all themes)<br/>
		<label>Header: <input type="radio" value="1" $location_var_1 name="location"/></label> <br/>
		<label>Footer: <input type="radio" value ="2" $location_var_2 name="location"/></label></p>

	<p><strong>Choose Which Version of Yahoo! WebPlayer to Run</h4></strong> (click "Save Settings" to see the correct settings when you switch the player type)<br/>
		<label>Beta Build: <input type="radio" value="1" $version_var_1 name="version"/></label><br/>
		<label>Stable Build: <input type="radio" value ="2" $version_var_2 name="version"/></label></p>
</div>
		
<div class=box>
<h3 class=boxed>Legacy Player Configuration</h3>
	<p><strong>Choose if Media Should Play When the Page Loads</strong><br/>
		<label>Enable Autoplay: <input type="radio" value ="1" $autoplay_var_1 name="autoplay"/></label><br/>
		<label>Disable Autoplay: <input type="radio" value="2" $autoplay_var_2 name="autoplay"/></label><br/></p>
				
	<p><strong>Amazon Affiliate ID Settings</strong><br/>
		<label>Enter your Amazon Affiliate ID:<br/>
		<input type="text" name="amazon_id" value="$menu_value_AmazonID" />
		<input type="submit" name="clear_amazon_id" value="clear" /></br>
		</label></p>
		</div>
	<p class="submit">
		<input type="submit" name="submit" value="Save Settings" /><input class="right-button" type="submit" name="restore_defaults" value="Restore Defaults"/>
	</p>
	</form>
	</div>
	
<style type="text/css">
div.top
{
}
div.main
{
width:100%;
margin-top:10px;
min-width:750px;
}
div.left
{
float:left;
width:70%;
}
div.box
{
margin-bottom:30px;
padding-left:20px;
padding-right:20px;
border:1px solid gray;
border-radius: 10px;
background-color: #f7f7f7;
}
h3.boxed
{
padding-bottom:10px;
border-bottom:1px solid gray;
}
div.right
{
float: left;
margin-left:10%;
width: 17%;
border:1px solid gray;
border-radius: 10px;
background-color: #f7f7f7;
padding:10px;
}
label.item
{
margin-right:15px;
padding-top:5px;
}
p.submit
{
margin-top:-20px;
}
input.right-button
{
float:right;
</style>

<div class="right">
<div style="padding:10px;" class="text">This plugin was independently created. If you're enjoying it, please consider buying me a cup of coffee to support its further development.</div>
<div style="text-align:center;" class="paypal_button">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="VGJW3AU3KS3RQ">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</div>
</div>

EOF;
	}
*/
}

function amazon() {
	$amazon_id_choice = get_option("amazon_id");
	$meta_tag = "<meta name='amazonid' content='$amazon_id_choice' />";
	print "$meta_tag\n";
}

//Add and Remove variables when creating/removing plugin
register_activation_hook(__FILE__,'set_ywp_options');
register_deactivation_hook(__FILE__,'unset_ywp_options');

//Adds the admin menu
add_action('admin_menu','modify_menu_for_ywp');

//Adds custom parameters
if ($ywp_location == 1)
	{
	add_action('wp_head', 'ywp_parameters');
	}
else
	{
	add_action('wp_footer', 'ywp_parameters'); 
	}

//Adds the YWP to the right location
$ywp_location = get_option("location");
if ($ywp_location == 1)
	{
	add_action('wp_head', 'ywp');
	}
else
	{
	add_action('wp_footer', 'ywp'); 
	}

//Adds the amazon affiliate id to the header
$amazon_id = get_option("amazon_id");
if (!empty($amazon_id))
	{
	add_action('wp_head', 'amazon');
	}
?>