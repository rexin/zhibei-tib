=== Yahoo! WebPlayer ===
Contributors: Max Engel
Homepage: http://www.maxengel.com/
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VGJW3AU3KS3RQ
Tags: ymp, yahoomediaplayer, yahoowebplayer, webplayer, yahoo, mp3, media, youtube, amazon, 8bitkid
Requires at least: 2.0.2
Tested up to: 3.3.2
Stable tag: 2.0.6

Embeds the Yahoo! WebPlayer plugin into your site to play back media links (music and video) and monetize purchases via Amazon.

== Description ==
The Yahoo! WebPlayer plugin embeds a media player on your page in a collapsible drawer.  This player allows your users to play embedded links on your page to music files, YouTube videos, and Yahoo! movie pages.

You can customize many options to uniquely tailor how the player behaves and deals with content.

Also, you can provide an Amazon Affiliate Code to monetize purchases made via the plugin.

You can find more information on the player at: http://webplayer.yahoo.com/

== Installation ==
1. unzip the file
2. drag the created folder it into: wp-content/plugins
3. activate the plugin from the 'Plugins' tab by selecting the 'Yahoo! WebPlayer'
4. choose where the code should be placed (header or footer). placement in the footer may improve page load times, but may not work with certain themes.
5. change the version of the player through the 'Yahoo! WebPlayer' section under 'Options' (optional)
5. configure the settings for how you want the player to behave
6. enter in your Amazon affiliate ID
7. add audio links to your page. for example, something like:
	* <code><a href="http://mediaplayer.yahoo.com/example3.mp3">Yodel (mp3 link)</a></code>
	* <code><a href="http://movies.yahoo.com/movie/1810096458/info">Tron (Yahoo! Movie link)</a></code>
	* <code><a href="http://www.youtube.com/watch?v=i56XeM0-b8Y">Zoetrope (YouTube link)</a></code>
8. the player will detect these links, render a play button next to the media, and include the media in the playlist
9. enjoy :-)


== Changelog ==
= v2.0.6 =
* enabled the ability to change the theme color between silver and black

= v2.0.5 =
* allows monetization via Amazon affiliate codes

= v2.0.4 =
* this enables a new option to control whether or not YouTube videos are played

= v2.0.3 =
* this is a critical update to be compatible with the latest version of the Yahoo! WebPlayer and take advantage of the new features. It also contains bugfixes.

= v2.0.2 =
* additional bugfixes

= v2.0.1 =
* bugfixes to help upgrading

= v2.0 =
* massive rewrite of the plugin to integrate the new Yahoo! WebPlayer
* support for all custom settings. the list can be found at: http://webplayer.yahoo.com/docs/how-to-set-up/#customize

= v1.3 =
* added option to enable autoplay (off by default)
* upgraded to the latest beta version of the Yahoo! Media Player (on by default) which allows video links

= v1.2 =
* created the option to choose the destination for the javascript insertion (header or footer) to fix some compatibility issues with certain themes

= v1.1 =
* changed the header insertion method for the Amazon meta tag info to get of rid a bug with certain themes

= v1.0 =
* created field in "options" page to allow for the input of an Amazon Affiliate ID
* Amazon affiliate ID will be inserted as meta-data into the header to allow "buy" links from the player to be monetized

= v0.4 =
* fixed a bug that caused an error when trying to clear the variables when the plugin is deactivated

= v0.3 =
* rewrote the entire plugin!
* now the plugin has an options page to allow you to switch to the latest (and possibly buggy) build of the player
* now you only need to install a single file

= v0.2 =
* changed names of calls/files to be consistent with Yahoo! (no longer references "Goose")
* minor bugfixes
* created instructions
* added GPL

== Upgrade Notice ==
= v2.0.3 =
This is a critical update to offer compatibility with the latest Yahoo! WebPlayer which features major enhancements, and fixes many bugs. It is recommended to upgrade immediately, and please verify your settings afterwards.

= v2.0.2 =
Integrates the latest Yahoo! WebPlayer which features major enhancements, and fixes many bugs. Please check your settings to enable the latest version after upgrading.

== Frequently Asked Questions ==

= Who made this plugin? =
This plugin helps integrate code Yahoo! developed, but was independently developed by me <a href="http://www.maxengel.com">(Max Engel)</a> in my free time.

= How can I get support? =
If it is a player functionality question, please check the official Yahoo! WebPlayer forum here: http://tech.groups.yahoo.com/group/yhoomediaplayer/
For help with the plugin itself, please post in the <a href="http://wordpress.org/tags/yahoo-media-player?forum_id=10">forum</a> or <a href="http://www.maxengel.com/contact">contact me</a>.

= How can I help? =
If you'd like to <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VGJW3AU3KS3RQ">make a donation</a>, it is the best way to help support the continued development of the plugin.

== Screenshots ==
1. The player lives in a collapsible drawer at the bottom of the screen.
2. With the latest version, the player can play video inline as well.