<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wild Template</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="index.css">
    <link href="formulaire.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	
</head>
<body>
    <div class="menu">
        <div id="logo-desk"><img src ="PHOTOS/logonew.png"></div>
        <nav>
            <input type="checkbox" id="btn-menu">
            <label for="btn-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
            <div class="menu-nav">
                <div class="logo" id="logo-mobile"><img src ="PHOTOS/logonew.png"></div>
                <ul class="navbar">

                    <li><a href="index.php">Accueil</a></li>
                    <li>
                        <a href="armes.php" class="menu-link">Shop</a>
                        <input type="checkbox" id="link-arme">
                        <label for="link-arme">Shop</label>
                        <ul>
                            <li><a href="armes.php">Armes à feu</a></li>
                            <li><a href="armes.php">Armes blanches</a></li>
                            <li><a href="armes.php/#Armesexplosives">Festif</a></li>
                            <li><a href="armes.php">Médecine douce</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-link">Hotel/Restaurant</a>
                        <input type="checkbox" id="link-hotel">
                        <label for="link-hotel">Hotel/Restaurant</label>
                        <ul>
                            <li><a href="#">Hotel/Restaurant 1</a></li>
                            <li><a href="#">Hotel/Restaurant 2</a></li>
                            <li><a href="#">Hotel/Restaurant 3</a></li>
                            <li><a href="#">Hotel/Restaurant 4</a></li>
                        </ul>
                    </li>
                    <li><a href="formulaire.php">Contact/Avis</a></li>
                    <li><a href="equipe.php">Notre Equipe</a></li>
                </ul>
            </div>
        </nav>
    </div>