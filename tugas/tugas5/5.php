<?php
$students = [
    [
        "nama" => "Ardhi Jamil M",
        "nrp" => "243040002",
        "email" => "ardhijamilm7890@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Erik Adia Meka",
        "nrp" => "243040013",
        "email" => "eril@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Farid",
        "nrp" => "243040012",
        "email" => "farid@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Andhika Ashari",
        "nrp" => "243040034",
        "email" => "andhikah@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Naila Zalfa Winarti",
        "nrp" => "243040015",
        "email" => "naila@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Ikhsan Ferdiansyah",
        "nrp" => "243040017",
        "email" => "ikhsan@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Tanwirul Fuadhilan",
        "nrp" => "243040021",
        "email" => "tanwirul@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Muhammad Alvis Rafiffawaz",
        "nrp" => "243040046",
        "email" => "alvis@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Nasywa nur afifah salma",
        "nrp" => "243040036",
        "email" => "nasywa@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Dwi Dzaky Wibowo",
        "nrp" => "243040011",
        "email" => "dzaky@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>loopin array</title>
    </head>
    
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($students as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>