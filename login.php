<?php
session_start();

$users = array(
    "okxn" => "okxn123",
    // Info o autorze itd.
); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['nvvice'];
    $password = $_POST['nvvice'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid auth key.";
    }
}
?>

