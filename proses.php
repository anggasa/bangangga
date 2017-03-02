<?php 
date_default_timezone_set('Asia/Jakarta'); 
$tgl=date('Y-m-d');
$exp= date('Y-m-d', strtotime($tgl. ' + 2 days'));
if(isset($_POST['submit'])){
$user=$_POST['user'];
$pass=$_POST['pass'];
$type = '/bin/false -m';

$connection = ssh2_connect('IP-VPS', 22);
}
if (ssh2_auth_password($connection, 'root', 'PASS-ROOT')) { 
//$result = ssh2_exec($connection, "useradd -e `date -d '2 days' +'%Y-%m-%d'` $user -s $type; { echo $pass; echo $pass; echo $closepage; } | passwd $user; usermod -c $kaka $user");


$result = ssh2_exec($connection, "useradd -e `date -d '2 days' +'%Y-%m-%d'` $user; { echo $pass; echo $pass; echo $closepage; } | passwd $user;");
}
//--------------------------------------------------------------------
if ($result) {
	echo "<marquee>PEMBUATAN AKUN SUKSES...!!!</marquee>";
        echo "<br>";
       echo "<br>";
                echo "<center><b>INFORMASI AKUN SSH ANDA</b></center>";
echo "<br>";
echo "<br>";
$user = $_POST['user'];
$pass = $_POST['pass'];
echo "<font color='blue'>Username: $user</font><br>";
echo "<br>";
echo "<font color='blue'>Password: $pass</font><br>";
echo "<br>";
echo "<font color='blue'>Host: 128.199.163.58</font><br>";
echo "<br>";
echo "<font color='blue'>Port: 443,143,2017</font><br>";
echo "<br>";
echo "<font color='blue'>Squid:8080,8000</font><br>";
echo "<br>";
echo "<font color='red'>DILARANG MEMAKAI SSH UNTUK !!DDOS,Hacking,Double Login,Fraud,Repost Account</font><br>";
echo "<br>";
echo "<center><b>Akun Expired : $exp</b></center>";
echo "<br>";
}
?>
