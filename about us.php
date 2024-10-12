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
            color: #FCA9A9;
            text-align: center;
        }
        p {
            margin-bottom: 15px;
            line-height: 1.6;
            color: #333;
        }
        .mission, .vision, .team {
            margin-bottom: 30px;
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
            <a href="contact.php">Contact</a>
        </nav>
    </header>
    <div class="container">
        <h2>About Us</h2>
        <div class="mission">
            <h3>Our Mission</h3>
            <p>At Threads of Hope, our mission is to connect generous donors with those in need, ensuring that no one goes without the basic necessities of clothing. We believe in the power of community and the positive impact of sharing resources to improve lives.</p>
        </div>
        <div class="vision">
            <h3>Our Vision</h3>
            <p>We envision a world where everyone has access to the essentials they need to live with dignity. Our goal is to create a seamless platform that fosters compassion, reduces waste, and builds stronger, more supportive communities.</p>
        </div>
        <div class="team">
            <h3>Our Team</h3>
            <p>Our dedicated team is composed of passionate individuals who believe in making a difference. From our volunteers to our board members, each person plays a crucial role in driving our mission forward. Together, we work tirelessly to ensure that every donation is matched with a recipient in need.</p>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 Threads Of Hope. All rights reserved.</p>
    </footer>
</body>
</html>
