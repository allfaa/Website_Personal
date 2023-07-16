<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$nomor = $_POST['nomor'];
$kost = $_POST['kost'];
$harga = $_POST['harga'];
$date = $_POST['date'];
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$nama|$alamat|$jeniskelamin|$nomor|$kost|$harga|$date\n");
fclose($fp);

$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
// $deskripsi = $_POST['deskripsi'];
$direktori = "file/$nama_file";

if (move_uploaded_file($lokasi_file, $direktori)) {
    echo "<div style='text-align: center;'>";
    // echo "<h2>Terima kasih atas partisipasi Anda mengisi data booking</h2><br><br><br>";
    echo "<h3>File Uploaded Successfully!</h3>";
    echo "Nama File: <b>$nama_file</b><br><br>";
    echo "Isi Folder (Klik Link Untuk Download):";



    $myDir = "file/";
    $dir = opendir($myDir);



    while ($tmp = readdir($dir)) {
        echo "<a href='$myDir$nama_file' target='_blank'>$tmp</a>&nbsp;&nbsp;&nbsp;<br>";
    }
    closedir($dir);
    echo "<br><br><br><br><br>";
    echo "<a href='lihat.php' style='color: red;'>Lihat Data Booking</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    echo "<a href='formulir.php' style='color: red;'>Data Booking</a><br><br><br><br>";
    echo "</div>";

} else {
    echo "File Gagal Diupload";
}

echo "<div style='text-align: center;'><br><br>";


echo "</div>";

?>

<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            background-color: black;
            background-size: 100%;
            color: white;
            display: flex;
            padding-bottom: 40px;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>

<body>

</body>

</html>