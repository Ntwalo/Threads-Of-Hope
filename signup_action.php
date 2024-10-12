<?php
include("config.php");
include("firebaseRDB.php");

// Use null coalescing operator to handle undefined keys
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(empty($name)){
    echo "Name is required";
} else if(empty($email)){
    echo "Email is required";
} else if(empty($password)){
    echo "Password is required";
} else {
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user", "email", "EQUAL", $email);
    $data = json_decode($retrieve, true);

    // Check if data array is not empty and contains the 'email' key
    if(!empty($data) && isset($data['email'])){
        echo "Email already used";
        echo "<script>
                    setTimeout(function() {
                        window.location.href = 'signup.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
    } else {
        $insert = $rdb->insert("/user", [
            "name" => $name,
            "email" => $email,
            "password" => $password
        ]);
        $result = json_decode($insert, true);
        if(isset($result['name'])){
            echo "Signup success, please login";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'login.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
        } else {
            echo "Signup failed";
            echo "<script>
                    setTimeout(function() {
                        window.location.href = 'signup.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
        }
    }
}
?>
