<?php require 'data.php' ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="slider.css">
    <title>Commisseriat de la Wild</title>
</head>
<body>
<!--Ajout de la navbar-->
<section id="container_slider">
    <div id="slider"></div>
</section>
<section id="description">
    <h2>SHOP</h2>
    <div class="container_page_description">
        <p class="page_desciption">
            Profitez de notre braderie exceptionnelle d'objects saisies lors de nos dernières perquisitions!!!
        </p>
    </div>
</section>
<section id="container_weapons">
    <?php foreach($weaponsCategories as $weaponCategory => $weapons) : ?>

        <div id="<?= $weaponCategory ?>">

            <h2 class="type_weapons"><?= $weaponCategory ?></h2>
            <div class="weapons">
                <?php foreach ($weapons as $weapon => $name) : ?>
                    <div class="weapon_card">
                        <img class="weapon_image" src="./PHOTOS/<?= $weapon ?>" alt="<?= $name ?>">
                        <p class="weapon_description"><span class="name_weapon"><?= $name ?></span> :<br>au prix de <?= number_format(rand(500, 50000),2, ',', ' ') ?>€</p>
                    </div>
                <?php endforeach;?>
            </div>
        </div>

    <?php endforeach; ?>
</section>
<audio id="candy" autoplay>
    <source src="PHOTOS/candy-shop.mp3">
</audio>
<script src="slider.js"></script>
</body>
</html>
