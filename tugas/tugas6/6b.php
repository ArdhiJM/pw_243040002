<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = intval($_POST['angka']);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan6b</title>
    <style>
        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            border: 1px solid black;
            margin: 2px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        Masuk kan Angka: <input type="number" name="angka" required>
        <button type="submit">Tampilkan</button>
    </form>
    <br>
    <?php
    if (isset($angka)) {
        for ($i = $angka; $i > 0; $i--) {
            for ($j = 0; $j < $i; $j++) {
                echo "<div class= box>$i</div>";
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>