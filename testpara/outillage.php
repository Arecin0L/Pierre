<?php
require './datab/stock/function.php';
include './datab/stock/header.php';
?>

<body>

  <div class="para">
    <div class="section-stick">
      <div class="stick active"></div>
    </div>
    <section id="out" class="s1">

      <div class="home">

        <div class="kriss">
          <h1 class="loni">
            <span class="fredo">O</span>
            <span class="fredo">u</span>
            <span class="fredo">t</span>
            <span class="fredo">i</span>
            <span class="fredo">l</span>
            <span class="fredo">l</span>
            <span class="fredo">a</span>
            <span class="fredo">g</span>
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
    <section id="cool" class="s2">
      <div class="pic1">
        <img class="border" src="../photopr2/outillage/poignee_gonflable.jpg" alt="">

        <div class="dispo">
          <h2 class="title">Poignée</h2>

          <?php
          $total_products = $pdo->query('SELECT * FROM outillage WHERE id = 1');
          
          while ($data = $total_products->fetch(PDO::FETCH_OBJ)):
          ?>

          <p class="text1">
            <p><?= $data->desc ?></p>
            <p><?= $data->price ?></p>
          </p>
          <?php
          endwhile;
          ?>

          <input type="submit" value="Acheter" name="buy" class="stylebtn">
        </div>
      </div>
    </section>
    <section id="cool" class="s3">
      <div class="pic2">

        <img class="border" src="../photopr2/outillage/tournevide.jpg">
        <div class="dispo">
          <h2 class="title">Tournevide</h2>
          <p class="text2">Tu es un piètre mécanicien mais tu veux que tes amis croient que tu es un pro du bricolage?
            Le
            gain de place est juste incroyable, terminé la recherche de vis et de tournevis correspondant, voici le deux
            en un, le Tournevide!!
            <br>
            <br>
            Le Tournevide est IN-CRO-YABLE !! Il existe en version cruciforme et en version plat pour votre plus grand
            bonheur, il vous sauvera la vie si votre femme désire accrocher un cadre moche, en disant que cet outil est
            trop évoluer pour pouvoir l'utiliser pour un simple cadre GIFI moche!
          </p>
          <input type="submit" value="Acheter" name="buy" class="stylebtn">
        </div>
      </div>
    </section>

    <section id="cool" class="s4">
      <div class="pic3">

        <img class="comp" src="../photopr2/outillage/compas_qui_fait_des_carres.jpg">
        <div class="dispo">
          <h2 class="title">Compas</h2>
          <p class="text3">
            Léonard de Vinci lui même, se servait également de cet instrument et seul l'entreprise truC vous le propose
            en
            exclusivité mondiale le Compas carré. En effet le Compas carré réglera beaucoup de conflits entre les
            partisants du carré et du rond sans angle
            <br>
            <br>
            Il aidera aussi tout les architectes en herbes dans leurs démarches de projets, pour faire rentrer un meuble
            rond dans une pièce carré ou une pièce ronde avec des meubles carrés.
            ATTENTION !!! Jusqu'au 31 Février pour un compas acheté un niveau à bulle fixe offert une exclusivité de
            l'entreprise truC.
          </p>
          <input type="submit" value="Acheter" name="buy" class="stylebtn">
        </div>

      </div>
    </section>
    <section id="cool" class="s5">
      <div class="pic4">
        <img class="border" src="../photopr2/outillage/marteau-electrique.jpg" alt="">
        <div class="dispo">
          <h2 class="title">Marto'Elec</h2>
          <p class="text4">
            Tout le monde à une fois dans sa vie taper au marteau pour faire moulte travaux de ménage domestique, mais
            voilà
            votre poigné de quarantenaire, vous fait défaut, nous avons la solution se marteau électrique vous rendra
            votre "punch" d'entant.
            Claude Francois (Professionnel de chez ENGIE) lui même s'en servi pour changer une ampoule et depuis se jour
            il n'a plus jamais eté embêter adieu les problèmes grâce au Marteau Elec
          </p>
          <input type="submit" value="Acheter" name="buy" class="stylebtn">
        </div>
      </div>


    </section>

    <section id="cool" class="s6">
      <div class="pic5">
        <img class="border" src="../photopr2/outillage/robinorange.jpg" alt="">
        <div class="dispo">
          <h2 class="title">Oranbinet</h2>
          <p class="text5">
            Encore un produit exclusif dans la boutique , adopter par la chaine GULLI en personne en association avec
            Leroy
            Merlin pour inciter les jeunes à boire du jus d'orange car oui cinq kilos de fruits et légumes par jour
            c'est
            bon pour ton corps jeune malandrin.
            Livré avec son filtre anti pépin et anticalcaire ,s'adapte à d'autres genre de fruit et légumes et pourquoi
            innové en buvant une bonne raclette? les possibilités sont infini.
          </p>
          <input type="submit" value="Acheter" name="buy" class="stylebtn">
        </div>
      </div>
  </div>
  </section>
  </div>

  <?php
  include './datab/stock/footer.php';
  ?>