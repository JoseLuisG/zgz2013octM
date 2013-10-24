<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abou Us :: Spicylicious - Premium HTML template by D.Koev</title>
<link rel="stylesheet" href="stylesheet/stylesheet.css" type="text/css" media="screen" />
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="stylesheet/jquery-ui-1.8.9.custom.css" />
<!-- jQuery and Custom scripts -->
<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
<script src="js/jquery.cycle.lite.1.0.min.js" type="text/javascript"></script>
<script src="js/custom_scripts.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<!-- Tipsy -->
<script src="js/tipsy/jquery.tipsy.js" type="text/javascript"></script>
<link href="js/tipsy/css.tipsy.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.tweet.js" type="text/javascript"></script>
<link href="js/jquery.tweet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- MAIN WRAPPER -->
<div id="container"> 
  
  <?php
  include ("partials/sides.php");
  ?>
  
  <?php
  include ("partials/header.php");
  ?>
  
  <?php
  include ("partials/content-about.php");
  ?>
  
  <?php
  include ("partials/prefooter.php");
  ?>
  
  <?php
  include ("partials/footer.php");
  ?>
  
</div>
<!-- END OF MAIN WRAPPER --> 
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/d_koev.json?callback=twitterCallback2&amp;count=3"></script> 
<script type="text/javascript"><!--
$(document).ready(function() {
$('#twitter_update_list').cycle({
		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		next:   '#tweet_next', 
    	prev:   '#tweet_prev'
		}); 
		});
//--></script> 
<script type="text/javascript"><!--
$('#tabs a').tabs();
//--></script> 
<script type="text/javascript"><!--
$(function() {
		$( "#accordion" ).accordion({
			autoHeight: false,
			navigation: true
		});
	});
//--></script>
</body>
</html>
