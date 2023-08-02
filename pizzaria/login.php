<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <nav>
  <ul id="navbar">
        <li><a href="index.php" class="nav-link">Home</a></li>
        <li><a href="pedido.php" class="nav-link">Pedidos</a></li>
        <li><a href="cardapio.php" class="nav-link">Cardápio</a></li>
        <li><a href="contato.php" class="nav-link">Contato</a></li>
      </ul>
  </nav>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/login.css">
  <title>Página de Login</title>

</head>
<body>
  <div class="login-container">
    <div class="login-box">
      <h2>LOGIN</h2>
      <form action="process_login.php" method="POST">
        <input type="text" name="username" placeholder="Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <button type="submit">Entrar</button>
      </form>
      
    </div>
  </div>
</body>
</html>
<?php
  include_once("templates/footer.php");
?>