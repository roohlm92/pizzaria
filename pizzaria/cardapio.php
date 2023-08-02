<?php
  include_once("templates/header.php");
?>
  <div id="main-banner">
    <h1>CARDÁPIO</h1>
  </div>
  <!DOCTYPE html>
<html>
<head>
    <title>Cardápio da Pizzaria</title>
</head>
<body>

<?php

$pizzas = array(
    array("sabor" => "Calabresa", "ingredientes" => "Calabresa, cebola e queijo", "preco" => 25.00),
    array("sabor" => "Mussarela", "ingredientes" => "Mussarela e molho de tomate", "preco" => 22.50),
    array("sabor" => "Margherita", "ingredientes" => "Mussarela, tomate, manjericão e molho de tomate", "preco" => 26.00),
    array("sabor" => "Portuguesa", "ingredientes" => "Presunto, mussarela, ovo, cebola e azeitona", "preco" => 28.00),
    array("sabor" => "Frango com Catupiry", "ingredientes" => "Frango desfiado, catupiry e milho", "preco" => 27.50),
    array("sabor" => "Quatro Queijos", "ingredientes" => "Mussarela, catupiry, provolone e parmesão", "preco" => 30.00),
    array("sabor" => "Pepperoni", "ingredientes" => "Pepperoni e queijo", "preco" => 26.50),
    array("sabor" => "Baiana", "ingredientes" => "Calabresa, pimenta e cebola", "preco" => 27.00),
    array("sabor" => "Palmito", "ingredientes" => "Palmito e queijo", "preco" => 25.50),
    array("sabor" => "Rúcula com Tomate Seco", "ingredientes" => "Rúcula, tomate seco e queijo", "preco" => 29.00),
    array("sabor" => "Napolitana", "ingredientes" => "Mussarela, tomate, azeitona e orégano", "preco" => 24.50),
    array("sabor" => "Vegetariana", "ingredientes" => "Mussarela, palmito, milho, ervilha, champignon, brócolis e cebola", "preco" => 31.00),
    array("sabor" => "Califórnia", "ingredientes" => "Mussarela, abacaxi, presunto e queijo", "preco" => 28.50),
    array("sabor" => "Bacon com Milho", "ingredientes" => "Bacon, milho e queijo", "preco" => 26.00),
    array("sabor" => "Chocolate", "ingredientes" => "Chocolate e morango", "preco" => 25.50),
    array("sabor" => "Bauru", "ingredientes" => "Presunto, mussarela, tomate e ovo", "preco" => 27.00),
    array("sabor" => "Atum", "ingredientes" => "Atum, cebola e azeitona", "preco" => 26.50),
    array("sabor" => "Alho e Óleo", "ingredientes" => "Alho frito, óleo e parmesão", "preco" => 24.50),
    array("sabor" => "Peito de Peru", "ingredientes" => "Peito de peru, catupiry e milho", "preco" => 28.00),
    array("sabor" => "Romeu e Julieta", "ingredientes" => "Goiabada e queijo", "preco" => 25.00),
);
?>

<table border="1">
    <tr>
        <th>Sabor</th>
        <th>Ingredientes</th>
        <th>Preço (R$)</th>
    </tr>
    <?php
    
    foreach ($pizzas as $pizza) {
        echo "<tr>";
        echo "<td>" . $pizza['sabor'] . "</td>";
        echo "<td>" . $pizza['ingredientes'] . "</td>";
        echo "<td>" . number_format($pizza['preco'], 2, ',', '.') . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>

      
      
    </div>
  </div>
<?php
  include_once("templates/footer.php");
?>