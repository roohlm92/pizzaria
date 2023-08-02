<?php
  include_once("templates/header.php");
?>
  <div id="main-banner">
    <h1>PIZZARIA MENDES</h1>
  </div>
  <div id="main-containe">
    <div class="container">
      <div class="row">
        
        <ul class="slider">
          <li>
             <input type="radio" id="slide1" name="slide" checked>
             <label for="slide1"></label>
            <img src="img/banner1.png" />
          </li>
          <li>
          <input type="radio" id="slide2" name="slide">
             <label for="slide2"></label>
            <img src="img/banner2.png" />
          </li>
          <li>
          <input type="radio" id="slide3" name="slide">
             <label for="slide3"></label>
            <img src="img/banner3.jpg" />
          </li>
          <div class="pizza-image">
              <div class="balloon">
                  <h3>Faça seu pedido!</h3>
              </div>
          </div>
        </ul>
      </div>
    </div>
  </div>
<?php
  include_once("templates/footer.php");
?>