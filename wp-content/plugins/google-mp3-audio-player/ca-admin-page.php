
<?php

?>

<style type="text/css">
	.ca-google-mp3-audio-player {
		width: 660px;
		margin: 65px 0 0 40px;
		padding: 20px;
		background-color: #edeff4;
		
		border: 1px #bdc7d8 solid;
		
		-moz-border-radius: 	5px;
		-webkit-border-radius: 	5px;
		border-radius: 			5px;
		
		color: #3b5998;
		
		text-align: center;
		
		position: absolute;
	}
	
	.ca-google-mp3-audio-player h2 {
		font-size: 20px;
		font-weight: normal;
		border-bottom: 1px #bdc7d8 solid;
		padding-bottom: 15px;
	}
	
	.ca-google-mp3-audio-player-content {
		padding: 12px 12px 15px 12px;
		color: #000;
		text-align: left;
		background: #fff;
		border: 1px #BBB solid;
	}
	
	
	
	.code-art-watermark {
		position: absolute;
		bottom: 25px;
		right: 25px;
	}
	
	
	.ca-options-description li, p {
		padding: 0;
		margin: 0;
	}
	
	.ca-options-description {
		margin: 5px 0 5px 0;
	}
</style>

<div class="ca-google-mp3-audio-player">
	
    <h2>CodeArt - Google MP3 Audio Player (Plugin for WordPress)</h2>
    
    <div class="ca-google-mp3-audio-player-content">
    	<ul>
        	<li>
            	<strong>Credits:</strong>
                <p>CodeArt - Ultimate Creations (<a href="http://codeart.mk">www.codeart.mk</a>)</p>
            </li>
            
            <li>
            	<strong>Description:</strong>
                <p>
                	The plugin 'CodeArt - Google MP3 Audio Player (for WordPress)' will allow you to embed mp3 audio files in a player where you want on the post(s).<br />
                    <span style="color: red;">NOTE: 'CodeArt - Google MP3 Audio Player' plugin is tested only on WordPress 3.3v!</span>
                </p>
            </li>
            
            <li>
            	<strong>How to use:</strong>
                <p>
                	First of all, you need to upload/host your mp3 audio file which you want to embed in the posts.<br />
                    You can do this via <a href="upload.php">Media Library</a> or another file hosting.<br />
                    After uploading your mp3 audio file you need to copy the full URL path of the uploaded mp3 file and to put in the post where you want to be displayed in this format: <br />
                    <textarea rows="2" cols="105">[ca_audio url="URL" width="WIDTH" height="HEIGHT" css_class="CSS_STYLE"]</textarea>
                    <ul class="ca-options-description">
                    	<li><strong>URL</strong> - Full URL to the MP3 audio file which you want to embed in the posts [<span style="color: red;">required</span>].</li>
                        <li><strong>WIDTH</strong> - Width of the MP3 player (must be integer) [optional, default is 500 pixels].</li>
                        <li><strong>HEIGHT</strong> - Height of the MP3 player (must be integer) [optional, default is 27 pixels].</li>
                        <li><strong>CSS_STYLE</strong> - This is for the developers.</li>
                    </ul>
                    <i>Put the shortcode (of course, with the correct informations) in post(s) where you want to be displayed the player</i>.
                </p>
            </li>
            
            <li>
            	<strong>FeedBack:</strong>
                <p>You can send a feedback on <a href="mailto:tomislav@codeart.mk">E-Mail</a> or you can visit out website <a href="http://codeart.mk">www.codeart.mk</a></p>
            </li>
        </ul>
        
        <div class="code-art-watermark">
        	<img align="absbottom" src="../wp-content/plugins/codeart-google-mp3-player/codeart-watermark3.png" width="71" height="55" alt="CodeArt Watermark" />
        </div>
        
    </div>
    
</div>