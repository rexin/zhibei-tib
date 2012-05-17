<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>mvp</title>
</head>

<body style="background-color:#444444;margin:0;">

<?php
					if(isset($_GET["iid"])){
						echo "<embed src='http://marketing.tudou.com/global/dwPlayer/DiggPlayer.swf?iid={$_GET["iid"]}' type='application/x-shockwave-flash' allowscriptaccess='always' allowfullscreen='true' wmode='opaque' width='460' height='345'></embed>";
					}else{
						echo "<embed src='../images/pre.swf' wmode=opaque width=460 height=345></embed>";
					}	?>

</body>
</html>
