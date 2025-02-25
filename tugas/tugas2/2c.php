<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
        }

        .row {
            display: flex;
        }

        .box {
            font-family: sans-serif;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: salmon;
            border: .5px solid black;
        }
    </style>
</head>

<body>

    <div class="container">
        <?php
        for ($i = 10; $i >= 1; $i--) {
            echo '<div class="row">';
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='box'>$j</div>";
            }
            echo '</div>';
        }
        ?>
    </div>

</body>

</html>