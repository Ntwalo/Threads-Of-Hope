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
            flex: 1;
            padding: 20px;
            background: transparent;
            border: 2px solid rgba(225, 255, 255, .5);
            border-radius: 10px;
            backdrop-filter: blur(20px);
            box-shadow: 0 0 30px rgba(0, 0, 0, .5);
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
        }
        h2 {
            margin-bottom: 20px;
            color: #ABFF77;
        }
        .contact-info {
            display: flex;
            flex-direction: column;
            margin-bottom: 30px;
        }
        .contact-info div {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .contact-info i {
            font-size: 24px;
            color: #4CAF50;
            margin-right: 10px;
        }
        .contact-info a {
            color: #333;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
        }
        .contact-form {
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
            background-color: #ABFF77;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #FCA9A9;
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
            <a href="dashboard.php">Home</a>
            <a href="about us.php">About Us</a>
        </nav>
    </header>
    <div class="container">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <div>
                <i class="fas fa-envelope"></i>
                <a href="mailto:nativedholdings@gmail.com">nativedholdings@gmail.com</a>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <a href="tel:+27824035469">+27(82) 4035-469</a>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <a href="tel:+27608676528">+27(60) 8676-528</a>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <a href="Ntwalopressy@icloud.com">Ntwalopressy@icloud.com</a>
            </div>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span>154 Steve Biko Road, Pretoria, South Africa</span>
            </div>
        </div>
        <div class="contact-form">
            <h3>Send us a message</h3>
            <form method="post" action="contact_action.php" id="contactForm">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Threads Of Hope. All rights reserved.</p>
    </footer>
</body>
</html>
