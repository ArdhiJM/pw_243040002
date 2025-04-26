<?php
session_start();

    if (isset($_SESSION['username'])) {

    }

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $username = $_POST['username'] ?? "";
        $password = $_POST['password'] ?? "";

        if ($username === "ardhi" && $password === "ardhi21#$") {
            $_SESSION['username'] = $username;
            header("Location: admin.php");
            exit();
        } else {
            $eror = "Something went wrong Sorry, something went wrong there. Try again.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin</title>
    <style>
        body {
            background-color: lightblue;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: skyblue;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            width: 20rem;
        }

        .title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-align: center;
        }

        .logo {
            display: block;
            margin: 0 auto 1rem;
            height: 100px;
            width: 100px;
        }

        .from-group {
            margin-bottom: 1rem;
        }

        .from-group label {
            display: block;
            color: black;
            margin-bottom: 0.5rem;
        }

        .from-group input{
            width: 92%;
            padding: 0.75rem;
            border: 1pxx solid #d1d5db;
            border-radius: 0.5rem;
            outline: none;
        }

        .from-group input:focus {
            border-color: #3b82f6;
            color: 0 0 0 2px rgba (59, 130, 246, 0.5);
        }
        
        .submit-btn {
            width: 100%;
            background-color: #3b82f6;
            color: #ffffff;
            padding: 0.75rem;
            border-radius: 0.5rem;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .submit-btn:hover {
            background-color: cornflowerblue;
        }

        .eror-message {
            color: red;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="title">
            Login admin
        </h2>
        <img src="logo.png" alt="Placeholder logo Image" class="logo" height="100">
        <form method="post">
            <div class="from-group">
                <label for="username">
                    Username:
                </label>
                <input id="username" name="username" required="" type="text"/>
            </div>
            <div class="form-group2">
                <label for="password">
                    Password:
                </label>
                <input id="password" name="password" required="" type="password">
            </div>
            <button class="submit-btn" type="submit">
                Login
            </button>
        </form>
        <?php if (isset($error)): ?>
            <p class="text-danger mb-4"><?= $error?></p>
        <?php endif; ?>
    </div>
</body>
</html>