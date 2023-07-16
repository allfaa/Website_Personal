<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$telepon = $_POST['telepon'];

echo "<head><title>My Guest Book</head></title>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$nomor|$telepon\n");
fclose($fp);

echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=tampilan.php>Isi Buku Tamu</a><br>";
echo "<a href=lihat.php>Lihat Buku Tamu</a><br>";
?>