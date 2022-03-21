<?php
require '../datab/stock/function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./all.css">
  <title>High-Tech</title>
</head>

<body>


  <div class="para">
    <div class="section-stick">
      <div class="stick active"></div>
    </div>
    <section id="hite" class="s1">

      <div class="home">

        <div class="kriss">
          <h1 class="loni">
            <span class="fredo">H</span>
            <span class="fredo">i</span>
            <span class="fredo">g</span>
            <span class="fredo">h</span>
            <span class="fredo">-</span>
            <span class="fredo">t</span>
            <span class="fredo">e</span>
            <span class="fredo">c</span>
            <span class="fredo">h</span>
          </h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"
          focusable="false" width="1em" height="1em"
          style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
          preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
          <path d="M5 6l5 5l5-5l2 1l-7 7l-7-7z" fill="#fff" />
          <rect x="0" y="0" width="20" height="20" fill="rgba(0, 0, 0, 0)" /></svg>
      </div>
    </section>

    <section id="ok" class="s2">
      <div class="pic1">
        <img class="border" src="../photopr2/high-tech/teledonut.jpg" alt="">
        <div class="dispo">
          <?php
          $total_products = $pdo->query('SELECT * FROM high_tech WHERE id = 1');
          
          while ($data = $total_products->fetch(PDO::FETCH_OBJ)):
          ?>
          <h2 class="title">
          <?= $data->name ?>
          </h2>
          <div class="text1">
            <p><?= $data->desc ?></p>
            <p><?= $data->price ?></p>
          </div>

          <?php
          endwhile;
          ?>
          <input type="submit" value="Acheter" name="buy" class="stylebtn">
        </div>
      </div>
    </section>

    <section id="ok" class="s3">
      <div class="pic2">

        <img class="border" src="../photopr2/high-tech/clavier_de_punaise.jpg" alt="">
        <div class="dispo">
        <div class="dispo">
          <?php
          $total_products = $pdo->query('SELECT * FROM high_tech WHERE id = 2');
          
          while ($data = $total_products->fetch(PDO::FETCH_OBJ)):
          ?>
          <h2 class="title">
          <?= $data->name ?>
          </h2>
          <div class="text1">
            <p><?= $data->desc ?></p>
            <p><?= $data->price ?></p>
          </div>

          <?php
          endwhile;
          ?>
          <input type="submit" value="Acheter" name="buy" class="stylebtn">
        </div>
      </div>
    </section>

    <section id="ok" class="s4">
      <div class="pic3">

        <img class="border" src="../photopr2/high-tech/cd_cadena.jpg" alt="">
        <div class="dispo">
        <div class="dispo">
          <?php
          $total_products = $pdo->query('SELECT * FROM high_tech WHERE id = 3');
          
          while ($data = $total_products->fetch(PDO::FETCH_OBJ)):
          ?>
          <h2 class="title">
          <?= $data->name ?>
          </h2>
          <div class="text1">
            <p><?= $data->desc ?></p>
            <p><?= $data->price ?></p>
          </div>

          <?php
          endwhile;
          ?>
          <input type="submit" value="Acheter" name="buy" class="stylebtn">
        </div>
      </div>
    </section>
    
</body>
<script src="./all.js"></script>

</html>

