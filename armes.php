<?php require 'data.php' ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="slider.css">
    <title>Commisseriat de la Wild</title>
</head>
<body>
<!--Ajout de la navbar-->
<section id="container-slider">
    <div id="slider"></div>
</section>
<section id="description">
    <h2>SHOP</h2>
    <div class="container-page-description">
        <p class="page-desciption">
            Profitez de notre braderie exceptionnelle d'objects saisies lors de nos dernières perquisitions!!!
        </p>
    </div>
</section>
<section id="container-weapons">
    <?php foreach($weaponsCategories as $weaponCategory => $weapons) : ?>

        <div id="<?= $weaponCategory ?>">

            <h2 class="type-weapons"><?= $weaponCategory ?></h2>
            <div class="weapons">
                <?php foreach ($weapons as $weapon => $name) : ?>
                    <div class="weapon-card">
                        <img class="weapon-image" src="./PHOTOS/<?= $weapon ?>" alt="<?= $name ?>">
                        <p class="weapon-description"><span class="name-weapon"><?= $name ?></span> :</p>
                        <p class="weapon-description">au prix de <?= number_format(rand(500, 50000),2, ',', ' ') ?>€</p>
                    </div>
                <?php endforeach;?>
            </div>
        </div>

    <?php endforeach; ?>
</section>
<!--
<audio id="candy" autoplay>
    <source src="PHOTOS/candy-shop.mp3">
</audio>
-->
<footer id="footer">
    <a href=""class="footer-link">CVG</a>
        <div class="media-social">
        <a href="https://twitter.com/"class="footer-link"><i class="fab fa-twitter"></i>Twitter</a>
        <a href="https://www.facebook.com/"class="footer-link"><i class="fab fa-facebook-f"></i>Facebook</a>
        <a href="https://www.instagram.com/"class="footer-link"><i class="fab fa-instagram"></i>Instagram</a>
    </div>
    <a href="equipe.php"class="footer-link">Notre équipe</a>
</footer>
<script src="slider.js"></script>
</body>
</html>
