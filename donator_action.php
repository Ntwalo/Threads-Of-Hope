<?php
include("config.php");
include("firebaseRDB.php");

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
$clothes_details = $_POST['clothes-details'] ?? '';

if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($clothes_details)) {
    echo "All fields are required.";
    exit();
}

$rdb = new firebaseRDB($databaseURL);
$insert = $rdb->insert("/donations", [
    "name" => $name,
    "email" => $email,
    "phone" => $phone,
    "address" => $address,
    "clothes_details" => $clothes_details
]);

if ($insert) {
    echo "Donation submitted successfully.<br>Please go back.";
    echo "<script>
                    setTimeout(function() {
                        window.location.href = 'donator.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
} else {
    echo "Failed to submit donation.<br>Please go back.";
    echo "<script>
                    setTimeout(function() {
                        window.location.href = 'donator.php';
                    }, 5000); // 5 seconds in milliseconds
                  </script>";
}
?>
