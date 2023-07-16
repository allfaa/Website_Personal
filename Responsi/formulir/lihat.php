<html>

<head>
    <title>Data Booking</title>
    <style type="text/css">
        html,
        body {
            height: 100%
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
        <?php
        echo "<head></head>";
        $fp = fopen("guestbook.txt", "r");
        echo "<table border = 0>";
        $pisah;
        echo "<center><b><h1>DATA SEWA KOS<h1></b></center>";
        while ($isi = fgets($fp)) {
            $pisah = explode("|", $isi);
            if (isset($pisah[0])) {
                $value = $pisah[0];
                echo "<tr><td>Nama</td><td> : $pisah[0]</td></tr>";
            }
            if (isset($pisah[1])) {
                $value = $pisah[1];
                echo "<tr><td>Alamat</td><td> : $pisah[1]</td></tr>";
            }
            if (isset($pisah[2])) {
                $value = $pisah[2];
                echo "<tr><td>Jenis Kelamin</td><td> : $pisah[2]</td></tr>";
            }

            if (isset($pisah[3])) {
                $value = $pisah[3];
                echo "<tr><td>No Hanphone</td><td> : $pisah[3]</td></tr>";
            }
            if (isset($pisah[4])) {
                $value = $pisah[4];
                echo "<tr><td>Kost</td><td> : $pisah[4]</td></tr>";
            }
            if (isset($pisah[5])) {
                $value = $pisah[5];
                echo "<tr><td>Harga</td><td> : $pisah[5]</td></tr>";
            }
            if (isset($pisah[6])) {
                $value = $pisah[6];
                echo "<tr><td>Tanggal Sewa</td><td> : $pisah[6]</td></tr><tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
            }
        }
        echo "<table>";
        echo "<center><a href='formulir.php' style='color: white;'><h3>Klik untuk ke halaman Formulir<h3></a></center>";
        ?>
    </div>

</body>

</html>