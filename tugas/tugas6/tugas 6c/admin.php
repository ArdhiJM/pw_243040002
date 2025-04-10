<?php
session_start();

    if(!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome page</title>
    <style>
        body {
            background-color: rgb(180, 180, 180);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: lightblue;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            overflow: hidden;
            max-width: 28rem;
            margin: auto;
        }

        .image-container {
            position: relative;
        }

        .image {
            width: 100%;
            height: auto;
        }

        .overlay {
            position: relative;
            background-color: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay-text {
            color: white;
            font-size: 2.25rem;
            font-weight: 600;
        }

        .content {
            padding: 2rem;
        }

        .text{
            color: black;
            text-align: center;
            margin-bottom: 1rem;
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .button{
            background-color: whitesmoke;
            color: black;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        .button:hover {
            background-color: darkcyan;
        }

        .button:focus {
            outline: none;
            box-shadow: 0 0 0 2px rgba(239, 68, 68, 0.5);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="foto.jpg" class="image">
            <div class="overlay">
                <h1 class="overlay-text">Welcome, Ardhi</h1>
            </div>
        </div>
    </div>
    <div class="content">
        <p class="text">Welcome to our website! We are glad to have you here. Explore and enjoy your stay.</p>
        <div class="button-container">
            <form action="" method="$_POST">
                <button class="button" name="logout" type= "submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>