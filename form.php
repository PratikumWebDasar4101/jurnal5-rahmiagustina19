<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran</title>
	<h1><center>PENDAFTARAN</center></h1>
</head>
<body>
	<form action="validasi.php" method="post">
		<table align="CENTER">
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name="nim"  title="Nim harus angka serta 10 karakter"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"  title="Nama harus max 25 karakter" ></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email" name="email" placeholder="@gmail.com"></td>
			</tr>
			<tr>
				<td>Komentar</td>
				<td>:</td>
				<td><input type="text" name="komentar"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>
			</tr>
			</tr>
		</table>
	</form>

</body>
</html>