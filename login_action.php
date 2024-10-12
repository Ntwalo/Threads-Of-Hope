<?php
include("config.php");
include("firebaseRDB.php");

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if (empty($email)) {
    echo "Email is required";
} else if (empty($password)) {
    echo "Password is required";
} else {
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user", "email", "EQUAL", $email);
    $data = json_decode($retrieve, true);

    if (count($data) == 0) {
        echo "Email not registered";
        echo "<script>
                    setTimeout(function() {
                        window.location.href = 'login.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
    } else {
        $id = array_keys($data)[0];
        if ($data[$id]['password'] == $password) {
            $_SESSION['user'] = $data[$id];
            header("location: dashboard.php");
            exit();
        } else {
            echo "Login failed";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'login.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
        }
    }
}
?>
