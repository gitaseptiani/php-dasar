<?php
// array data mahasiswa
$data = [
    [1, "D212111006", "Gita Septiani"],
    [2, "D212111023", "Ajeng Aprilyani"],
    [3, "D212111014", "Rizaldy Muhamad Sopyan"],
    [4, "D212111028", "Fanisa Tri Agna Fata"],
    [5, "D212111026", "Aura Maliya"],
    [6, "D212111021", "Triana Siti Aryani"],
    [7, "D212111025", "Aspiya Huwaida"],
    [8, "D212111002", "Cahya Julianti"],
    [9, "D212111004", "Desi Syifa Fitria"],
    [10, "D212111005", "Dewi Yulianti"]
];

// menampilkan tabel
echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr><th>No</th><th>NIM</th><th>Nama</th></tr>";

foreach ($data as $row) {
    echo "<tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
          </tr>";
}
echo "</table>";
?>