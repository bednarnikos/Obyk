<?php
session_start();

// Lista użytkowników
$users = array(
    "okxn" => "okxn123",
    "obywatel" => "1234"
); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (array_key_exists($username, $users) && $users[$username] === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Niepoprawny login lub hasło.";
    }
}
?>
