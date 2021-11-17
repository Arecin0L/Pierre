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
  <title>Vaisselle</title>
</head>

<body>


  <div class="para">
    <div class="section-stick">
      <div class="stick active"></div>
    </div>
    <section id="vaiss" class="s1">

      <div class="home">

        <div class="kriss">
          <h1 class="loni">
            <span class="fredo">V</span>
            <span class="fredo">a</span>
            <span class="fredo">i</span>
            <span class="fredo">s</span>
            <span class="fredo">s</span>
            <span class="fredo">e</span>
            <span class="fredo">l</span>
            <span class="fredo">l</span>
            <span class="fredo">e</span>
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

    <section id="bien" class="s2">
      <div class="pic1">
        <img class="border" src="../photopr2/vaisselle/fourchaine.jpg" alt="">
        <div class="dispo">
          <?php
          $total_products = $pdo->query('SELECT * FROM vaisselle WHERE id = 1');
          
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

    <section id="bien" class="s3">
      <div class="pic2">

        <img class="border" src="../photopr2/vaisselle/tasse_en_bison.jpg" alt="">
        <div class="dispo">
        <div class="dispo">
          <?php
          $total_products = $pdo->query('SELECT * FROM vaisselle WHERE id = 2');
          
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

    <section id="bien" class="s4">
      <div class="pic3">

        <img class="border" src="../photopr2/vaisselle/saliere_et_poivriere.jpg" alt="">
        <div class="dispo">
        <div class="dispo">
          <?php
          $total_products = $pdo->query('SELECT * FROM vaisselle WHERE id = 3');
          
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
    <section id="bien" class="s5">
      <div class="pic4">

        <img class="border" src="../photopr2/vaisselle/verre_piquant.jpg" alt="">
        <div class="dispo">
        <?php
          $total_products = $pdo->query('SELECT * FROM vaisselle WHERE id = 4');
          
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
    <section id="bien" class="s6">
      <div class="pic5">

        <img class="trouillère" src="../photopr2/vaisselle/cuillere_trouee.jpg" alt="">
        <div class="dispo">
        <?php
          $total_products = $pdo->query('SELECT * FROM vaisselle WHERE id = 5');
          
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

</body>
<script src="./all.js"></script>

</html>