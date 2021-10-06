<?php require 'nav.php'?>
<?php require 'data.php'?>

<!--Ajout de la navbar-->
<section id="container-slider">
    <div id="slider"></div>
</section>
<section id="description">
    <h2>SHOP</h2>
    <div class="container-page-description">
        <p class="page-desciption">
            Profitez de notre grande braderie exceptionnelle d'objets saisis lors de nos dernières perquisitions!!!
        </p>
    </div>
</section>
<section id="container-weapons">
    <?php foreach($weaponsCategories as $weaponCategory => $weapons) : ?>

        <div id="<?= str_replace(" ", "",$weaponCategory) ?>">

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

<!--<audio id="candy" autoplay>
    <source src="PHOTOS/candy-shop.mp3">
</audio>-->

<?php require'footer.php' ?>
<script src="JS/slider.js"></script>
</body>
</html>
