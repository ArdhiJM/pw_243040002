<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2d</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
        }

        .box {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: .5px solid black;
            font-weight: bold;
            font-size: 20px;
        }

        .black {
            background-color: black;
            color: white;
        }

        .white {
            background-color: white;
            color: black;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo '<div class="row">';
            for ($j = 0; $j < 5; $j++) {
                $class = ($i + $j) % 2 == 0 ? 'black' : 'white'; // Pola catur
                echo "<div class='box $class'></div>";
            }
            echo '</div>';
        }
        ?>
    </div>

</body>

</html>