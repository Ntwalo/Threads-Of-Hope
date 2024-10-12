<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: url('background.jpg') no-repeat center center;
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 99;
        }

        .logo-container {
            display: flex;
            align-items: center;
            margin-right: 60px; /* Adjust space between logo and navigation */
        }

        .logo {
            font-size: 2em;
            color: black;
            user-select: none;
        }

        .navigation {
            display: flex;
            gap: 20px;
        }

        .navigation a {
            font-size: 1.1em;
            color: black;
            text-decoration: none;
            font-weight: 500;
            position: relative;
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
            transition: transform 0.2s;
        }

        .navigation a:hover::after {
            transform: scaleX(1);
        }

        .signup-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 150px; /* Adjust to ensure visibility */
        }

        .signup-container h2 {
            margin-bottom: 20px;
        }

        .signup-container input[type="text"],
        .signup-container input[type="email"],
        .signup-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .signup-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .signup-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .signup-container a {
            color: #4CAF50;
            text-decoration: none;
        }

        .signup-container a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }

            .navigation {
                flex-direction: column;
                gap: 10px;
                margin-top: 10px;
            }

            .signup-container {
                margin-top: 200px; /* Adjust margin for small screens */
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="Logo.png" width="100px" height="100px" alt="Logo" class="logo">
        </div>
        <nav class="navigation">
            <a href="home.html">About Us</a>
            <a href="#">Services</a>
            <a href="contact.html">Contact</a>
        </nav>
    </header>
    <div class="signup-container">
        <form method="post" action="signup_action.php">
            <h2>SIGN UP FORM</h2>
            Full name<br>
            <input type="text" name="name"><br>
            Email <br>
            <input type="email" name="email"><br>
            Password <br>
            <input type="password" name="password"><br>
            <input type="submit" value="SIGNUP"><br><br>
            Already have an account? <a href="login.php">Login in</a>
        </form>
    </div>
</body>
</html>
