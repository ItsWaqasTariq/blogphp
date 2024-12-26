<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($action === 'signup') {
        $username = $_POST['username'];
        // Add logic to handle sign-up (e.g., save to database)
        header("Location: home.html");
        exit();
    } elseif ($action === 'signin') {
        // Add logic to handle sign-in (e.g., validate credentials)
        header("Location: home.html");
        exit(); 
    } else {
        echo "Invalid action!";
    }
}
?>
