<?php
  include_once("templates/header.php");
?>
  <div id="main-banner">
    <h1>CONTATOS</h1>
  </div>

<!DOCTYPE html>
<html>

<body>

<h2>Contatos</h2>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
    </tr>
    <tr>
        <td>Pizzaria Mendes</td>
        <td>pizzaria@example.com</td>
        <td>(11) 99999-9999</td>
    </tr>
    
</table>

<body>

<div class="center">

    <h2>Formulário de Contato</h2>

    <form action="enviar_mensagem.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br>

        <input type="submit" value="Enviar Mensagem">
    </form>

</div>

<h2>Localização</h2>

<div id="map"></div>

<script>
    
    function initMap() {
        var pizzariaLocation = { lat: -23.550520, lng: -46.633308 };
        var map = new google.maps.Map(document.getElementById('map'), {
            center: pizzariaLocation,
            zoom: 15
        });
        var marker = new google.maps.Marker({
            position: pizzariaLocation,
            map: map,
            title: 'Pizzaria da GPT-3.5' 
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=SUA_CHAVE_DE_API_DO_GOOGLE_MAPS&callback=initMap"></script>

</body>
</html>

  
<?php
  include_once("templates/footer.php");
?>