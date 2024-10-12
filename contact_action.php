<?php
include("config.php");
include("firebaseRDB.php");

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if (empty($name) || empty($email) || empty($message)) {
    echo "All fields are required.";
    exit();
}

$rdb = new firebaseRDB($databaseURL);
$insert = $rdb->insert("/contacts", [
    "name" => $name,
    "email" => $email,
    "message" => $message
]);

if ($insert) {
    echo "Message sent successfully.";
    echo "<script>
                    setTimeout(function() {
                        window.location.href = 'contact.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
} else {
    echo "Failed to send message.";
    echo "<script>
                    setTimeout(function() {
                        window.location.href = 'contact.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
}
?>
