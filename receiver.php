<?php
include("config.php");
include("firebaseRDB.php");

if (!isset($_SESSION['user'])) {
    header("location: login.php");
    exit();
} else {
    $user = $_SESSION['user'];
}
?><!DOCTYPE html>
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
            padding: 20px;
            background: transparent;
            border: 2px solid rgba(225, 255, 255, .5);
            border-radius: 10px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            width: 100%;
            max-width: 600px;
            margin: 20px;
        }
        h2 {
            margin-bottom: 20px;
            color: #FCA9A9;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input, textarea {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }
        button {
            padding: 15px 30px;
            font-size: 18px;
            color: black;
            background-color: #FCA9A9;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ABFF77;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
        footer {
            width: 100%;
            padding: 10px;
            background-color: #FCA9A9;
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
            <a href="dashboard.php">Home</a>
            <a href="about us.php">About Us</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <div class="container">
        <h2>Receive Clothes</h2>
        <form method="post" action="receiver_action.php" id="receiverForm">
            <div class="error" id="error"></div>
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="address">Address</label>
            <textarea id="address" name="address" rows="4" required></textarea>
            <label for="clothes-details">Details of Clothes Needed</label>
            <textarea id="clothes-details" name="clothes-details" rows="4" required></textarea>
            <button type="submit">Submit Request</button>
        </form>
    </div>
    <footer>
        <p>&copy; 2024 Threads Of Hope. All rights reserved.</p>
    </footer>
    <script src="Script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
