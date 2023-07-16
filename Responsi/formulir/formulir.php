<html>

<head>
	<title>Data Booking</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		html,
		body {
			height: 100%
		}

		.bodi {
			background-color: rgba(255, 255, 255, 0.512);
			padding-top: 60px;
			padding-bottom: 30px;
			padding-left: 30px;
			margin-left: 25%;
			margin-right: 25%;
		}

		body {
			background-image: url(homee.png);
			background-position: center;
			background-size: cover;
			background-attachment: fixed;
			background-repeat: no-repeat;
			width: 100%;
			height: 100%;
			color: white;
		}
	</style>
</head>

<body>
	<div class="bgfoto">
		<div align="center">
			<strong>
				<font size="8" face="Times new roman">Data Booking</font>
			</strong>
		</div>
		<div align="center">
			<strong>
				<font size="9" face="Brush Script MT, cursive">SarjanaKos</font>
			</strong>
		</div>

		<font size="6" face="Brush Script MT, cursive"></font>
		</strong>
	</div><br><br><br><br>
	<div class="bodi">
		<form name="form1" method="post" action="proses.php" enctype="multipart/form-data">
			<table width="5%" border="0" align="center">
				<tr>
					<td>Nama Lengkap</td>
					<td><input name="nama" type="text" id="nama"></td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td><input name="alamat" type="text" id="alamat"></td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td><input name="jeniskelamin" type="radio" id="jeniskelamin" value="Pria">
						<label for="lakilaki">Pria</label>
						<input name="jeniskelamin" type="radio" id="jeniskelamin" value="Wanita">
						<label for="perempuan">Wanita</label>
					</td>
				</tr>

				<tr>
					<td>No Handphone</td>
					<td><input name="nomor" type="text" id="nomor"></td>
				</tr>


				</tr>

				<tr>
					<td>Pilih Kost</td>
					<td><select name="kost" id="kost">
							<option></option>
							<option>
								GRIYA ASRI KOST</option>
							<option>
								GRIYA MUTIARA KOST</option>
							<option>

								GRIYA INDAH KOST</option>
							<option>

								LILY GARDEN KOST</option>
							<option>

								MUTIARA KOST</option>
							<option>
								DAHLIA KOST</option>
							<option>

								SAKURA KOST</option>
							<option>

								GARDEN KOST</option>
							<option>
								BUNGA CITRA KOST</option>

						</select></td>
				</tr>


				<td>Pilih Harga</td>
				<td><select name="harga" id="harga">
						<option></option>
						<option>
							Rp 1.500.000 / bulan</option>
						<option>
							Rp 1.700.000 / bulan</option>
						<option>
							Rp 1.710.000 / bulan</option>
						<option>
							Rp 1.800.000 / bulan</option>
						<option>
							Rp 1.900.000 / bulan </option>
						<option>Rp 2.000.000 / bulan</option>
						<option>
							Rp 3.000.000 / bulan</option>


					</select></td>

				<tr>
					<td>Tanggal Sewa</td>
					<td><input name="date" type="date" id="date"></td>
				</tr>

				<tr>
					<td>File KTP:<input type="file" name="fupload"></td>
				</tr>

				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" name="Submit" value="Kirim">
						<input type="reset" name="Submit2" value="Batal">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<br>
	<div align="center">
		<strong><a style="color: white;" href="lihat.php">Lihat Data
				Booking</a></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<strong><a style="color: white;" href="http://localhost/Responsi/index.html#home">Halaman Utama</a></strong>
	</div>

</body>

</html>