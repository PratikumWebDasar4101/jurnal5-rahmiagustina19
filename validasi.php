<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$komentar=$_POST['komentar'];
$hitung=count(explode(" ", $komentar));

echo "Nim :$nim";
echo "<br><br>Nama :$nama";
echo "<br><br>Email :$email";
echo "<br><br>Jumlah Kata :$hitung";

if ($hitung<5) {
	$selisih=5-$hitung;
	echo "<br><br>Error :Maaf jumlah kata yang anda inputkan kurang $selisih kata :)";
}else{
	die("<br><br>komentar : $komentar");
}
?>