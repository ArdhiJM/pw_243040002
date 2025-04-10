<?php

if (isset($_GET["angka"])) {
    $angka = intval($_GET['angka']);
} else {
    $angka = 10;
}

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan6a</title>
    <style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            margin: 2px;
            border: 1px solid black;
            background-color: blue;
        }
    </style>
</head>

<body>
    <?php if ($angka > 0): ?>
        <?php for ($i = $angka; $i >= 1; $i--): ?>
            <?php for ($j = 1; $j <= $i; $j++): ?>
                <div class="box"><?php echo $i; ?></div>
            <?php endfor; ?>
            <br>
        <?php endfor; ?>
    <?php else: ?>
        <p>masukkan parameter 'angka' pada URL, dan cek kembali menggunakan '?angka=10' apbila halaman
            tersebut masih kosong cek kembali pada isset
        </p>
    <?php endif; ?>
</body>

</html>