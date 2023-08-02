<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    header("Location: contato.php?enviado=1");
    exit();
} else {
    
    header("Location: contato.php");
    exit();
}
?>
