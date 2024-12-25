<?php

 $mysqli = new mysqli('localhost', 'root', '', 'tedc');
 $result = $mysqli->query("SELECT students.nim, students.nama, study_programs.name 
                          FROM students 
                          LEFT JOIN study_programs ON students.program_studi = study_programs.study_programs_id 
                          WHERE study_programs.study_programs_id = 11 OR students.program_studi IS NULL;");


 $mahasiswa = [];

 while ($row = $result->fetch_assoc()) {
 	array_push($mahasiswa, $row);
 }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Document </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<body>
    <div class="container mt-4">
        <h2 class="mb-3" align="center">Daftar Mahasiswa KA 2021</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $key => $value) { ?>
                    <tr>
                        <td><?= $value['nim']; ?></td>
                        <td><?= $value['nama']; ?></td>
                        <td><?= $value['name'] === null ? 'NULL' : $value['name']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>