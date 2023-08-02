<?php 

  include("process/conn.php");

  $msg = "";

  if(isset($_SESSION["msg"])) {

    $msg = $_SESSION["msg"];
    $status = $_SESSION["status"];

    $_SESSION["msg"] = "";
    $_SESSION["status"] = "";

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <nav>
  <ul id="navbar">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="pedido.php" class="nav-link">Pedidos</a></li>
        <li><a href="cardapio.php" class="nav-link">Cardápio</a></li>
        <li><a href="contato.php" class="nav-link">Contato</a></li>
      </ul>
  </nav>
  <title>Faça seu Pedido!</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          
        </ul>
      </div>
    </nav>
  </header>
  <?php if($msg != ""): ?>
    <div class="alert alert-<?= $status ?>">
      <p><?= $msg ?></p>
    </div>
  <?php endif; ?>