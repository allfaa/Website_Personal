<?php
include('datakamar.php');
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");
echo "<table border=0>";

while ($isi = fgets($fp, 1000)) {
    $pisah = explode("|", $isi);
    echo "<tr><td>Nama Kost</td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>Tipe Kost </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Fasilitas </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Harga </td><td>: $pisah[2]</td></tr>";

    echo "<tr><td> </td><td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
}

echo "</table>";
echo "<a href=datakamar.php> Klik Disini </a>Isi Form Buku Tamu";

?>