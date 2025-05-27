<?php
function Koneksi() {
    
    //Koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'pw_243040002');
return $conn;
}

function query($query) {
    $conn = koneksi();
    //Query ke tabel mahasiswa
    $result = mysqli_query($conn, $query);
    
    //Ubah datanya ke dalam array
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
return $rows;
}




