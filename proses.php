<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim']; // Mengambil nilai nim dari input form
    $nilai = $_POST['nilai'];

    include 'Mahasiswa.php'; // File dengan definisi kelas Mahasiswa

    $mahasiswa = new Mahasiswa($nama, $nim, $nilai); // Menggunakan nilai nim yang diambil dari form
    $hasilLulus = $mahasiswa->hasilLulus(); // Memanggil metode hasilLulus()
    $nim = $mahasiswa->getNim(); // Memanggil metode getNim() untuk mendapatkan nilai nim
    $predikat = $mahasiswa->predikat(); // Memanggil metode predikat()
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<table class="table mt-5">
<thead>
<tr>
<th scope="col">NO</th>
<th scope="col">Nama</th>
<th scope="col">Nilai</th>
<th scope="col">Nim</th>
<th scope="col">Hasil</th>
<th scope="col">Predikat</th>
</tr>
</thead>
<tbody>
<tr>
<th scope="row">1</th>
<td><?=  $nama ?></td>
<td><?= $nilai ?></td>
<td><?=  $nim ?></td>
<td><?=  $hasilLulus ?></td>
<td><?= $predikat ?></td>
</tr>
</tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
