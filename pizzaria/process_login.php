<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin123") {
        
        $_SESSION['user_id'] = 1; 
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<p>Usuário ou senha inválidos.</p>";
    }
}
?>

