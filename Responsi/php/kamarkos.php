<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Guest Bool</title>
    <meta http-equiv="Content-Type" content="text/html" ; charset="iso-8859-1">
</head>

<body>
    <div align="center"><strong>
            <font size="6" face="Courier New, Courier, mono">FORMULIR BOOKING KOS</font>
        </strong></div>
    <form name="form1" method="post" action="proses.php">
        <table width="58%" border="0" align="center">
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td><input type="text" name="nomor" id="nomor"></td>
            </tr>
            <tr>
                <td>Alamat (Sesuai KTP)</td>
                <td><input type="text" name="alamat" id="alamat"></td>
            </tr>

            <tr>
                <td>E-Mail</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>

            <tr>
                <td>No.Telepon</td>
                <td><input type="text" name="telepon" id="telepon"></td>
            </tr>

            <tr>
                <td></td>
                <td><br><br><input type="submit" name="Submit" value="kirim"><input type="reset" name="Submit2"
                        value="Batal">
                </td>
            </tr>
        </table>
    </form>
    <div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu::</a></strong></div>
</body>

</html>