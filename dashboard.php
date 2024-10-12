<?php
include("config.php");
include("firebaseRDB.php");

if (!isset($_SESSION['user'])) {
    header("location: login.php");
    exit();
} else {
    $user = $_SESSION['user'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Threads Of Hope</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;1,600;1,800&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Kanit', sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: url('background.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 99;
        }
        .logo {
            font-size: 2em;
            color: black;
            user-select: none;
        }
        .navigation a {
            position: relative;
            font-size: 1.1em;
            color: black;
            text-decoration: none;
            font-weight: 500;
            margin-left: 40px;
        }
        .navigation a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 3px;
            background: #FCA9A9;
            border-radius: 5px;
            transform: scaleX(0);
            transition: transform .2s;
        }
        .navigation a:hover::after {
            transform: scaleX(1);
        }
        .navigation .btnSignOut-popup {
            width: 130px;
            height: 50px;
            background: transparent;
            border: 2px solid black;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            color: black;
            font-weight: 500;
            margin-left: 40px;
            transition: .2s;
        }
        .navigation .btnSignOut-popup:hover {
            background: #ABFF77;
            color: black;
        }
        .container {
            text-align: center;
            margin-top: 50px;
        }
        .title {
            font-size: 32px;
            margin-bottom: 20px;
        }
        .description {
            font-size: 18px;
            margin-bottom: 40px;
        }
        .button-container {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .button {
            padding: 15px 30px;
            font-size: 18px;
            color: black;
            background-color: #FCA9A9;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
        .button:hover {
            background-color: #ABFF77;
        }
        footer {
            width: 100%;
            padding: 10px;
            background-color: #ABFF77;
            color: black;
            text-align: center;
            position: fixed;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <img src="Logo.png" width="100px" height="100px" alt="Logo">
        <nav class="navigation">
            <a href="about us.php">About Us</a>
            <a href="contact.php">Contact</a>
            <button class="btnSignOut-popup" onclick="window.location.href='logout.php'">Sign Out</button>
        </nav>
    </header>
    <div class="container">
        <div class="title">Hello <b><?php echo htmlspecialchars($user['name']); ?></b>, Welcome to Threads Of Hope</div>
        <div class="description">Connecting donors with those in need. Please choose an option below:</div>
        <div class="button-container">
            <a href="donator.php" class="button">Donate Clothes</a>
            <a href="receiver.php" class="button">Receive Clothes</a>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Threads Of Hope. All rights reserved.</p>
    </footer>
</body>
</html>
