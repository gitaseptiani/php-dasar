<?php
        // Data pribadi
        $nama = "Gita Septiani";
        $jenis_kelamin = "P";
        $umur = 21;
        $berat = "42 kg";
        $tinggi = "146 cm";
    ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi</title>
</head>
<body>
    <table border="1", cellpadding="4", cellspacing="0">
        <tr>
            <td>Nama</td>
            <th>:</th>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <th>:</th>
            <td><?php echo $jenis_kelamin; ?></td>
        </tr>
        <tr>
            <td>Umur</td>
            <th>:</th>
            <td><?php echo $umur; ?></td>
        </tr>
        <tr>
            <td>Berat</td>
            <th>:</th>
            <td><?php echo $berat; ?></td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <th>:</th>
            <td><?php echo $tinggi; ?></td>
        </tr>
    </table>
</body>
</html>
