<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Yanone+Kaffeesatz:wght@300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../fa/css/all.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./carousel.css">
    <title>Document</title>
</head>

<body>
    <div class="grandmere">

        <header>
            <div class="truc">
                <img class="logo" src="./Logo pic/logob.gif" alt="" width="100vw">
                <h1>tru<span style="color: rgb(183, 99, 204)">C</span><br> <span style="font-size: 20px">créée en
                        2018</span></h1>
            </div>
            <div class="lienhead">
                <div class="search">
                    <input type="text" placeholder="Rechercher" class="barre">
                    <button type="submit"><i
                                class="fa fa-search"></i></a></button>
                </div>
                <div class="spal">
                    <a class="si" href="./datab/login.php">Se connecter</a>
                    <a class="p" href="">Panier</a>
                    <div class="lg">
                        <div class="lopen" href="">Langue</div>
                        <div id="lang">
                            <a href="./indenglais.html" class="changelang"><img class="flag" src="./logo_drapeaux/uk-flag.png" width="30px" height="30px">Anglais</a>
                            <a href="./indexall.html" class="changelang"><img class="flag" src="./logo_drapeaux/germany.png" width="30px" height="30px">Allemand</a>
                            <a href="./indexpagnol.html" class="changelang"><img class="flag" src="./logo_drapeaux/spain.png" width="30px" height="30px"> Espagnol</a>
                            <a href="./index.html" class="changelang"><img class="flag" src="./logo_drapeaux/france.png"  width="30px" height="30px">Francais</a>
                        </div>
                    </div>
                    <a class="ap" href="./fredo/PARALLAX/TEAM/team.html">A propos</a>
                </div>
            </div>
        </header>

        <nav>
            <div class="nav">
                <div class="menuderoulant">
                    <a href="" class="tnp">Tous nos produits</a>
                    <div class="menu">
                        <a href="./testpara/outillage.php">Outillage</a>
                        <a href="./testpara/vaisselle.php">Vaisselle</a>
                        <a href="./testpara/optique.php">Optique</a>
                        <a href="./testpara/jardinage.php">Jardinage</a>
                        <a href="./testpara/bienetre.php">Bien-être</a>
                        <a href="./testpara/hightech.php">High-tech</a>
                        <a href="./testpara/hygiene.php">Hygiène</a>
                        <a href="./testpara/loisirs.php">Loisirs</a>
                    </div>
                </div>
                <a class="n" href="./fredo/PARALLAX/para.html">Nouveautés</a>
                <a class="pr" href="./fredo/PARALLAX/BACKANIME/backanime.html">Promos</a>
            </div>
        </nav>


        <section>
            <div id="contentContainer" class="trans3d">
                <article id="carouselContainer" class="trans3d">
                    <figure id="item1" class="carouselItem trans3d"><img src="./photopr2/bien-être/poitong.jpg" style="width: 320px; height: 185px;" alt="">
                        <div class="carouselItemInner trans3d"></div>
                    </figure>
                    <figure id="item2" class="carouselItem trans3d">
                        <img src="./photopr2/high-tech/clavier_de_punaise.jpg" style="width: 320px; height: 185px;" alt="">
                        <div class="carouselItemInner trans3d"></div>
                    </figure>
                    <figure id="item3" class="carouselItem trans3d">
                        <img src="./photopr2/hygiene/tige_bouchon.jpg" style="width: 320px; height: 185px;" alt="">
                        <div class="carouselItemInner trans3d"></div>
                    </figure>
                    <figure id="item4" class="carouselItem trans3d">
                        <img src="./photopr2/jardinage/w_arrosoir.jpg" style="width: 320px; height: 185px;" alt="">
                        <div class="carouselItemInner trans3d"></div>
                    </figure>
                    <figure id="item5" class="carouselItem trans3d">
                        <img src="./photopr2/loisirs/w_raquette.jpg" style="width: 320px; height: 185px;" alt="">
                        <div class="carouselItemInner trans3d"></div>
                    </figure>
                    <figure id="item6" class="carouselItem trans3d">
                        <img src="./photopr2/optique/w_lunettecyclope.jpg" style="width: 320px; height: 185px;" alt="">
                        <div class="carouselItemInner trans3d"></div>
                    </figure>
                    <figure id="item7" class="carouselItem trans3d">
                        <img src="./photopr2/outillage/compas_qui_fait_des_carres.jpg" style="width: 320px; height: 185px;" alt="">
                        <div class="carouselItemInner trans3d"></div>
                    </figure>
                    <figure id="item7" class="carouselItem trans3d">
                        <img src="./photopr2/vaisselle/fourchaine.jpg" style="width: 320px; height: 185px;" alt="">
                        <div class="carouselItemInner trans3d">
                        </div>
                    </figure>
                    
                </article>
            </div>
        </section>

    </div>
</body>


<script src="https://raw.githubusercontent.com/JohnBlazek/codepen-resources/master/3d-carousel/js/libs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="./index.js"></script>

</html>